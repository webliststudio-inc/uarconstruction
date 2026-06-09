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
    $deliveryAreaId = $_GET['deliveryAreaId'] ?? '';
    $deliveryLocationId = $_GET['deliveryLocationId'] ?? '';
    $deliveryLocationName = strtoupper($data['deliveryLocationName']);
    $aggregatePurchasePrice = $data['aggregatePurchasePrice'] ?? 0;
    $flatDeliveryCharges = $data['flatDeliveryCharges'] ?? 0;
    $additionalDeliveryPercentage = $data['additionalDeliveryPercentage'] ?? 0;
    $statusId = $data['statusId'];
    
    ///////////////Validate empty fields//////////////////////////////////////////////////////////
    validateEmptyField($deliveryAreaId, 'DELIVERY AREA');
    validateEmptyField($deliveryLocationName, 'DELIVERY LOCATION NAME');
    validateEmptyField($aggregatePurchasePrice, 'AGGREGATE PURCHASE PRICE');
    validateEmptyField($flatDeliveryCharges, 'FLAT DELIVERY CHARGES');
    validateEmptyField($additionalDeliveryPercentage, 'ADDITIONAL DELIVERY PERCENTAGE');
    validateEmptyField($statusId, 'STATUS');
    ////////////////validate others///////////////////////////////////////////////////////////////
    validateNumericField($aggregatePurchasePrice, 'AGGREGATE PURCHASE PRICE');
    validateNumericField($flatDeliveryCharges, 'FLAT DELIVERY CHARGES');
    validateNumericField($additionalDeliveryPercentage, 'ADDITIONAL DELIVERY PERCENTAGE');
    validateNumericField($statusId, 'STATUS');

    ////////////////// Check delivery location existence //////////////////
    $deliveryLocationCheck = selectQuery(
        $conn,
        "SELECT deliveryLocationId FROM BRANCH_DELIVERY_LOCATIONS_TAB WHERE deliveryAreaId=? AND deliveryLocationName=? AND deliveryLocationId!=?",
        "sss",
        [$deliveryAreaId, $deliveryLocationName, $deliveryLocationId]
    );

    if (!empty($deliveryLocationCheck)) {
        throw new ConflictException("DELIVERY LOCATION EXIST! Delivery location already exists for this branch.");
    }


        ///// update BRANCH_DELIVERY_LOCATIONS_TAB table////////////////////////////////////////////////////////////
    $updateQuery ="UPDATE `BRANCH_DELIVERY_LOCATIONS_TAB` SET
    `deliveryAreaId` = ?, `deliveryLocationName` = ?, `aggregatePurchasePrice` = ?, `flatDeliveryCharges` = ?, `additionalDeliveryPercentage` = ?, `statusId` = ?, `updatedBy` = ?, `updatedTime` = NOW() WHERE `deliveryLocationId` = ?";
    $updateParams=[$deliveryAreaId, $deliveryLocationName, $aggregatePurchasePrice, $flatDeliveryCharges, $additionalDeliveryPercentage, $statusId, $loginStaffId, $deliveryLocationId];
    $updateResult = updateQuery($conn, $updateQuery, 'ssdddiss', $updateParams);

    ////get the details of the updated delivery location to return in the response////////////////////////////////////////
    $getQuery = "SELECT * FROM BRANCH_DELIVERY_LOCATIONS_TAB WHERE deliveryLocationId= ?";
    $getParams=[$deliveryLocationId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    $deliveryLocation=$getResult[0];
    ////////////////// Created By //////////////////
    $deliveryLocation['createdByData'] = _action_performed_by($conn, $deliveryLocation['createdBy']) ?? null;
    ////////////////// Updated By //////////////////
    $deliveryLocation['updatedByData'] = _action_performed_by($conn, $deliveryLocation['updatedBy']) ?? null;
    ////////////////// status details //////////////////
    $deliveryLocation['statusData'] = _get_status_details($conn, $deliveryLocation['statusId']) ?? null;
	$deliveryLocationData = $deliveryLocation;
    
    $response=[
		'response' => 200,
		'success' => true,
		'message' => "DELIVERY LOCATION UPDATED SUCCESSFULLY!",
        'data' => $deliveryLocationData
	];
 }catch (Throwable $e) {
    ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>