<?php
require_once '../config/connection.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }
    ////////////////// Variables //////////////////
    $statusId = trim($_GET['statusId'] ?? 1); //// default statusId = 1 (ACTIVE)

    ////////////////// Build Filters //////////////////
    $filters = [];
    $params = [];
    $types = '';

    if (!empty($statusId)) {
        $statusArray = explode(',', $statusId);
        $placeholders = implode(',', array_fill(0, count($statusArray), '?'));
        $filters[] = "statusId IN ($placeholders)";
        foreach ($statusArray as $s) {
            $params[] = trim($s);
            $types .= 's';
        }
    }
    $whereClause = '';
    if (!empty($filters)) {
        $whereClause = 'WHERE ' . implode(' AND ', $filters);
    }

    ////////////////// Fetch Categories //////////////////
    $select = "SELECT categoryId, categoryName FROM INFORMATION_CATEGORY_TAB $whereClause ORDER BY categoryName ASC";
    $categories = selectQuery($conn, $select, $types, $params);

    if (empty($categories)) {
        throw new NotFoundException("No Record found");
    }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "INFORMATION CATEGORY FETCHED SUCCESSFULLY!",
        'allRecordCount' => count($categories),
        'data' => $categories
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>