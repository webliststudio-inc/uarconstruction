<?php if ($page == 'faqPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-patch-question"></i></div>
            </div>
            <div class="text-div">
                <h3>Frequently Asked Questions</h3>
                <p>Organize and manage all Frequently Asked Questions to ensure smooth listing and browsing.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersFaq(this.value);" placeholder="Search FAQ Here...">
                <i class="bi bi-search"></i>
            </div>
            <button class="btn" title="ADD NEW FAQ" onclick="_getForm({page: 'faqReg', url: adminPortalMiddlewareUrl});">
                <i class="bi-plus-square"></i> ADD NEW FAQ
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-patch-question"></i>
                    <p>FAQ</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="faq-back-wrapper">
                    <div class="faq-back-div">
                        <div class="title-div ACTIVE">
                        <div class="num">1</div>
                        <button class="btn" onClick="">
                            <i class="bi-pencil-square"></i> 
                            <span>What types of construction projects do you handle?</span>
                        </button>
                        </div>
                        <div class="answer-div">We specialize in residential, commercial, urban, and rural construction projects,
                                        including new builds, renovations, remodeling, and infrastructure development.</div>
                    </div>

                    <div class="faq-back-div">
                        <div class="title-div ACTIVE">
                        <div class="num">2</div>
                        <button class="btn" onClick="">
                            <i class="bi-pencil-square"></i> 
                            <span>How long does a construction project take to complete?</span>
                        </button>
                        </div>
                        <div class="answer-div">Project timelines vary depending on size, complexity, and site conditions. After
                            evaluating your project, we provide a detailed schedule with estimated
                            completion dates.</div>
                    </div>

                    <div class="faq-back-div">
                        <div class="title-div ACTIVE">
                        <div class="num">3</div>
                        <button class="btn" onClick="">
                            <i class="bi-pencil-square"></i> 
                            <span>Do you provide free project consultations and estimates?</span>
                        </button>
                        </div>
                        <div class="answer-div">Yes. We offer free consultations and project estimates to help clients understand
                                        costs, timelines, and the best construction solutions for their needs.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'faqReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-patch-question"></i></div>
                <h3 id="pageTitle">CREATE A NEW FAQ</h3>
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
                            <i class="bi bi-patch-question"></i>
                            <p>FAQ</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="categoryId_container">
                            <script>
                                selectField({
                                    id: 'categoryId',
                                    title: 'Select FAQ Category',
                                });
                              //  _getSelectCategory('categoryId');
                            </script>
                        </div>

                        <div class="text_field_container" id="faqQuestion_container">
                            <script>
                                textField({
                                    id: 'faqQuestion',
                                    title: 'FAQ Question',
                                });
                            </script>
                        </div>

                        <div class="title-div">FAQ ANSWER</div>
                        <script src="<?php echo $websiteUrl ?>/admin/portal/js/TextEditor.js" referrerpolicy="origin"></script>
                       <script>
                            $(document).ready(function () {
                                tinymce.init({
                                    selector: '#faqAnswer',
                                    plugins: "link image table",
                                });
                            });
                        </script>
                        <div style="margin-bottom: 20px;">
                            <div class="page-content-back-div">
                                <textarea class="text_field" rows="20" id="faqAnswer" title="TYPE FULL PAGE CONTENT HERE" type="text" maxlength="167" placeholder=""></textarea>
                                <div class="issueText" id="issue_faqAnswer"></div>
                            </div>
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