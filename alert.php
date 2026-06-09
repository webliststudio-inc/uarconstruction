<div class="all-alert-back-div">
    <div class="success-alert-div animated fadeInDown">
        <div class="icon"><i class="bi-check-all"></i></div>
        <div class="text">
            <p>PASSWORD RESET SUCCESSFUL! Check your email to confirm.</p>
        </div>
    </div>
</div>

<div id="get-form-more-div">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px" alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="get-more-div-secondary">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px" alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="customConfirmModal" class="modal-overlay" style="display:none;"></div>
<div id="globalLoader" class="modal-preloader modal-overlay" style="display:none;">
    <div>
        <div class="spinner"></div>
        <p id="globalLoaderText">Locking result, please wait...</p>
    </div>
</div>


<div class="sidenavdiv">
    <div class="live-chat-back-div">

        <a href="tel:1-800-658-5679" title="Call Customer Care">
            <div class="chat-div">
                <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
                <div class="text">1-800-658-5679</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://api.whatsapp.com/" target="_blank" title="Whatsapp">
            <div class="chat-div">
                <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
                <div class="text">+234-812-700-0262</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.facebook.com/" target="_blank" title="Facebook">
            <div class="chat-div">
                <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
                <div class="text">Facebook Page </div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://twitter.com/" target="_blank" title="Twitter">
            <div class="chat-div">
                <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
                <div class="text">Twitter Page</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.instagram.com/" target="_blank" title="Instagram">
            <div class="chat-div">
                <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
                <div class="text">Instagram Page</div>
                <br clear="all" />
            </div>
        </a>
    </div>

    <div class="index-menu-back-div">
        <div class="top-div">
            <div class="logo-div">
                <a href="<?php echo $websiteUrl ?>"><img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="<?php echo $appName ?> Logo" class="animated zoomIn" /></a>
            </div>
        </div>

        <div class="div-in">
            <div class="div">
                <a href="<?php echo $websiteUrl; ?>" title="Home Page">
                    <li <?php if ($page == 'index.php') { ?> id="active-li" <?php } ?>><i class="bi-house"></i> Home</li>
                </a>
            </div>

            <div class="div">
                <li onclick="_openLi('service')"><i class="bi bi-bricks"></i> Services <i class="bi-plus" id="side-expand"></i></li>
                <div class="sub-li" id="service-sub-li">

                </div>
            </div>

            <div class="div">
                <li onclick="_openLi('portfolio')"><i class="bi bi-image"></i>Portfolio<i class="bi-plus" id="side-expand"></i></li>
                <div class="sub-li" id="portfolio-sub-li">
                    <a href="<?php echo $websiteUrl ?>/portfolio/completed-projects" title="Completed Projects">
			        <li>Completed Projects</li></a>

                    <a href="<?php echo $websiteUrl ?>/portfolio/current-projects" title="Current Projects">
			        <li>Current Projects</li></a>

                    <a href="<?php echo $websiteUrl ?>/portfolio/upcoming-projects" title="Upcoming Projects">
			        <li>Upcoming Projects</li></a>
                </div>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/about" title="About Us">
                    <li <?php if ($page == 'about') { ?> id="active-li" <?php } ?>><i class="bi-building"></i> About Us</li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/blog" title="Blog">
                    <li <?php if ($page == 'blog') { ?> id="active-li" <?php } ?>><i class="bi-journals"></i> Blog</li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/contact-us" title="Contact Us">
                    <li <?php if ($page == 'contact-us') { ?> id="active-li" <?php } ?>><i class="bi-headset"></i> Contact Us</li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/faq" title="Frequently Asked Questions">
                    <li <?php if ($page == 'faq') { ?> id="active-li" <?php } ?>><i class="bi-patch-question"></i> Frequently Asked Question</li>
                </a>
            </div>
        </div>
    </div>

    <div class="sidenavdiv-in" onclick="_closeSideNav()"></div>
</div>