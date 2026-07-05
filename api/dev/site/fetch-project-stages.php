<?php
require_once '../config/connection.php';
try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in and try again.");
    }


    $selectQuery = "SELECT projectStageId, projectStageName FROM SETUP_PROJECT_STAGES_TAB";
    $projectStageData = selectQuery($conn, $selectQuery);
    $allRecordCount = count($projectStageData);
    if ($allRecordCount == 0) {
        throw new NotFoundException("No Record found");
    }
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "PROJECT STAGES FETCH SUCCESFFULY!",
        'allRecordCount' => $allRecordCount,
        'data' => $projectStageData
    ];
} catch (Throwable $e) {
    ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>