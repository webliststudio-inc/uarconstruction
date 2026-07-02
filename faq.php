<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Frequently Asked Questions - Construction Services FAQ</title>
    <meta name="keywords"
        content="<?php echo $appName ?> FAQ, construction FAQ USA, building questions, construction company questions, contractor FAQ, construction services questions, project inquiry answers, construction process explained, home building FAQ, commercial construction questions, renovation FAQ, construction help, building guidance" />
    <meta name="description"
        content="Find answers to frequently asked questions about Urban and Rural Construction. Learn more about our construction services, project process, timelines, pricing, and how we deliver residential, commercial, and infrastructure projects." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Frequently Asked Questions - Construction Services FAQ" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Get answers to common questions about construction services, project execution, timelines, and working with Urban and Rural Construction." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Frequently Asked Questions - Construction Services FAQ" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Explore FAQs about construction services, project planning, costs, timelines, and how we work at Urban and Rural Construction." />
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
                    <a href="<?php echo $websiteUrl ?>/blog">
                        <li title="Frequently Asked Questions">Frequently Asked Questions</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Frequently Asked Questions</span></h1>
                <p>
                    Find answers to common questions about construction services, project execution, timelines, and working with Urban and Rural Construction.
                </p>
                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div blog-bg">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" id="searchContent" onkeyup="filters('Content');" type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <li title="Construction Tips" onclick="">
                                Construction Tips
                                </li>
                                <li title="Renovation Ideas" onclick="">
                                    Renovation Ideas
                                </li>
                                <li title="Architecture Insights" onclick="">
                                    Architecture Insights
                                </li>
                                <li title="General" onclick="">
                                    General
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="general-faq-div" id="pageContent">
                            <div class="faq-title" id="faq1">
                                <div class="inner-title-div" onclick="_collapse('faq1')">
                                    <h2>What services does your construction company offer?</h2>

                                    <div class="expand-div" id="faq1num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq1answer" style="display: none;">
                                    <p>
                                        We provide a full range of construction services including residential building, commercial construction,
                                        renovations, remodeling, project management, and infrastructure development across the USA.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-title" id="faq2">
                                <div class="inner-title-div" onclick="_collapse('faq2')">
                                    <h2>What types of construction projects do you handle?</h2>

                                    <div class="expand-div" id="faq2num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq2answer" style="display: none;">
                                    <p>
                                        We specialize in residential, commercial, urban, and rural construction projects,
                                        including new builds, renovations, remodeling, and infrastructure development.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-title" id="faq3">
                                <div class="inner-title-div" onclick="_collapse('faq3')">
                                    <h2>How long does a construction project take to complete?</h2>

                                    <div class="expand-div" id="faq3num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq3answer" style="display: none;">
                                    <p>
                                        Project timelines vary depending on size, complexity, and site conditions. After
                                        evaluating your project, we provide a detailed schedule with estimated
                                        completion dates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include 'footer.php' ?>
    </section>
</body>

</html>