<?php if ($pageCategory == 'services') { ?>
    <div class="grid-div">
        <div class="img-div"><img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-1.jpeg" alt="Commercial Construction" /></div>

        <div class="text-div">
            <h2 id="serviceTitle">Commercial Construction</h2>
            <p>Delivering innovative and efficient commercial building solutions for businesses of all sizes. </p>
            <div class="text-in">
                <div class="text">UPDATED ON: <span id="formattedDate">JUN 26, 2026</span></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($pageCategory == 'portfolio') { ?>
    <div class="grid-div">
        <div class="img-div">
            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg" alt="Grace Worship Center" />
        </div>

        <div class="text-div">
            <div class="text-in">
                <div class="text">UPDATED ON: <span id="formattedDate">JUN 26, 2026</span></div>
            </div>
            <h2 id="portfolioTitle">Grace Worship Center</h2>
            <p>Grace Worship Center is a beautiful and modern worship center located in the heart...</p>
            <div class="bottom-content">
                <div class="category"><span>WORSHIP CENTER</span></div>
                <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($pageCategory == 'blog') { ?>
    <div class="grid-div">
        <div class="img-div">
            <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-1.jpeg" alt="Top Construction Trends for Modern Development" />
        </div>

        <div class="text-div">
            <div class="text-in">
                <div class="text">UPDATED ON: <span id="formattedDate">JUN 26, 2026</span></div>
            </div>
            <h2 id="blogTitle">Top Construction Trends for Modern Development</h2>
            <p>Top Construction Trends for Modern Development is a beautiful, modern and efficient construction project...</p>
            <div class="bottom-content">
                <div class="category"><span>CONSTRUCTION</span></div>    
            </div>
        </div>
    </div>
<?php } ?>