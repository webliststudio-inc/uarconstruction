<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Professional Construction, Renovation & Infrastructure Services in the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, construction company USA, urban construction services, rural construction company, residential construction, commercial construction, building contractors USA, home renovation services, property remodeling, infrastructure development, general contractors USA, construction management, building renovation, construction solutions, custom home builders, office construction, civil construction services, rural development projects, urban development contractors, USA construction experts" />
    <meta name="description"
        content="Urban and Rural Construction delivers professional construction, renovation, remodeling, and infrastructure solutions across the USA. We build quality residential, commercial, and development projects with reliability and excellence." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Professional Construction, Renovation & Infrastructure Services in the USA" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Trusted USA construction company providing residential, commercial, renovation, remodeling, and infrastructure development services with quality craftsmanship and dependable project delivery." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Professional Construction, Renovation & Infrastructure Services in the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Urban and Rural Construction specializes in construction, renovation, remodeling, and infrastructure projects across the USA, delivering durable and high-quality building solutions." />
</head>

<body>
    <?php include 'header.php' ?>
    <div class="slide-section">
        <?php include 'slide.php' ?>
        <div class="slide-div">
            <div class="slide-inner-div">
                <div class="content-div" data-aos="fade-in" data-aos-duration="1200">
                    <h1 id="pageTitle">Building the Future of Urban and Rural Development</h1>
                    <p>Our civil and structural team is committed to providing sustainable, creative & efficient
                        engineering solutions for our communities.</p>

                    <div class="btn-div">
                        <a href="<?php echo $websiteUrl ?>">
                            <button class="btn" title="Request an Estimate">Request an Estimate <i
                                    class="bi bi-arrow-right-short"></i></button>
                        </a>

                        <a href="<?php echo $websiteUrl ?>">
                            <button class="btn contact-btn" title="Contact Us">Contact Us <i
                                    class="bi bi-telephone-inbound-fill"></i></button>
                        </a>

                        <a href="<?php echo $websiteUrl ?>">
                            <button class="btn" title="View Projects">View Projects <i
                                    class="bi bi-eye-fill"></i></button>
                        </a>
                    </div>
                </div>

                <div class="play-div">
                    <div class="play-btn"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="index-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">WHAT WE DO</span>
                            <h2>Multi-Disciplined Engineering <span>Services</span></h2>
                        </div>
                        <div class="btn-div">
                            <a href="<?php echo $websiteUrl ?>/services">
                                <button class="btn" title="Explore All Services">Explore All Services <i
                                        class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>

                    <div class="service-back-div" id="indexServicePageContent">
                        <script>
                            _getPageList({
                                pageCategory: "SERVICE",
                                limit: 6,
                                pageContainer: "indexServicePageContent"
                            })
                        </script>

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php $callclass->_aboutUsSection($websiteUrl, 'net-bg-tr'); ?>

        <section class="body-div net-bg-bl">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">RECENT PROJECTS</span>
                            <h2>Building Success Through <span>Quality Projects</span></h2>
                        </div>

                        <div class="btn-div">
                            <a href="#">
                                <button class="btn" title="Explore All Projects">Explore All Projects <i
                                        class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>

                    <div class="project-back-div">
                        <div class="left-container" id="indexPortfolioListContainer">
                            <script>
                                _getPageList({
                                    pageCategory: "PORTFOLIO",
                                    limit: 1,
                                    pageContainer: "indexPortfolioListContainer"
                                })
                            </script>

                            <div class="content-loading-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                            </div>
                        </div>

                        <div class="right-container">
                            <div class="project-image-wrapper" id="indexRightPortfolioListContainer">
                                <script>
                                    _getPageList({
                                        pageCategory: "PORTFOLIO",
                                        limit: 6,
                                        pageContainer: "indexRightPortfolioListContainer"
                                    })
                                </script>   

                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-tl'); ?>

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="faq-wrapper" data-aos="fade-in" data-aos-duration="1200">
                    <div class="faq-content-div" data-aos="fade-up" data-aos-duration="1200">
                        <div class="title-div faq-title-div">
                            <div class="inner-div">
                                <span class="top-title">FAQ</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                            </div>
                        </div>

                        <div class="faq-toggle-back">
                            <div class="faq-toggle" id="faq1">
                                <div class="title-text" onclick="_collapse('faq1')">
                                    <div class="quest-text-div">
                                        <div class="icon-div"><i class="bi-question"></i></div>
                                        <h3>What types of construction projects do you handle?</h3>
                                    </div>
                                    <div class="expand-div" id="faq1num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq1answer" style="display: none;">
                                    <p>We specialize in residential, commercial, urban, and rural construction projects,
                                        including new builds, renovations, remodeling, and infrastructure development.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq2">
                                <div class="title-text" onclick="_collapse('faq2')">
                                    <div class="quest-text-div">
                                        <div class="icon-div"><i class="bi-question"></i></div>
                                        <h3>How long does a construction project take to complete?</h3>
                                    </div>
                                    <div class="expand-div" id="faq2num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq2answer" style="display: none;">
                                    <p>Project timelines vary depending on size, complexity, and site conditions. After
                                        evaluating your project, we provide a detailed schedule with estimated
                                        completion dates.</p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq3">
                                <div class="title-text" onclick="_collapse('faq3')">
                                    <div class="quest-text-div">
                                        <div class="icon-div"><i class="bi-question"></i></div>
                                        <h3>Do you provide free project consultations and estimates?</h3>
                                    </div>
                                    <div class="expand-div" id="faq3num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq3answer" style="display: none;">
                                    <p>Yes. We offer free consultations and project estimates to help clients understand
                                        costs, timelines, and the best construction solutions for their needs.</p>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo $websiteUrl ?>" title="Read More FAQ">
                            <button class="btn" title="Read More FAQ">Read More <i
                                    class="bi-arrow-right"></i></button></a>
                    </div>

                    <div class="image-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/body-pix/faq.jpeg"
                            alt="Frequently Asked Questions" />
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_testimonialSection($websiteUrl, 'net-bg-tr'); ?>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">LATEST INSIGHTS</span>
                            <h2>Our Latest News And <span>Articles</span></h2>
                        </div>

                        <div class="btn-div">
                            <a href="<?php echo $websiteUrl ?>/blog" title="Explore All Blogs">
                                <button class="btn" title="Explore All Blogs">Explore All Blogs <i
                                        class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>

                    <div class="blog-back-div" id="indexBlogPageContainer">
                        <script>
                            _getPageList({
                                pageCategory: "BLOG",
                                limit: 3,
                                pageContainer: "indexBlogPageContainer"
                            })
                        </script>   

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_statisticsSection($websiteUrl); ?>
        
        <?php include 'footer.php' ?>
    </section>
</body>

</html>