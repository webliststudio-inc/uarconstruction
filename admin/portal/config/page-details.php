<?php if ($page == 'pageContent') { ?>
    <script>
        useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));
    </script>

    <div class="page-form-div animated fadeIn">
        <div class="page-title">SEO CONTENT</div>
        <div class="form-div ">
            <div class="form-input-div">
                <?php if ($pageCategory == 'BLOG') { ?>
                    <div class="text_field_container" id="categoryId_container">
                        <script>
                            selectField({
                                id: 'categoryId',
                                title: 'Select Blog Category',
                                fieldValue: useEachPageSession?.categoryData?.categoryId ?? '',
                                fieldLabel: useEachPageSession?.categoryData?.categoryName ?? ''
                            });
                            _getSelectCategory('categoryId');
                        </script>
                    </div>
                <?php } ?>

                <?php if ($pageCategory == 'PORTFOLIO') { ?>
                    <div class="text_field_container" id="projectStageId_container">
                        <script>
                            selectField({
                                id: 'projectStageId',
                                title: 'Select Project Stage',
                                fieldValue: useEachPageSession?.projectStageData?.projectStageId ?? '',
                                fieldLabel: useEachPageSession?.projectStageData?.projectStageName ?? ''
                            });
                            _getSelectProjectStages('projectStageId');
                        </script>
                    </div>
                <?php } ?>

                <?php if ($pageCategory == 'PORTFOLIO') { ?>
                    <div class="text_field_container" id="projectCategoryId_container">
                        <script>
                            selectField({
                                id: 'projectCategoryId',
                                title: 'Select Project Category',
                                fieldValue: useEachPageSession?.projectCategoryData?.projectCategoryId ?? '',
                                fieldLabel: useEachPageSession?.projectCategoryData?.projectCategoryName ?? ''
                            });
                            _getSelectProjectCategories('projectCategoryId');
                        </script>
                    </div>
                <?php } ?>

                <div class="text-field-wrapper">
                    <div class="title">PAGE URL</div>
                    <div class="text_field_container" id="pageUrl_container">
                        <script>
                            textField({
                                id: 'pageUrl',
                                title: 'Page Url',
                                value: useEachPageSession?.pageUrl ?? ''
                            });
                        </script>
                    </div>
                </div>

                <div class="text-field-wrapper">
                    <div class="title">PAGE TITLE <span><em>(Not more than 100 words)</em></span></div>
                    <div class="text_field_container" id="pageTitles_container">
                        <script>
                            textField({
                                id: 'pageTitles',
                                title: 'Page Title',
                                value: useEachPageSession?.pageTitle ?? ''
                            });
                        </script>
                    </div>
                </div>

                <div class="text-field-wrapper">
                    <div class="title">SEO KEYWORDS</div>
                    <div class="text_area_container" id="seoKeywords_container">
                        <script>
                            textField({
                                id: 'seoKeywords',
                                title: 'Seo Keywords',
                                type: 'textarea',
                                value: useEachPageSession?.seoKeywords ?? ''
                            });
                        </script>
                    </div>
                </div>

                <div class="text-field-wrapper">
                    <div class="title">SEO DESCRIPTION <span><em>(Not more than 167 words)</em></span></div>
                    <div class="text_area_container" id="seoDescription_container">
                        <script>
                            textField({
                                id: 'seoDescription',
                                title: 'Seo Descriptions',
                                type: 'textarea',
                                maxlength: 167,
                                value: useEachPageSession?.seoDescription ?? ''
                            });
                        </script>
                    </div>
                </div>
            </div>

            <div class="picture-div">
                <label>
                    <div class="pix-div" id="issueBorder"><img id="seoFlyerPreviewPix" src="<?php echo $websiteUrl ?>/all-images/images/sample.jpg" /></div>
                    <input type="file" id="seoFlyer" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="seoFlyerPreview.UpdatePreview(this);" />
                </label>
                <div class="issue-text" id="issues_seoFlyer"></div>

                <script>
                    $(document).ready(function () {
                        const pageCategory = "<?php echo $pageCategory; ?>";
                        const pixPath = pageCategory === 'BLOG' ? blogPixPath : pageCategory === 'SERVICE' ? servicePixPath : portfolioPixPath;
                        const fetchSeoFlyer = useEachPageSession?.seoFlyer;
                        const seoFlyerUrl = fetchSeoFlyer ? pixPath + "/" + fetchSeoFlyer + '?t=' + new Date().getTime() : "<?php echo $websiteUrl ?>/all-images/images/sample.jpg";

                        $("#seoFlyerPreviewPix").attr("src", seoFlyerUrl).attr("alt", useEachPageSession?.pageTitle);
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="page-form-div">
        <div class="page-title">FULL PAGE CONTENT</div>
        <div class="form-div content-form">
            <script src="<?php echo $websiteUrl ?>/admin/portal/js/TextEditor.js" referrerpolicy="origin"></script>
            <script>
                $(document).ready(function () {
                    tinymce.init({
                        selector: '#pageContentEditor', // change this value according to your HTML
                        plugins: "link image table",
                        setup: function (editor) {
                            editor.on('init', function () {
                                setTimeout(function () {
                                    editor.setContent(useEachPageSession?.pageContent ?? '');
                                }, 300);
                            });
                        }
                    });
                });
            </script>

            <div class="page-content-back-div">
                <textarea class="text_area" style="width:100%;" rows="27" id="pageContentEditor" title="TYPE FULL PAGE CONTENT HERE" type="text" placeholder=""></textarea>
                <div class="issueText" id="issue_pageContentEditor"></div>
            </div>

            <?php if ($pageCategory == 'PORTFOLIO') { ?>
                <div class="text-field-wrapper">
                    <div class="text_field_container" id="location_container">
                        <script>
                            textField({
                                id: 'location',
                                title: 'Location',
                            });
                        </script>
                    </div>
                </div>
            <?php } ?>

            <div class="text_field_container" id="statusId_container">
                <script>
                    selectField({
                        id: 'statusId',
                        title: 'Select Status',
                        fieldValue: useEachPageSession?.statusData?.statusId ?? '',
                        fieldLabel: useEachPageSession?.statusData?.statusName ?? ''
                    });
                    _getSelectStatusId('statusId', '1,2');
                </script>
            </div>

            <div class="btn-div">
                <button class="btn" id="saveBtn" title="Save Page" onclick="_createOrUpdatePage('<?php echo $pageCategory; ?>');"><i class="bi-save"></i> SAVE</button>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'picturePage') { ?>
    <div class="page-form-div animated fadeIn">
        <div class="page-title">UPLOAD MORE PICTURES</div>
        <div class="form-div form-picture-div">
            <div class="picture-back-div">
                <div id="fetchPagePicture">
                    <div class="picture-div">
                        <div class="icon-div" title="Delete Picture" id="deleteBtn_${item.sn}" onclick="_deletePagePicture('${item.publishId}','${item.sn}');"><i class="bi-trash"></i></div>
                        <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-1.jpeg" alt="Grace Worship Center" />
                    </div>

                    <div class="picture-div">
                        <div class="icon-div" title="Delete Picture" id="deleteBtn_${item.sn}" onclick="_deletePagePicture('${item.publishId}','${item.sn}');"><i class="bi-trash"></i></div>
                        <img src="<?php echo $websiteUrl?>/uploaded_files/portfolio/portfolio-7.jpeg" alt="Grace Worship Center" />
                    </div>

                    <!-- Upload button is permanent -->
                    <div class="picture-div select-pix-div">
                        <label>
                            <div class="pix-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/default.png" />
                            </div>
                            <input type="file" id="pictures" name="pictures[]" multiple
                                accept=".jpg, .JPG, .png, .PNG, .jpeg, .JPEG"
                                onchange="" style="display:none;" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>