<?php
function _staff_accesskey_validation($conn, $accessKey)
{
    $getQuery = "SELECT * FROM STAFF_TAB WHERE accessKey=? AND statusId=1";
    $getParams = [$accessKey];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    $count = count($getResult);
    if ($count > 0) {
        $userData = $getResult[0];
        $firstName = $userData['firstName'];
        $lastName = $userData['lastName'];
        $response = [
            "checkSession" => true,
            "loginStaffId" => $userData['staffId'],
            "loginFullname" => "$firstName $lastName",
            "loginRoleid" => $userData['roleId']
        ];
    } else {
        $response = [
            "checkSession" => false
        ];
    }
    return json_encode($response);
}

///////////////////////////////////////////////////////////////////////////////////////////////////
function _get_sequence_count($conn, $counterId)
{
    $getQuery = "SELECT counterValue FROM SETUP_COUNTER_TAB WHERE counterId = ? FOR UPDATE";
    $getParams = [$counterId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    $count = $getResult[0]['counterValue'];
    $num = $count + 1;
    ///// update the counter value in the database
    $updateQuery = "UPDATE `SETUP_COUNTER_TAB` SET `counterValue` = ? WHERE counterId = ?";
    $updateParams = [$num, $counterId];
    updateQuery($conn, $updateQuery, 'is', $updateParams);
    if ($num < 10) {
        $no = '00' . $num;
    } elseif ($num >= 10 && $num < 100) {
        $no = '0' . $num;
    } else {
        $no = $num;
    }
    $response = ["no" => $no];
    return ($response);
}

///////////////////////////////////////////////////////////////////////////////////////////////////
function updatePageViewsCount($conn, $publishId)
{
    $updateQuery = "UPDATE PAGES_TAB SET viewCount = viewCount + 1 WHERE publishId = ?";
    $updateParams = [$publishId];
    updateQuery($conn, $updateQuery, 's', $updateParams);
}

function _get_smtp_details($conn)
{
    $getQuery = "SELECT smtpHost, smtpUsername, smtpPassword, smtpPort, senderName, supportEmail FROM SETUP_BACKEND_SETTINGS_TAB WHERE settingsId = 'ID001'";
    $getResult = selectQuery($conn, $getQuery, 's', []);
    return json_encode($getResult[0]);
}

function _get_information_category_details($conn, $categoryId)
{
    $getQuery = "SELECT * FROM INFORMATION_CATEGORY_TAB WHERE categoryId = ?";
    $getParams = [$categoryId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}


function _action_performed_by($conn, $staffId)
{
    $getQuery = "SELECT CONCAT(firstName,' ',lastName) AS fullname, emailAddress FROM STAFF_TAB WHERE staffId = ?";
    $getParams = [$staffId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

////// get STATUS details
function _get_status_details($conn, $statusId)
{
    $getQuery = "SELECT statusId, statusName FROM SETUP_STATUS_TAB WHERE statusId = ?";
    $getParams = [$statusId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

////// get ROLE details
function _get_role_details($conn, $roleId)
{
    $getQuery = "SELECT roleId, roleName FROM ROLE_TAB WHERE roleId = ?";
    $getParams = [$roleId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

/////// get CATEGORY details
function _get_category_details($conn, $categoryId)
{
    $getQuery = "SELECT categoryId, categoryName FROM INFORMATION_CATEGORY_TAB WHERE categoryId = ?";
    $getParams = [$categoryId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

// get PROJECT STAGE details
function _get_project_stage_details($conn, $projectStageId)
{
    $getQuery = "SELECT projectStageId, projectStageName FROM SETUP_PROJECT_STAGES_TAB WHERE projectStageId = ?";
    $getParams = [$projectStageId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

/// get PROJECT CATEGORY details
function _get_project_category_details($conn, $projectCategoryId)
{
    $getQuery = "SELECT projectCategoryId, projectCategoryName FROM PROJECT_CATEGORY_TAB WHERE projectCategoryId = ?";
    $getParams = [$projectCategoryId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}