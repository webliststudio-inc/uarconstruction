<?php if ($page == 'portfolioPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-images"></i></div>
            </div>
            <div class="text-div">
                <h3>Portfolio</h3>
                <p>Manage your portfolio to showcase your work and build trust with clients.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersPortfolio(this.value);" placeholder="Search Portfolio Here...">   
                <i class="bi bi-search"></i>
            </div>
            <button class="btn" title="ADD NEW PORTFOLIO" onclick="_getForm({page: 'portfolioReg', url: adminPortalMiddlewareUrl});">
                <i class="bi-plus-square"></i> ADD NEW PORTFOLIO
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-images"></i>
                    <p>Portfolio</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="grid-div-wrapper" id="portfolioPageContent">    
                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="_getForm({page: 'editPagesForm', pageCategory: 'portfolio', url: adminPortalMiddlewareUrl});">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div COMPLETED">COMPLETED</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg" alt="Grace Worship Center" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                                <div class="other-status ACTIVE">ACTIVE</div>
                            </div>
                            <h2>Grace Worship Center</h2>
                            <p>Grace Worship Center is a beautiful and modern worship center located in the heart...</p>  
                            <div class="bottom-content">
                                <div class="category"><span>WORSHIP CENTER</span></div>
                                <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div CURRENT">CURRENT</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/current-project-1.jpeg" alt="Modern Office Complex" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                                <div class="other-status ACTIVE">ACTIVE</div>
                            </div>
                            <h2>Modern Office Complex</h2>
                            <p>Modern Office Complex is a beautiful, modern and efficient office complex located in the heart...</p>
                            <div class="bottom-content">
                                <div class="category"><span>COMMERCIAL</span></div>
                                <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div UPCOMING">UPCOMING</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/central_plaza_complex.jpeg" alt="Central Plaza Complex" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                                <div class="other-status ACTIVE">ACTIVE</div>
                            </div>
                            <h2>Central Plaza Complex</h2>
                            <p>Central Plaza Complex is a beautiful, modern worship complex located in the heart...</p>  
                            <div class="bottom-content">
                                <div class="category"><span>COMMERCIAL</span></div>
                                <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div COMPLETED">COMPLETED</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-5.jpeg"
                                    alt="CityGate Commercial Mall" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                                <div class="other-status SUSPENDED">SUSPENDED</div>
                            </div>
                            <h2>CityGate Commercial Mall</h2>
                            <p>CityGate Commercial Mall is a beautiful, modern and efficient commercial mall located in the heart..</p>
                            <div class="bottom-content">
                                <div class="category"><span>COMMERCIAL</span></div>
                                <div class="location"><i class="bi bi-geo-alt"></i> <span>Texas, USA</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div id="serviceContentPaginationControls" class="pagination-div"></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'portfolioReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-stack"></i></div>
                <h3 id="pageTitle">CREATE NEW PORTFOLIO</h3>
            </div>
            <div class="btn-div">
                <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <!-- /////////// Title ////////////////////////////// -->
        <div class="container-back-div">
            <div class="form-notification">
                <p>You are about to <span id="subTitle"></span>. Please complete the form below with accurate details to successfully <span id="subTitle2"></span>.</p>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-image"></i>
                            <p>Create New Portfolio Here</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="catId_container">
                            <script>
                                selectField({
                                    id: 'catId',
                                    title: 'Select Portfolio Category',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="regTile_container">
                            <script>
                                textField({
                                    id: 'regTile',
                                    title: 'Portfolio Title',
                                });
                            </script>
                        </div>

                        <div class="title-div">UPLOAD PORTFOLIO PICTURE: <i>(JPG, PNG FORMAT ONLY)</i> <span>*</span></div>
                        <label>
                            <div class="pix-div" id="portfolioPixWrapper">
                                <label>
                                    <img id="portfolioPixPreview" src="<?php echo $websiteUrl ?>/all-images/images/sample.jpg" alt="Default Image">
                                    <input type="file" id="portfolioPix" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="portfolioPixPreview.UpdatePreview(this);" />  
                            </div>
                            <div class="issue-text" id="issues_portfolioPix"></div>
                        </label>

                        <div class="text_field_container" id="location_container">
                            <script>
                                textField({
                                    id: 'location',
                                    title: 'Portfolio Location',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="statusId_container">
                            <script>
                                selectField({
                                    id: 'statusId',
                                    title: 'Select Status',
                                });
                                //_getSelectStatusId('statusId', '1,2');
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" title="SUBMIT" id="submitBtn" onclick=""> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div>
    </div>
<?php } ?>