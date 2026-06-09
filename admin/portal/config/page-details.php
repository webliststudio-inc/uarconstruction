<?php if ($page == 'pageContent') { ?>
    <div class="page-form-div animated fadeIn">
        <div class="page-title">SEO CONTENT</div>
        <div class="form-div ">
            <div class="form-input-div">
                <div class="text-field-wrapper">
                    <div class="title">PAGE URL</div>
                    <div class="text_field_container" id="pageUrl_container">
                        <script>
                            textField({
                                id: 'pageUrl',
                                title: 'Page Url'
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
                                title: 'Page Title'
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
                                type: 'textarea'
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
                                type: 'textarea'
                            });
                        </script>
                    </div>
                </div>
            </div>

            <div class="picture-div">
                <label>
                    <div class="pix-div"><img id="seoFlyerPreviewPix" src="<?php echo $websiteUrl ?>/all-images/images/sample.jpg" /></div>
                    <input type="file" id="seoFlyer" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="seoFlyerPreview.UpdatePreview(this);" />
                </label>
            </div>
        </div>
    </div>

    <div class="page-form-div">
        <div class="page-title">FULL PAGE CONTENT</div>
        <div class="form-div content-form">
            <script src="<?php echo $websiteUrl ?>/admin/portal/js/TextEditor.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#pageContentEditor', // change this value according to your HTML
                    plugins: "link, image, table"
                });
            </script>

            <div class="page-content-back-div">
                <textarea class="text_area" style="width:100%;" rows="27" id="pageContentEditor" title="TYPE FULL PAGE CONTENT HERE" type="text" placeholder=""></textarea>
                <div class="issueText" id="issue_pageContentEditor"></div>
            </div>

            <div class="btn-div">
                <button class="btn" id="saveBtn" title="Save Page" onclick=""><i class="bi-save"></i> SAVE</button>
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