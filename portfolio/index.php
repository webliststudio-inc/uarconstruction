<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Construction Portfolio Across the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?> portfolio, construction portfolio USA, completed construction projects, residential construction portfolio, commercial construction portfolio, renovation projects, infrastructure projects, building project gallery, construction company portfolio, successful construction projects, custom home builder USA, general contractor portfolio" />
    <meta name="description"
        content="Explore our construction portfolio featuring completed residential homes, commercial buildings, renovations, infrastructure developments, and quality construction projects delivered across the USA." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Construction Portfolio Across the USA" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Browse our portfolio of completed construction projects, showcasing excellence in residential, commercial, renovation, and infrastructure development across the USA." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Construction Portfolio Across the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Discover our portfolio of completed construction projects, highlighting quality craftsmanship, innovative design, and successful project delivery across the USA." />
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
                    <a href="<?php echo $websiteUrl ?>/portfolio">
                        <li title="Portfolio">Portfolio <i class="bi-caret-right-fill"></i></li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Construction Portfolio</span></h1>  
                <p>
                    Browse our construction portfolio featuring residential homes, commercial buildings, renovations, infrastructure works, and successfully delivered building solutions by Urban and Rural Construction.
                </p>
                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="page-back-div portfolio-pages-back-div">
                    <div class="right-div sticky-div" data-aos="fade-up" data-aos-duration="900">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" id="searchContent" onkeyup="_filtersPages(this.value, 'allProjectContainer', 'portfolio-card');" type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>CATEGORY LIST</h3>

                            <ul id="projectCategoryId">
                                <script>
                                    _fetchProjectCategoryList('PORTFOLIO', 'allProjectContainer', '');
                                </script>

                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </ul>
                        </div>

                        <div class="div-in">
                            <h3>PROJECT STAGES</h3>

                            <ul id="projectStageId">
                                <script>
                                    _fetchProjectStageList('PORTFOLIO', 'allProjectContainer');
                                </script>

                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="portfolio-back-div" id="allProjectContainer" data-aos="fade-up" data-aos-duration="900">
                            <script>
                                _getPageList({
                                    pageCategory: "PORTFOLIO",
                                    pageContainer: "allProjectContainer",
                                })
                            </script>

                            <div class="content-loading-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-tr'); ?>
        <?php include '../footer.php' ?>
    </section>
</body>

</html>