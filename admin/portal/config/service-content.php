<?php if ($page == 'servicePage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-stack"></i></div>
            </div>
            <div class="text-div">
                <h3>Services</h3>
                <p>Organize and manage all Services to ensure smooth listing and browsing.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersService(this.value);" placeholder="Search Services Here...">   
                <i class="bi bi-search"></i>
            </div>
            <button class="btn" title="ADD NEW SERVICE" onclick="_getForm({page: 'serviceReg', url: adminPortalMiddlewareUrl});">
                <i class="bi-plus-square"></i> ADD NEW SERVICE
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-stack"></i>
                    <p>Services</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="grid-div-wrapper" id="servicePageContent">
                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="_getForm({page: 'editPagesForm', pageCategory: 'services', url: adminPortalMiddlewareUrl});">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-1.jpeg" alt="Commercial Construction" /></div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Commercial Construction</h2>
                            <p>Delivering innovative and efficient commercial building solutions for businesses of
                                    all sizes.</p>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-2.jpeg"
                                    alt="Residential Construction" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Residential Construction</h2>
                            <p>Building modern, durable and beautiful homes tailored to your lifestyle and needs.</p>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="Road Construction" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Road Construction</h2>
                            <p>Construction of durable roads, bridges, and essential infrastructure for urban and rural development.</p>
                        </div>
                    </div>

                    <div class="grid-div">
                        <div class="btn-div">
                            <button class="btn active-btn" onclick="">EDIT</button>
                            <button class="btn" onclick="">EDIT PAGE DETAILS</button>
                        </div>

                        <div class="status-div ACTIVE">ACTIVE</div>
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="Road Construction" />
                        </div>
                        <div class="text-div">
                            <div class="text-in">
                                <div class="text">UPDATED ON: <span>JUN 26, 2026</span></div>
                            </div>
                            <h2>Road Construction</h2>
                            <p>Construction of durable roads, bridges, and essential infrastructure for urban and rural development.</p>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div id="serviceContentPaginationControls" class="pagination-div"></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'serviceReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-stack"></i></div>
                <h3 id="pageTitle">CREATE NEW SERVICE</h3>
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
                            <i class="bi bi-stack"></i>
                            <p>Create New Service Here</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="regTile_container">
                            <script>
                                textField({
                                    id: 'regTile',
                                    title: 'Service Title',
                                });
                            </script>
                        </div>

                        <div class="title-div">UPLOAD SERVICE PICTURE: <i>(JPG, PNG FORMAT ONLY)</i> <span>*</span></div>
                        <label>
                            <div class="pix-div" id="servicePixWrapper">
                                <label>
                                    <img id="servicePixPreview" src="<?php echo $websiteUrl ?>/all-images/images/sample.jpg" alt="Default Image">
                                    <input type="file" id="servicePix" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="servicePixPreview.UpdatePreview(this);" />  
                            </div>
                            <div class="issue-text" id="issues_servicePix"></div>
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