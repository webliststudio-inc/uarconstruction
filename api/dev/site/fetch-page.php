<?php
require_once '../config/connection.php';

try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }

    ////////////////// Variables //////////////////
    $q = trim($_GET['q'] ?? '');
    $pageId = trim($_GET['pageId'] ?? '');
    $pageCategory = trim($_GET['pageCategory'] ?? ''); //// can be BLOG, PORTFOLIO, SERVICE
    $limit = trim($_GET['limit'] ?? '');
    $projectStageId = trim($_GET['projectStageId'] ?? '');
    $projectCategoryId = trim($_GET['projectCategoryId'] ?? '');
    $categoryId = trim($_GET['categoryId'] ?? '');
    ////////////////// Validation //////////////////
    validateEmptyField($pageCategory, 'PAGE CATEGORY');


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// update viewCount for each page
    if (!empty($pageId)) {
        //// check if the userDeviceId has already viewed the page on PAGES_VIEWS_TAB
        $selectQuery = "SELECT * FROM PAGES_VIEWS_TAB WHERE pageId = ? AND userDeviceId = ?";
        $selectParams = [$pageId, $userDeviceId];
        $viewData = selectQuery($conn, $selectQuery, "ss", $selectParams);
        if (empty($viewData)) {
            //// insert a new record in PAGES_VIEWS_TAB
            $insertQuery = "INSERT INTO PAGES_VIEWS_TAB (pageId, userDeviceId, updatedTime) VALUES (?, ?, NOW())";
            $insertParams = [$pageId, $userDeviceId];
            insertQuery($conn, $insertQuery, "ss", $insertParams);
            //// update the viewCount in PAGES_TAB
            $updateQuery = "UPDATE PAGES_TAB SET viewCount = viewCount + 1 WHERE pageId = ?";
            $updateParams = [$pageId];
            updateQuery($conn, $updateQuery, "s", $updateParams);
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $conditions = [];
    $params = [];
    $types = '';

    if (!empty($pageId)) {
        $conditions[] = "pageId = ?";
        $params[] = $pageId;
        $types .= "s";
    }
    if (!empty($projectStageId)) {
        $conditions[] = "projectStageId = ?";
        $params[] = $projectStageId;
        $types .= "s";
    }
    if (!empty($projectCategoryId)) {
        $conditions[] = "projectCategoryId = ?";
        $params[] = $projectCategoryId;
        $types .= "s";
    }
    if (!empty($categoryId)) {
        $conditions[] = "categoryId = ?";
        $params[] = $categoryId;
        $types .= "s";
    }

    $extraWhere = '';
    if (!empty($conditions)) {
        $extraWhere = " AND " . implode(" AND ", $conditions);
    }

    ////////////////// Search Query //////////////////

    $searchClause = "
        (
            pageTitle LIKE ?
            OR pageUrl LIKE ?
            OR seoKeywords LIKE ?
            OR seoDescription LIKE ?
            OR pageContent LIKE ?
        )
    ";

    $searchValue = "%{$q}%";

    $params = array_merge([$searchValue, $searchValue, $searchValue, $searchValue, $searchValue], $params);
    $types = "sssss" . $types;

    if (!empty($limit)) {
        $whereLimit = "LIMIT $limit";
    }
    if ($pageCategory !== 'SERVICE') {
        $whereOrder = "ORDER BY updatedTime DESC";
    }


    $selectQuery = "SELECT * FROM PAGES_TAB WHERE $searchClause $extraWhere AND pageCategory = ? AND statusId=1 $whereOrder $whereLimit ";
    $selectParams = array_merge($params, [$pageCategory]);
    $allPageData = selectQuery($conn, $selectQuery, $types . "s", $selectParams);
    $allRecordCount = count($allPageData);
    if (empty($allPageData)) {
        throw new NotFoundException("No page found with the provided PAGE ID.");
    }


    foreach ($allPageData as &$pageData) {
        $pagePicturesData = [];
        $pageId = $pageData['pageId'];
        $categoryId = $pageData['categoryId'];
        $projectCategoryId = $pageData['projectCategoryId'];
        $projectStageId = $pageData['projectStageId'];
        $statusId = $pageData['statusId'];
        $createdBy = $pageData['createdBy'];
        $updatedBy = $pageData['updatedBy'];

        /// get statusData
        $statusData = _get_status_details($conn, $statusId);
        $pageData['statusData'] = $statusData;
        /// get createdByData
        $createdByData = _action_performed_by($conn, $createdBy);
        $pageData['createdByData'] = $createdByData;
        /// get updatedByData
        $updatedByData = _action_performed_by($conn, $updatedBy);
        $pageData['updatedByData'] = $updatedByData;
        if ($pageCategory === 'BLOG') {
            /// get categoryData
            $categoryData = _get_category_details($conn, $categoryId);
            $pageData['categoryData'] = $categoryData;
        }
        if ($pageCategory === 'PORTFOLIO') {
            /// get categoryData
            $projectStageData = _get_project_stage_details($conn, $projectStageId);
            $pageData['projectStageData'] = $projectStageData;

            /// get projectCategoryData
            $projectCategoryData = _get_project_category_details($conn, $projectCategoryId);
            $pageData['projectCategoryData'] = $projectCategoryData;
        }

        /// get pagePicturesData
        $selectQuery = "SELECT * FROM PAGE_PICTURES_TAB WHERE pageId = ? ORDER BY sn ASC";
        $selectParams = [$pageId];
        $pagePicturesData = selectQuery($conn, $selectQuery, "s", $selectParams);
        $pageData['pagePicturesData'] = $pagePicturesData;
    }

    ////////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "PAGE FETCHED SUCCESSFULLY!",
        'allRecordCount' => $allRecordCount,
        'data' => $allPageData
    ];

} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>