<?php include 'alert.php' ?>
<header data-aos="fade-down" data-aos-duration="900">
    <div class="header-top">
        <div class="header-top-inner">
            <div class="contact-info">
                <div>
                    <a href="tel:+880 278 367 367"><i class="bi bi-telephone-inbound-fill"></i> +183 228 856 257</a>
                </div>
                <div class="email-info">
                    <a href="mailto:info@uarconstruction.com"><i class="bi bi-envelope-fill"></i>
                        info@uarconstruction.com</a>
                </div>
                <div class="service-info">
                    <i class="bi bi-clock-fill"></i> 24/7 Services Available
                </div>
            </div>

            <div class="btn-container">
                <button class="btn" title="Request an Estimate">Request an Estimate <i
                        class="bi bi-arrow-right-short"></i></button>
            </div>
        </div>
    </div>

    <div class="header-div-in">
        <div class="logo-div">
            <a href="<?php echo $websiteUrl ?>"><img src="<?php echo $websiteUrl?>/all-images/images/logo.png"
                    alt="<?php echo $appName?> Logo" class="animated zoomIn" /></a>
        </div>

        <nav>
            <ul>
                <a href="<?php echo $websiteUrl ?>" title="Home Page">
                    <li <?php if (($websiteAutoUrl=="$websiteUrl/index")||($websiteAutoUrl=="$websiteUrl/")||($websiteAutoUrl=="$websiteUrl")) {?>
                        class="active" <?php }?>> Home</li>
                </a>

                <a href="<?php echo $websiteUrl?>/about" title="About Us">
                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/about")) {?> active <?php }?>">
                        About Us
                    </li>
                </a>

                <a href="<?php echo $websiteUrl?>/services" title="Services">
                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/services/")) {?> active <?php }?>">
                        Services
                    </li>
                </a>

                <a href="<?php echo $websiteUrl?>" title="Portfolio">
                    <li id="expand-li"
                        class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/portfolio")) {?> active <?php }?>">
                        Portfolio <i class="bi-plus"></i>
                        <ul class="animated fadeIn">
                            <div class="sub-nav-div">
                                <a class="nav-div" href="<?php echo $websiteUrl?>/portfolio/completed-projects" title="Completed Projects">
                                    <div class="text-div">
                                        <li>Completed Projects</li>
                                        <p>Explore our completed projects.</p>
                                    </div>
                                </a>

                                <a class="nav-div" href="<?php echo $websiteUrl?>/portfolio/current-projects" title="Current Projects">
                                    <div class="text-div">
                                        <li>Current Projects</li>
                                        <p>Explore our current projects.</p>
                                    </div>
                                </a>

                                <a class="nav-div" href="<?php echo $websiteUrl?>/portfolio/upcoming-projects" title="Upcoming Projects">
                                    <div class="text-div">
                                        <li>Upcoming Projects</li>
                                        <p>Discover what we’re building next.</p>
                                    </div>
                                </a>
                            </div>
                        </ul>
                    </li>
                </a>

                <a href="<?php echo $websiteUrl?>/blog" title="Blog">
                    <li class="blog-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/blog")) {?> active <?php }?>">
                        Blog
                    </li>
                </a>

                <a href="<?php echo $websiteUrl?>/faq" title="Frequently Asked Questions">
                    <li class="blog-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/faq")) {?> active <?php }?>">
                        FAQ
                    </li>
                </a>

                <a href="<?php echo $websiteUrl?>/contact-us" title="Contact Us">
                    <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/contact-us")) {?> active <?php }?>">
                        Contact Us
                    </li>
                </a>
            </ul>

        </nav>           
        <button class="mobile-btn" onclick="_openMenu()"><i class="bi-text-right"></i></button>
    </div>
</header>