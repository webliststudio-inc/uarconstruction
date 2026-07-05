<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Construction, Renovation & Infrastructure Services in the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, construction services USA, residential construction, commercial construction, home renovation services, remodeling contractors, infrastructure development, building construction company, construction management services, property renovation, home improvement contractors, urban development projects, rural construction solutions, general contractors USA, construction experts" />
    <meta name="description"
        content="Explore our professional construction services, including residential and commercial construction, renovations, remodeling, infrastructure development, and project management solutions across the USA." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Construction, Renovation & Infrastructure Services in the USA" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Urban and Rural Construction  provides quality residential construction, commercial building, renovation, remodeling, and infrastructure development services throughout the USA." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Construction, Renovation & Infrastructure Services in the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Discover our full range of construction services, from residential and commercial building projects to renovations, remodeling, and infrastructure development across the USA." />
</head>

<body>
    <?php include '../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/services">
                        <li title="Services">Our Services</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Our Services</span></h1>
                <p>
                    Our services cover every stage of construction, renovation, and remodeling, delivering durable, functional, and visually appealing results. We work closely with clients to ensure each project is completed with quality, efficiency, and attention to detail.
                </p>
                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">WHAT WE DO</span>
                            <h2>Multi-Disciplined Engineering <span>Services</span></h2>
                        </div>
                    </div>

                    <div class="service-back-div" id="allServicePageContent">
                        <script>
                            _getPageList({
                                pageCategory: "SERVICE",
                                pageContainer: "allServicePageContent"
                            })
                        </script>

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-tr'); ?>

        <?php $callclass->_statisticsSection($websiteUrl); ?>

        <?php include '../footer.php' ?>
    </section>
</body>

</html>