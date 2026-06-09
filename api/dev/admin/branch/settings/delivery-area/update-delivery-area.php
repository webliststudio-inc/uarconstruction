<?php 
require_once '../../../../config/connection.php';
require_once '../../../../config/staff-session-check.php';

try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in and try again.");
    }
	if(!$checkSession){
		throw new UnauthorizedException("SESSION EXPIRED! Please LogIn Again.");
	}

    //////////////////declaration of variables///////////////////////////////////////////////////
    $deliveryAreaId = $_GET['deliveryAreaId'];
    $branchId = $_GET['branchId'];
    $deliveryAreaName = strtoupper($data['deliveryAreaName']);
    $statusId = $data['statusId'];
    
    ///////////////Validate empty fields//////////////////////////////////////////////////////////
    validateEmptyField($deliveryAreaId, 'DELIVERY AREA');
    validateEmptyField($branchId, 'BRANCH');
    validateEmptyField($deliveryAreaName, 'DELIVERY AREA NAME');
    validateEmptyField($statusId, 'STATUS');
    ////////////////validate others///////////////////////////////////////////////////////////////
    validateNumericField($statusId, 'STATUS');

    ////////////////// Check delivery area existence //////////////////
    $deliveryAreaCheck = selectQuery(
        $conn,
        "SELECT deliveryAreaId FROM BRANCH_DELIVERY_AREA_TAB WHERE branchId=? AND deliveryAreaName=? AND deliveryAreaId!=?",
        "sss",
        [$branchId, $deliveryAreaName, $deliveryAreaId]
    );

    if (!empty($deliveryAreaCheck)) {
        throw new ConflictException("DELIVERY AREA EXIST! Delivery area already exists for this branch.");
    }



    ///// update BRANCH_DELIVERY_AREA table////////////////////////////////////////////////////////////
    $updateQuery ="UPDATE `BRANCH_DELIVERY_AREA_TAB` SET
	`branchId` = ?, `deliveryAreaName` = ?, `statusId` = ?, `updatedBy` = ?, `updatedTime` = NOW() WHERE `deliveryAreaId` = ?";
	$updateParams=[$branchId, $deliveryAreaName, $statusId, $loginStaffId, $deliveryAreaId];
	$updateResult = updateQuery($conn, $updateQuery, 'ssiss', $updateParams);

    ////get the details of the updated delivery area to return in the response////////////////////////////////////////
    $getQuery = "SELECT * FROM BRANCH_DELIVERY_AREA_TAB WHERE deliveryAreaId= ?";
    $getParams=[$deliveryAreaId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    $deliveryArea=$getResult[0];
    ////////////////// Created By //////////////////
    $deliveryArea['createdByData'] = _action_performed_by($conn, $deliveryArea['createdBy']) ?? null;
    ////////////////// Updated By //////////////////
    $deliveryArea['updatedByData'] = _action_performed_by($conn, $deliveryArea['updatedBy']) ?? null;
    ////////////////// status details //////////////////
    $deliveryArea['statusData'] = _get_status_details($conn, $deliveryArea['statusId']) ?? null;
	$deliveryAreaData = $deliveryArea;
    
    $response=[
		'response' => 200,
		'success' => true,
		'message' => "DELIVERY AREA UPDATED SUCCESSFULLY!",
        'data' => $deliveryAreaData
	];
 }catch (Throwable $e) {
    ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>