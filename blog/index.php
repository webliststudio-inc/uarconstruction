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
        content="Explore expert insights, construction tips, project guides, and industry updates from Urban and Rural Construction LLC. Learn more about residential, commercial, and infrastructure development." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Construction Blog - Insights & Updates" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Read expert construction articles, project insights, renovation tips, and industry news from Urban and Rural Construction LLC." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Construction Blog - Insights & Updates" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Stay updated with construction tips, building guides, and industry insights from professionals at Urban and Rural Construction LLC." />
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
                    Stay updated with construction tips, building guides, and industry insights from professionals at Urban and Rural Construction LLC.
                    Read expert construction articles, project insights, renovation tips, and industry news from Urban and Rural Construction LLC.
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
                        <div class="page-list-back-div" id="pageContent">
                            <a href="<?php echo $websiteUrl?>/blog/top-construction-trends-for-modern-development" title="Top Construction Trends for Modern Development">   
                                <div class="main-blog-div">
                                    <div class="top-text">General</div>
                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-1.jpeg"
                                        alt="Top Construction Trends for Modern Development" />
                                    </div>
                                    <div class="text-content-div">
                                        <h2>Top Construction Trends for Modern Development</h2>
                                        <div class="count">
                                            <i class="bi-calendar3"></i> June 05, 2026
                                            <span> | </span>
                                            <i class="bi-eye"></i> 1,245 VIEWS
                                        </div>
                                        <p>
                                            Learn the essential steps involved in building a modern residential home, from initial planning and site preparation to foundation work, structural development, and finishing touches. This guide walks you through each phase of the construction process, including architectural design, material selection...
                                        </p>
                                        <div>
                                            <button class="btn" title="Read More">
                                                Read More <i class="bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo $websiteUrl?>/blog/top-construction-trends-for-modern-development" title="Choosing Quality Materials for Lasting Structures">   
                                <div class="main-blog-div">
                                    <div class="top-text">General</div>
                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-2.jpeg"
                                        alt="Choosing Quality Materials for Lasting Structures" />
                                    </div>
                                    <div class="text-content-div">
                                        <h2>Choosing Quality Materials for Lasting Structures</h2>
                                        <div class="count">
                                            <i class="bi-calendar3"></i> June 05, 2026
                                            <span> | </span>
                                            <i class="bi-eye"></i> 1,245 VIEWS
                                        </div>
                                        <p>
                                            Learn the importance of choosing high-quality construction materials for durable and long-lasting structures, and how they directly impact the strength, safety, and overall performance of your project. This guide provides practical tips on selecting the right materials for different types of construction...
                                        </p>
                                        <div>
                                            <button class="btn" title="Read More">
                                                Read More <i class="bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
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

                    <div class="blog-back-div">
                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-1.jpeg"
                                        alt="Top Construction Trends for Modern Development" />
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> June 3, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 1,250 VIEWS
                                    </div>

                                    <h3>Top Construction Trends for Modern Development</h3>
                                    <p>Explore the latest construction innovations, smart technologies, and sustainable
                                        practices shaping modern...</p>

                                    <a href="#" title="Top Construction Trends for Modern Development">
                                        <button class="btn">
                                            Read More <i class="bi-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-2.jpeg"
                                        alt="Choosing Quality Materials for Lasting Structures" />
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> May 28, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 980 VIEWS
                                    </div>

                                    <h3>Choosing Quality Materials for Lasting Structures</h3>
                                    <p>Learn how selecting durable, high-quality materials can improve safety,
                                        performance, and project longevity...</p>

                                    <a href="#" title="Choosing Quality Materials for Lasting Structures">
                                        <button class="btn">
                                            Read More <i class="bi-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-3.jpeg"
                                        alt="The Importance of Effective Project Planning" />
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> May 15, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 1,540 VIEWS
                                    </div>

                                    <h3>The Importance of Effective Project Planning</h3>
                                    <p>Discover how proper planning helps control costs, reduce delays, and ensure
                                        successful project delivery...</p>

                                    <a href="#" title="The Importance of Effective Project Planning">
                                        <button class="btn">
                                            Read More <i class="bi-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>

</body>

</html>