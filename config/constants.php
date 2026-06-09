<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$websiteAutoUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$appName = 'Urban and Rural Construction';

//$websiteUrl='https://uarconstruction.com'; /// For Live Server Url //
$websiteUrl = 'http://localhost/weblist-studio/uarconstruction';
//$websiteUrl='http://10.143.4.177/weblist-studio/uarconstruction';
//$websitePath = $_SERVER['DOCUMENT_ROOT'];
$websitePath = $_SERVER['DOCUMENT_ROOT'] . '/weblist-studio/uarconstruction'; //dirname(__FILE__);
$codeVersion = date('Ymdhis');
?>

<?php
$userOsBrowser = $_SERVER['HTTP_USER_AGENT'];
/////////////////////////////////////////////////////////////////////////////////
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$userIpAddress = getUserIP();

/////////////////////////////////////////////////////////////////////////////////
function getBrowserId()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';  // Browser and OS info
    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';  // Language
    // Combine all data and create a hash
    $browserId = hash('sha256', $userAgent . $acceptLanguage);
    return $browserId;
}
$userDeviceId = getBrowserId();
?>

<script>
    /// Constants ///
    var websiteUrl = "<?php echo $websiteUrl; ?>";
    var userOsBrowser = "<?php echo $userOsBrowser; ?>"; /// For User OS Browser //
    var userIpAddress = "<?php echo $userIpAddress; ?>"; /// For User IP Address //
    var userDeviceId = "<?php echo $userDeviceId; ?>"; /// For User Device Id //

    /// Site Middleware Urls ///
    var siteMiddlewareUrl = websiteUrl + '/config/code'; //// For site url

    /// Admin Middleware Urls ///
    var adminMiddleWareUrl = websiteUrl + '/admin/config/code'; /// For Admin Login Middleware Url //
    var adminUrl = websiteUrl + '/admin'; /// For Admin Url //

    /// Admin Portal Middleware Urls ///
    var adminPortalMiddlewareUrl = websiteUrl + '/admin/portal/config/code'; /// For Admin Portal Middleware Url //
    var adminPortalUrl = websiteUrl + '/admin/portal'; /// For Portal Url //

    var pageCategory = {
        services: 'services',
        portfolio: 'portfolio',
        blog: 'blog'
    }
</script>