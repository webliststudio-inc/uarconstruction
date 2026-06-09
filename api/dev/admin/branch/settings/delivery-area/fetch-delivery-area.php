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
    $q        = trim($_GET['q'] ?? '');
    $branchId = trim($_GET['branchId'] ?? '');
    $deliveryAreaId = trim($_GET['deliveryAreaId'] ?? '');
    $statusId = trim($_GET['statusId'] ?? '');

    validateEmptyField($branchId, 'BRANCH');
    ////////////////// Build Query //////////////////
    $conditions = [];
    $params     = [];
    $types      = '';

    $conditions[] = "branchId = ?";
    $params[]     = $branchId;
    $types       .= "s";

    if (!empty($q)) {
        $conditions[] = "(deliveryAreaName LIKE ?)";
        $params[] = "%$q%";
        $types .= "s";
    }

    if (!empty($deliveryAreaId)) {
        $conditions[] = "deliveryAreaId = ?";
        $params[] = $deliveryAreaId;
        $types .= "s";
    }

    if (!empty($statusId)) {
        $conditions[] = "statusId IN ($statusId)";
    }

    $where = !empty($conditions) ? "WHERE " . implode(" AND ", $conditions) : "";

    $select = "SELECT * FROM BRANCH_DELIVERY_AREA_TAB $where";

    $deliveryAreas = selectQuery($conn, $select, $types, $params);

    if (empty($deliveryAreas)) {
        throw new NotFoundException("No Record found");
    }

    ////////////////// Process Delivery Area Data //////////////////
    foreach ($deliveryAreas as &$deliveryArea) {
        $deliveryAreaId  = $deliveryArea['deliveryAreaId'];
       ////////////////// Created By //////////////////
        $deliveryArea['createdByData'] = _action_performed_by($conn, $deliveryArea['createdBy']) ?? null;
        ////////////////// Updated By //////////////////
        $deliveryArea['updatedByData'] = _action_performed_by($conn, $deliveryArea['updatedBy']) ?? null;
        ////////////////// status details //////////////////
        $deliveryArea['statusData'] = _get_status_details($conn, $deliveryArea['statusId']) ?? null;

        ////get the details of the created delivery location to return in the response////////////////////////////////////////
        $deliveryLocationsQuery = "SELECT * FROM BRANCH_DELIVERY_LOCATIONS_TAB WHERE deliveryAreaId= ?";
        $deliveryLocationsParams=[$deliveryAreaId];
        $deliveryLocationsResult = selectQuery($conn, $deliveryLocationsQuery, 's', $deliveryLocationsParams);
        
        foreach ($deliveryLocationsResult as &$deliveryLocation) {
        ////////////////// Created By //////////////////
        $deliveryLocation['createdByData'] = _action_performed_by($conn, $deliveryLocation['createdBy']) ?? null;
        ////////////////// Updated By //////////////////
        $deliveryLocation['updatedByData'] = _action_performed_by($conn, $deliveryLocation['updatedBy']) ?? null;
        ////////////////// status details //////////////////
        $deliveryLocation['statusData'] = _get_status_details($conn, $deliveryLocation['statusId']) ?? null;
        }
        $deliveryArea['deliveryLocations'] = $deliveryLocationsResult;
    }

    ////////////////// Response //////////////////
    $response = [
        'response'        => 200,
        'success'         => true,
        'message'         => "DELIVERY AREAS FETCHED SUCCESSFULLY!",
        'allRecordCount'  => count($deliveryAreas),
        'data'            => $deliveryAreas
    ];

} catch (Throwable $e) {

    ErrorHandler::handle($e);

}

http_response_code($response['response'] ?? 500);
echo json_encode($response);