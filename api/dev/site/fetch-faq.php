<?php
require_once '../config/connection.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }
    ////////////////// Variables //////////////////
    $q = trim($_GET['q'] ?? '');
    $categoryId = trim($_GET['categoryId'] ?? '');
    $faqId = trim($_GET['faqId'] ?? '');
    $statusId = trim($_GET['statusId'] ?? 1); //// default statusId = 1 (ACTIVE)
    $limit = trim($_GET['limit'] ?? '');
    ////////////////// Build Query //////////////////
    $conditions = [];
    $params = [];
    $types = '';

    if (!empty($faqId)) {
        $conditions[] = "faqId = ?";
        $params[] = $faqId;
        $types .= "s";
    }
    if (!empty($categoryId)) {
        $conditions[] = "categoryId = ?";
        $params[] = $categoryId;
        $types .= "s";
    }

    if (!empty($statusId)) {
        $conditions[] = "statusId IN ($statusId)";
    }

    $extraWhere = '';
    if (!empty($conditions)) {
        $extraWhere = " AND " . implode(" AND ", $conditions);
    }

    ////////////////// Search Query //////////////////

    $searchClause = "
        (
            faqQuestion LIKE ?
            OR faqAnswer LIKE ?
        )
    ";

    $searchValue = "%{$q}%";

    $params = array_merge([$searchValue, $searchValue], $params);
    $types = "ss" . $types;

    if (!empty($limit)) {
        $whereLimit = "LIMIT $limit";
    }

    $selectQuery = "SELECT faqId, faqQuestion, faqAnswer FROM FAQ_TAB WHERE $searchClause $extraWhere $whereLimit";
    $selectParams = array_merge($params);

    $allFAQData = selectQuery($conn, $selectQuery, $types, $selectParams);
    $allRecordCount = count($allFAQData);
    if (empty($allFAQData)) {
        throw new NotFoundException("No FAQ found with the provided FAQ ID.");
    }


    ///////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "FAQ fetched successfully.",
        'allRecordCount' => $allRecordCount,
        'data' => $allFAQData,
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>