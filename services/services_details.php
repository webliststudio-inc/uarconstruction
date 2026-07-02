<?php include '../../config/constants.php'; ?>
<?php include '../../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php'?>
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
    <?php include '../../header.php' ?> 

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/services">
                        <li title="Services">Our Services <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/services/commercial-construction">
                        <li title="Commercial Constrcution">Commercial Constrcution</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Commercial Constrcution</span></h1>
                <p>
                    We deliver professional commercial construction solutions for offices, retail spaces, industrial facilities, and business developments. Our team focuses on quality craftsmanship, efficient project management, and timely delivery to create durable and functional commercial properties that support your business goals.
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
                            <div class="main-picture-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-1.jpeg"
                                    alt="Commercial Construction" />
                            </div>
                        </div>                         
                    
                        <div class="main-pages-content-div">
                            <h2>Professional Commercial Construction Services</h2>
                            <p>
                                At Urban and Rural Construction , we provide comprehensive commercial construction services designed to meet the needs of businesses, developers, and property owners. From office buildings and retail spaces to industrial facilities and mixed-use developments, we deliver high-quality construction solutions that combine durability, functionality, and modern design.
                            </p>
                            <h2>Our Commercial Construction Expertise</h2>
                            <p>
                                We manage every phase of the construction process, including planning, site preparation, structural work, project coordination, and final finishing. Our experienced team works closely with clients, architects, and engineers to ensure projects are completed on schedule, within budget, and according to the highest industry standards.
                            </p>
                            <ul>
                                <li>Office Building Construction</li>
                                <li>Retail Store Construction</li>
                                <li>Industrial Facility Development</li>
                                <li>Warehouse Construction</li>
                                <li>Commercial Renovations & Expansions</li>
                                <li>Project Planning & Management</li>
                                <li>Site Development & Infrastructure</li>
                                <li>Interior & Exterior Finishing</li>
                            </ul>
                            <h2>Quality, Safety, and Efficiency</h2>
                            <p>
                                We are committed to maintaining strict safety standards while delivering exceptional workmanship on every project. Our construction processes are carefully planned to minimize delays, optimize resources, and ensure long-lasting results that support the success and growth of your business.
                            </p>
                            <h2>Why Choose Us?</h2>
                            <p>
                                Choosing Urban and Rural Construction  means partnering with a team dedicated to excellence, transparency, and client satisfaction. We take pride in delivering commercial construction projects that not only meet expectations but exceed them through innovative solutions, reliable service, and attention to detail.
                            </p>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RELATED SERVICES</h3>
                            <div class="related-services-cont">
                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <div class="content">
                                        <h4 title="Residential Construction">Residential Construction</h4>  
                                    </div>
                                </div>

                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <div class="content">
                                        <h4 title="Road & Infrastructure">Road & Infrastructure</h4>    
                                    </div>
                                </div>

                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <div class="content">
                                        <h4 title="Renovation & Remodeling">Renovation & Remodeling</h4>    
                                    </div>
                                </div>

                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <div class="content">
                                        <h4 title="Material Engineering">Material Engineering</h4>    
                                    </div>
                                </div>

                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                    <div class="content">
                                        <h4 title="Project Management">Project Management</h4>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../../footer.php' ?>
    </section>
</body>

</html>