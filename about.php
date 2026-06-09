<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, about urban and rural construction, construction company USA, construction experts, building contractors USA, residential construction specialists, commercial construction company, infrastructure development experts, renovation contractors, remodeling services USA, construction management company, urban development projects, rural development solutions, quality construction services, experienced builders USA" />
    <meta name="description"
        content="Learn about Urban and Rural Construction LLC, a trusted construction company delivering residential, commercial, renovation, remodeling, and infrastructure development projects across the USA with quality, integrity, and excellence." />
    <meta property="og:title"
        content="<?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Discover the story, mission, and expertise behind Urban and Rural Construction LLC. We provide reliable construction, renovation, and infrastructure solutions throughout the USA." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | About Us - Trusted Construction & Infrastructure Experts in the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Meet the team behind Urban and Rural Construction LLC and learn how we deliver exceptional construction, renovation, remodeling, and infrastructure projects across the USA." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/about">
                        <li title="About Us">About Us</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>About Us</span></h1>
                <p>
                    At Urban and Rural Construction LLC, we transform ideas into quality structures through
                    expert construction, renovation, and remodeling services. We focus on safety, efficiency,
                    and excellence to ensure every project exceeds client expectations.
                </p>

                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <?php $callclass->_aboutUsSection($websiteUrl); ?>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="about-details-back-div">
                        <div class="text-div" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div">
                                    <h4>OUR VISION</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/vision.png"
                                            alt="Our Vision" />
                                    </div>
                                </div>
                            </div>
                            <p>
                                Our vision is to be a trusted leader in the construction industry, delivering
                                innovative, durable, and high-quality residential, commercial, and infrastructure
                                projects that improve communities and create lasting value.
                            </p>
                        </div>

                        <div class="text-div mission-text" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div mission-top">
                                    <h4>OUR MISSION</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/mission.png"
                                            alt="Our Mission" />
                                    </div>
                                </div>
                            </div>
                            <p>
                                Our mission is to provide exceptional construction, renovation, and development
                                services through skilled craftsmanship, advanced building practices, and a strong
                                commitment to safety, quality, and client satisfaction.
                            </p>
                        </div>

                        <div class="text-div slogan-text" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div slogan-top">
                                    <h4>WHY PEOPLE CHOOSE US</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/value.png"
                                            alt="Why Choose Us" />
                                    </div>
                                </div>
                            </div>
                            <p>
                                Clients choose us for our reliability, attention to detail, transparent communication,
                                timely project delivery, and dedication to building structures that meet the highest
                                standards of quality and durability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_constructionProcessSection($websiteUrl, 'net-bg-bl'); ?>

        <?php $callclass->_testimonialSection($websiteUrl, ' net-bg-tl'); ?>

        <?php $callclass->_statisticsSection($websiteUrl); ?>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>