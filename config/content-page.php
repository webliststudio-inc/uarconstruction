<?php if ($page == 'reviewForm') { ?>
    <div class="slide-form-div" data-aos="fade-in" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-container">
                <div class="icon-div"><i class="bi bi-chat-quote-fill"></i></div>
                <h3 id="pageTitle">WRITE A REVIEW</h3>
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
               <p>You are about to share your experience</span>.
                Please complete the form below with accurate details to successfully submit your review</span>.
                </p>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-chat-quote-fill"></i>
                            <p>Write your review here</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="fullName_container">
                            <script>
                                textField({
                                    id: 'fullName',
                                    title: 'Full Name',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="emailAddress_container">
                            <script>
                                textField({
                                    id: 'emailAddress',
                                    title: 'Email Address',
                                    type: 'email',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="phoneNumber_container">
                            <script>
                                textField({
                                    id: 'phoneNumber',
                                    title: 'Phone Number',
                                    type: 'tel',
                                });
                            </script>
                        </div>

                        <div class="text_area_container" id="message_container">
                            <script>
                                textField({
                                    id: 'message',
                                    title: 'Write Your Review',
                                    type: 'textarea',
                                    maxlength: 180,
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" title="Send Review" id="submitBtn" onclick="_submitReview('REVIEW');">
                    <i class="bi-send-check"></i> Send
                </button>
            </div>
        </div>
    </div>
<?php } ?>