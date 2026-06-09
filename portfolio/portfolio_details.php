<?php include '../../../config/constants.php'; ?>
<?php include '../../../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../../meta.php'?>
    <title><?php echo $pageTitle?> - <?php echo $appName?></title>
    <meta name="description" content="<?php echo $seoDescription?>" />
    <meta name="keywords" content="<?php echo $seoKeywords?>" />

    <meta property="og:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/seoFlyer/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="<?php echo $appName?>" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/seoFlyer/<?php echo $pageSeoPix?>" />
    <meta name="twitter:description" content="<?php echo $seoDescription?>" />
</head>

<body>
    <?php include '../../../header.php' ?> 

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
                    <a href="<?php echo $websiteUrl ?>/portfolio/portfolio-1">
                        <li title="Grace Worship Center">Grace Worship Center</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Grace Worship Center</span></h1>
                <p>
                    Grace Worship Center is a modern and functional worship center located in Texas, USA. It is designed to provide a space for worship, community, and education.
                </p>
                 <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="left-div">
                        <div class="main-picture-back-div">
                            <div class="main-picture-div" id="blogPreviewPix">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg"
                                        alt="Grace Worship Center" />
                            </div>

                            <div class="bottom-img-div">
                                <div class="inner-img-container">
                                    <div class="inner-img-div" id="fetchPagePictures">
                                        <div class="each-img-div" title="Click to Preview" id="img1"
                                            onclick="_viewPreviewImage('img1', 'blogPreviewPix')">
                                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg"
                                            alt="Grace Worship Center" />
                                        </div>

                                        <div class="each-img-div" title="Click to Preview" id="img2"
                                            onclick="_viewPreviewImage('img2', 'blogPreviewPix')">
                                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-7.jpeg"
                                            alt="Grace Worship Center" />
                                        </div>
                                    </div>
                                </div>
                                <button class="left-btn"> <i class="bi-chevron-double-left"></i></button>
                                <button class="right-click-btn"> <i class="bi-chevron-double-right"></i></button>
                            </div> 
                        </div>                         
                    
                        <div class="main-pages-content-div">
                            <h2>Grace Worship Center Construction Project</h2>
                            <p>
                                Urban and Rural Construction LLC proudly delivered the construction of Grace Worship Center, a modern and welcoming place of worship designed to inspire faith, community, and spiritual growth. The project reflects our commitment to creating meaningful spaces that combine architectural excellence with functional design tailored for worship environments.
                            </p>

                            <h2>Project Overview</h2>
                            <p>
                                This project involved the full development of a contemporary worship center, including structural construction, interior finishing, and exterior detailing. Our team worked closely with stakeholders to ensure the facility reflects both spiritual significance and modern building standards, providing a comfortable and serene environment for congregation activities.
                            </p>

                            <ul>
                                <li>Main Worship Hall Construction</li>
                                <li>Altar and Platform Design</li>
                                <li>Seating Layout and Installation</li>
                                <li>Audio-Visual and Lighting Integration Support</li>
                                <li>Administrative Office Spaces</li>
                                <li>Restroom and Utility Facilities</li>
                                <li>Parking and Site Development</li>
                                <li>Interior & Exterior Finishing</li>
                            </ul>

                            <h2>Design & Execution Excellence</h2>
                            <p>
                                The Grace Worship Center was built with attention to acoustics, lighting, ventilation, and spatial flow to enhance worship experience. Every detail, from the structural framework to finishing materials, was executed with precision to ensure durability, elegance, and long-term value.
                            </p>

                            <h2>Why This Project Stands Out</h2>
                            <p>
                                This project highlights our ability to deliver faith-based developments that balance beauty, functionality, and structural integrity. Grace Worship Center stands as a testament to our dedication to excellence in community-centered construction projects.
                            </p>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RELATED PORTFOLIO</h3>
                            
                            <div class="related-post-back-div" id="relatedPageBlogContent">
                                <a href="<?php echo $websiteUrl ?>/portfolio/grace-worshop-center" title="Grace Worship Center">
                                    <div class="related-post">
                                        <div class="image-div">
                                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg"
                                            alt=">Grace Worship Center" />
                                        </div>
                                        <div class="cont-div">
                                            <h3>Grace Worship Center</h3>
                                            <div class="comment">
                                                <i class="bi-clock"></i> 
                                                <span>June 05, 2026</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="related-post">
                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-6.jpeg"
                                            alt="Kingdom Life Cathedral" />
                                    </div>
                                    <div class="cont-div">
                                        <h3>Kingdom Life Cathedral</h3>
                                        <div class="comment">
                                            <i class="bi-clock"></i> 
                                            <span>June 05, 2026</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../../../footer.php' ?>
    </section>
</body>

</html>