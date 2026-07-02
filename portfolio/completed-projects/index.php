<?php include '../../config/constants.php'; ?>
<?php include '../../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php' ?>   
    <title><?php echo $appName ?> | Completed Construction Projects Across the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?> completed projects, completed construction projects USA, finished building projects, residential construction portfolio, commercial construction projects, completed renovations, infrastructure development projects, construction project gallery, successful construction projects, construction company portfolio USA, completed building works" />
    <meta name="description"
        content="Discover our completed construction projects across the USA, featuring residential homes, commercial developments, renovations, infrastructure works, and successfully delivered building solutions by Urban and Rural Construction." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Completed Construction Projects Across the USA" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Explore our successfully completed construction projects including residential, commercial, renovation, and infrastructure developments across the USA." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Completed Construction Projects Across the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Browse our completed construction projects showcasing quality craftsmanship, timely delivery, and excellence in residential, commercial, and infrastructure construction." />
</head>

<body>
    <?php include '../../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Portfolio">Portfolio <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/completed-projects">
                        <li title="Completed Projects">Completed Projects</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Completed Projects</span></h1>  
                <p>
                    Browse our completed construction projects featuring residential homes, commercial developments, renovations, infrastructure works, and successfully delivered building solutions by Urban and Rural Construction.
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
                                <input class="text_field" id="searchContent" onkeyup="filters('Content');" type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>CATEGORY LIST</h3>

                            <ul id="catId">
                                <li title="Worship Centers" onclick="">
                                    Worship Centers
                                </li>
                                <li title="Commercial" onclick="">
                                    Commercial
                                </li>
                                <li title="Residential" onclick="">
                                    Residential
                                </li>
                                <li title="Infrastructure" onclick="">
                                    Infrastructure
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="portfolio-back-div" id="portfolioContainer" data-aos="fade-up" data-aos-duration="900">
                            <a href="<?php echo $websiteUrl ?>/portfolio/completed-projects/grace-worship-center">
                            <div class="portfolio-card" data-category="1">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg"
                                            alt="Grace Worship Center" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="Grace Worship Center">Grace Worship Center</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>WORSHIP CENTER</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>

                            <a href="<?php echo $websiteUrl ?>/portfolio">
                            <div class="portfolio-card" data-category="2">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-2.jpeg"
                                        alt="Downtown Office Complex" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="Downtown Office Complex">Downtown Office Complex</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>COMMERCIAL</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>

                            <a href="<?php echo $websiteUrl ?>/portfolio"> 
                            <div class="portfolio-card" data-category="1">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-6.jpeg"
                                        alt="Kingdom Life Cathedral" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="Kingdom Life Cathedral">Kingdom Life Cathedral</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>WORSHIP CENTER</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>

                            <a href="<?php echo $websiteUrl ?>/portfolio/">
                            <div class="portfolio-card" data-category="1">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-3.jpeg"
                                            alt="Redeemer Assembly Church Complex" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="Redeemer Assembly Church Complex">Redeemer Assembly Church Complex</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>WORSHIP CENTER</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>

                            <a href="<?php echo $websiteUrl ?>/portfolio"> 
                            <div class="portfolio-card" data-category="2">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-5.jpeg"
                                        alt="CityGate Commercial Mall" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="CityGate Commercial Mall">CityGate Commercial Mall</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>COMMERCIAL</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>

                            <a href="<?php echo $websiteUrl ?>/portfolio">     
                            <div class="portfolio-card" data-category="1">
                                <div class="title COMPLETED">COMPLETED</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-4.jpeg"
                                        alt="New Covenant Worship Center" />
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title" title="New Covenant Worship Center">New Covenant Worship Center</h3>
                                    <div class="portfolio-meta">
                                        <div class="porfolio-type"><span>WORSHIP CENTER</span></div>
                                        <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-tr'); ?>

        <?php include '../../footer.php' ?>
    </section>
</body>

</html>