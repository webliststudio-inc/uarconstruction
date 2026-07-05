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
                    <a href="<?php echo $websiteUrl ?>/faq">
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
                                <input class="text_field" id="searchContent" onkeyup="_filtersPages(this.value, 'faqPageContent', 'faq-title');" type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <script>
                                    _fetchCategoryList('FAQ', 'faqPageContent');
                                </script>

                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="general-faq-div" id="faqPageContent">
                            <script>
                                _getFaqList({
                                    pageContainer: "faqPageContent"
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
        
        <?php include 'footer.php' ?>
    </section>
</body>

</html>