<?php include '../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | User Verification</title>
</head>

<body>
    <?php include 'alert.php' ?>
    <section class="login-div">
        <div class="login-image-div">
            <div class="logo-div">
                <a href="<?php echo $websiteUrl ?>">
                <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="Logo"></a>
            </div>
            <div class="bottom-container">
                <h1>
                    <?php echo $appName ?> -
                    <span>Admin Portal</span>
                </h1>
                <p>
                    Manage <?php echo $appName ?> from one centralized admin dashboard.
                </p>
            </div>
        </div>

        <div class="login-card-div">
            <div class="form-section" data-aos="fade-in" data-aos-duration="1200">
                <a href="<?php echo $websiteUrl ?>">
                <div class="logo-div">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="Logo">
                </div></a>

                <div class="form-back-div">
                    <div id="page-content">
                        <?php $page='otpPage';?>
                        <?php include $websitePath.'/admin/config/content-page.php';?>
                    </div>
                </div>
            </div>

            <div class="footer-container">
                <p>
                   &copy; <?php echo date('Y'); ?> <?php echo $appName ?> Admin Portal. All rights reserved.
                </p>
            </div>  
        </div>
    </section>
    <?php include 'bottom-scripts.php' ?>
</body>

</html>