<?php
require_once '../../../../config/connection.php';
require_once '../../../../config/staff-session-check.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }

    if (!$checkSession) {
        throw new UnauthorizedException("SESSION EXPIRED! Please LogIn Again.");
    }

    ////////////////// Variables //////////////////
    $deliveryAreaId = trim($_GET['deliveryAreaId'] ?? '');
    $deliveryLocationId = trim($_GET['deliveryLocationId'] ?? '');
    
    validateEmptyField($deliveryAreaId, 'DELIVERY AREA');
    validateEmptyField($deliveryLocationId, 'DELIVERY LOCATION');
  
     ////get the details of the created delivery location to return in the response////////////////////////////////////////
    $deliveryLocationsQuery = "SELECT * FROM BRANCH_DELIVERY_LOCATIONS_TAB WHERE deliveryLocationId= ? AND deliveryAreaId=?";
    $deliveryLocationsResult = selectQuery($conn, $deliveryLocationsQuery, 'ss', [$deliveryLocationId, $deliveryAreaId])[0] ?? null;
    if (empty($deliveryLocationsResult)) {
        throw new NotFoundException("No Record found");
    }
    $deliveryLocationsResult['createdByData'] = _action_performed_by($conn, $deliveryLocationsResult['createdBy']) ?? null;
    ////////////////// Updated By //////////////////
    $deliveryLocationsResult['updatedByData'] = _action_performed_by($conn, $deliveryLocationsResult['updatedBy']) ?? null;
    ////////////////// status details //////////////////
    $deliveryLocationsResult['statusData'] = _get_status_details($conn, $deliveryLocationsResult['statusId']) ?? null;

    //// get delivery area details to return in the response////////////////////////////////////////
    $deliveryAreaQuery = "SELECT deliveryAreaId, deliveryAreaName FROM BRANCH_DELIVERY_AREA_TAB WHERE deliveryAreaId= ?";
    $deliveryAreaResult = selectQuery($conn, $deliveryAreaQuery, 's', [$deliveryAreaId])[0] ?? null;
    $deliveryLocationsResult['deliveryAreaData'] = $deliveryAreaResult ?? null;

    ////////////////// Response //////////////////
    $response = [
        'response'        => 200,
        'success'         => true,
        'message'         => "DELIVERY LOCATION FETCHED SUCCESSFULLY!",
        'allRecordCount'  => count($deliveryLocationsResult),
        'data'            => $deliveryLocationsResult
    ];

} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);