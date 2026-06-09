<?php if ($page == 'blogPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-journal"></i></div>
            </div>
            <div class="text-div">
                <h3>Blog</h3>
                <p>Manage your blog posts to share your work and build trust with clients.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersBlog(this.value);" placeholder="Search Blog Here...">   
                <i class="bi bi-search"></i>
            </div>
            <button class="btn" title="ADD NEW BLOG" onclick="_getForm({page: 'blogReg', url: adminPortalMiddlewareUrl});">
                <i class="bi-plus-square"></i> ADD NEW BLOG
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-journal"></i>
                    <p>Blog Posts</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="grid-div-wrapper" id="blogPageContent">    
                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="_getForm({page: 'editPagesForm', pageCategory: 'blog', url: adminPortalMiddlewareUrl});">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-1.jpeg" alt="Top Construction Trends for Modern Development" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Top Construction Trends for Modern Development</h2>
                            <p>Top Construction Trends for Modern Development is a beautiful, modern and efficient construction project...</p>  
                            <div class="bottom-content">
                                <div class="category"><span>CONSTRUCTION</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-2.jpeg" alt="Choosing Quality Materials for Lasting Structures" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Choosing Quality Materials for Lasting Structures</h2>
                            <p>Choosing Quality Materials for Lasting Structures is a beautiful, modern and efficient construction project...</p>  
                            <div class="bottom-content">
                                <div class="category"><span>CONSTRUCTION</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/uploaded_files/blog/blog-3.jpeg" alt="The Importance of Effective Project Planning" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>The Importance of Effective Project Planning</h2>
                            <p>The Importance of Effective Project Planning is a beautiful, modern and efficient construction project...</p>  
                            <div class="bottom-content">
                                <div class="category"><span>ANNOUCEMENT</span></div>
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

<?php if ($page == 'blogReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-journal"></i></div>
                <h3 id="pageTitle">CREATE NEW BLOG</h3>
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
                            <i class="bi bi-journal"></i>
                            <p>Create New Blog Here</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="catId_container">
                            <script>
                                selectField({
                                    id: 'catId',
                                    title: 'Select Blog Category',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="regTile_container">
                            <script>
                                textField({
                                    id: 'regTile',
                                    title: 'Blog Title',
                                });
                            </script>
                        </div>

                        <div class="title-div">UPLOAD BLOG PICTURE: <i>(JPG, PNG FORMAT ONLY)</i> <span>*</span></div>
                        <label>
                            <div class="pix-div" id="blogPixWrapper">
                                <label>
                                    <img id="blogPixPreview" src="<?php echo $websiteUrl ?>/all-images/images/sample.jpg" alt="Default Image">      
                                    <input type="file" id="blogPix" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="blogPixPreview.UpdatePreview(this);" />    
                            </div>
                            <div class="issue-text" id="issues_blogPix"></div>
                        </label>

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