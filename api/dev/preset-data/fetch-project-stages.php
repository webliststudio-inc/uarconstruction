<?php
require_once '../config/connection.php';
try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in and try again.");
    }


    //////////////////declaration of variables//////////////////////////////////////
    $q = $_GET['q'];
    $projectStageId = $_GET['projectStageId'];
    if ($projectStageId != '') {
        $whareClause = "AND  projectStageId = '$projectStageId'";
    }
    $selectQuery = "SELECT * FROM SETUP_PROJECT_STAGES_TAB WHERE projectStageName LIKE ? $whareClause";
    $selectParams = ["%{$q}%"];
    $projectStageData = selectQuery($conn, $selectQuery, 's', $selectParams);
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