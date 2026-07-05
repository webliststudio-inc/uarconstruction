<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Construction Blog - Tips, Insights & Industry Updates</title>
    <meta name="keywords"
        content="<?php echo $appName ?> blog, construction blog USA, building tips, construction industry news, construction guides, architecture insights, home building tips, commercial construction updates, renovation ideas, construction best practices, contractor advice, engineering articles" />
    <meta name="description"
        content="Explore expert insights, construction tips, project guides, and industry updates from Urban and Rural Construction. Learn more about residential, commercial, and infrastructure development." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Construction Blog - Insights & Updates" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Read expert construction articles, project insights, renovation tips, and industry news from Urban and Rural Construction." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Construction Blog - Insights & Updates" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Stay updated with construction tips, building guides, and industry insights from professionals at Urban and Rural Construction." />
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
                    <a href="<?php echo $websiteUrl ?>/blog">
                        <li title="Latest Insight & Article">Latest Insight & Article</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Latest Insight & Article</span></h1>
                <p>
                    Stay updated with construction tips, building guides, and industry insights from professionals at Urban and Rural Construction.
                    Read expert construction articles, project insights, renovation tips, and industry news from Urban and Rural Construction.
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
                                <input class="text_field" id="searchContent" onkeyup="_filtersPages(this.value, 'pageMainBlogPageContainer', 'main-blog-div');" type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <li title="Construction Tips" onclick="">
                                Construction Tips
                                </li>
                                <li title="General" onclick="">
                                    General
                                </li>
                                <li title="Architecture Insights" onclick="">
                                    Architecture Insights
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="page-list-back-div" id="pageMainBlogPageContainer">
                            <script>
                                _getPageList({
                                    pageCategory: "BLOG",
                                    limit: 3,
                                    pageContainer: "pageMainBlogPageContainer"
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

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">LATEST INSIGHTS</span>
                            <h2>Related News And <span>Articles</span></h2>
                        </div>
                    </div>

                    <div class="blog-back-div" id="allRelatedBlogPageContainer">
                        <script>
                            _getPageList({
                                pageCategory: "BLOG",
                                pageContainer: "allRelatedBlogPageContainer"
                            })
                        </script>   

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>

</body>

</html>