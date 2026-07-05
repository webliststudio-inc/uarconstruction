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
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/portfolio/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/portfolio/<?php echo $pageSeoPix?>" />
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
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Portfolio">Portfolio <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <li title="<?php echo $pageTitle?>"><?php echo $pageTitle?></li>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span id="pageTitle">Loading...</span></h1>
                <p id="seoDescription">Loading...</p>
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
                    
                        <div class="main-pages-content-div" id="pageContent">Loading...</div>   
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RELATED PORTFOLIO</h3>
                            
                            <div class="related-post-back-div" id="relatedPagePortfolioContent">
                                <script>
                                    _getPageList({
                                        pageCategory: "PORTFOLIO",
                                        limit: 3,
                                        pageContainer: "relatedPagePortfolioContent"
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                _getEachPageDetails({
                    pageCategory: "PORTFOLIO",
                    pageId: "<?php echo $pageId ?>"
                })
            </script>
        </section>

        <?php include '../../../footer.php' ?>
    </section>
</body>

</html>