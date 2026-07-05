<?php
require_once '../config/connection.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }


    $selectQuery = "SELECT * FROM CONTACTS_REVIEWS_TAB WHERE crFlag = 'REVIEW' AND statusId = 1 ORDER BY updatedTime DESC";
    $allContactReviewData = selectQuery($conn, $selectQuery);
    if (empty($allContactReviewData)) {
        throw new NotFoundException("No Contact Reviews found with the provided ID.");
    }
    foreach ($allContactReviewData as &$contactReviewData) {
        $statusId = $contactReviewData['statusId'];
        $updatedBy = $contactReviewData['updatedBy'];
        /// get statusData
        $statusData = _get_status_details($conn, $statusId);
        $contactReviewData['statusData'] = $statusData;

        /// get updatedByData
        $updatedByData = _action_performed_by($conn, $updatedBy);
        $contactReviewData['updatedByData'] = $updatedByData;
    }

    ///////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "Contact Reviews fetched successfully.",
        'allRecordCount' => count($allContactReviewData),
        'data' => $allContactReviewData,
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>