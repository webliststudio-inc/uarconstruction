<?php
/////// developed by Mike Afolabi on 19-02-2025//////////////////////
$appName = "Urban & Rural Construction Services";
$appDescription = "Urban & Rural Construction Services is a leading construction company dedicated to delivering high-quality building solutions. With a commitment to excellence, we specialize in residential, commercial, and industrial construction projects. Our team of skilled professionals ensures that every project is completed on time, within budget, and to the highest standards of craftsmanship. We prioritize safety, sustainability, and customer satisfaction in all our endeavors, making us a trusted partner in the construction industry.";

////////////////////////////////////////////////////////////////////////
$userIpAddress = isset($_SERVER['HTTP_USERIPADDRESS']) ? $_SERVER['HTTP_USERIPADDRESS'] : null;
$frontEndApiKey = isset($_SERVER['HTTP_APIKEY']) ? $_SERVER['HTTP_APIKEY'] : null;
$userDeviceId = isset($_SERVER['HTTP_USERDEVICEID']) ? $_SERVER['HTTP_USERDEVICEID'] : null;
////////////////////////////////////////////////////////////////////////

/// all constance
// $websiteUrl='http://localhost/projects/WebListStudio-GetFoodStuffs';
$websiteUrl = 'https://uarconstruction.com';
$backEndApiKey = 'fa8ace893c172b5b05f3befef1dc22cd'; //uarcontruction@2026


// Read the raw JSON input
$json = file_get_contents('php://input');
// Decode the JSON into an associative array
$data = json_decode($json, true);

$checkBasicSecurity = true;
///// check for API security
if ($frontEndApiKey != $backEndApiKey) {/// start if 1
    $checkBasicSecurity = false;
}

///// check for userIpAddress security
if (empty($userIpAddress)) {/// start if 1
    $checkBasicSecurity = false;
}

///// check for userDeviceId security
if (empty($userDeviceId)) {/// start if 1
    $checkBasicSecurity = false;
}