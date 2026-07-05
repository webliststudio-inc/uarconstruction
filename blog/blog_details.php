<?php include '../../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php'?>
    <title><?php echo $pageTitle?> - <?php echo $appName?></title>
    <meta name="description" content="<?php echo $seoDescription?>" />
    <meta name="keywords" content="<?php echo $seoKeywords?>" />

    <meta property="og:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/blog/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/blog/<?php echo $pageSeoPix?>" />
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
                    <a href="<?php echo $websiteUrl ?>/blog">
                        <li title="Latest Insight & Article">Latest Insight & Article <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <li title="<?php echo $pageTitle?>"><?php echo $pageTitle?></li>
                </ul>
            </div>

            <div class="text-content-div">
                <h1 id="pageTitle">Loading...</h1>
                <div class="count">
                    <i class="bi-person"></i> By: 
                    <span><strong id="createdByName">Loading...</strong></span>
                    &nbsp;|&nbsp;
                    <i class="bi-calendar3"></i> Date: 
                    <span><strong id="updatedTime">Loading...</strong></span>
                    &nbsp;|&nbsp;
                    <i class="bi-eye"></i> Views: 
                    <span><strong id="viewCount">Loading...</strong></span>
                    &nbsp;|&nbsp;
                    <i class="bi-clock"></i> Reading Time: 
                    <span><strong id="pageContentRead">Loading...</strong></span>
                </div>
                <p class="intro" id="seoDescription">Loading...</p>
            </div>
        </div>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div blog-bg">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="left-div">
                        <div class="page-list-back-div">
                            <div class="main-picture-back-div">
                                <div class="main-picture-div" id="pagesPreviewPix">
                                    <img id="seoFlyer" src="<?php echo $websiteUrl ?>/all-images/images/defaultPage.png" alt="<?php echo $pageTitle?>" />
                                </div>

                                <div class="bottom-img-div">
                                    <div class="inner-img-container">
                                        <div class="inner-img-div" id="fetchPagePictures"></div>
                                    </div>
                                    <button class="left-btn"> <i class="bi-chevron-double-left"></i></button>
                                    <button class="right-click-btn"> <i class="bi-chevron-double-right"></i></button>
                                </div>                                   
                            </div>                         
                        
                            <div class="main-pages-content-div" id="pageContent"></div>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RECENT BLOG</h3>

                            <div class="related-post-back-div" id="relatedPageBlogContent">
                                <script>
                                    _getPageList({
                                        pageCategory: "BLOG",
                                        limit: 4,
                                        pageContainer: "relatedPageBlogContent"
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
            <script>
                _getEachPageDetails({
                    pageCategory: "BLOG",
                    pageId: "<?php echo $pageId ?>"
                })
            </script>
        </section>

        <?php include '../../footer.php' ?>
    </section>

</body>

</html>