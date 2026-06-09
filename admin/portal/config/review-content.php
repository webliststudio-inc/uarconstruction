<?php if ($page == 'reviewPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi-chat-quote-fill"></i></div>
            </div>
            <div class="text-div">
                <h3>Reviews</h3>
                <p>Share and manage student and parent reviews to highlight real experiences. Build trust and inspire others through authentic stories and feedback.</p>    
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" id="searchContent" onkeyup="filters('Content');" placeholder="Search Reviews Here...">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-chat-quote-fill"></i>
                    <p>Reviews</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="other-pg-back-div">
                    <div class="testimony-back-div" id="pageContent">
                        <div class="testimony-div">
                            <div class="details">
                                <div class="text">
                                    <h3>Hon. Emmanuel Paul</h3>
                                    <div class="info">
                                        <div>
                                            <p>Email: <span>emmanuelpaul@uarconstruction.com</span></p>
                                            <p>Phone: <span>+2348034567890</span></p>
                                        </div>
                                        <button class="status-btn ACTIVE">ACTIVE</button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn" onclick="_getForm({page: 'updateReview', url: adminPortalMiddlewareUrl});">VIEW DETAILS</button>
                        </div>

                        <div class="testimony-div">
                            <div class="details">
                                <div class="text">
                                    <h3>John Doe</h3>
                                    <div class="info">
                                        <div>
                                            <p>Email: <span>john.de@uarconstruction.com</span></p>
                                            <p>Phone: <span>+2348034567890</span></p>
                                        </div>
                                        <button class="status-btn PENDING">PENDING</button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn" onclick="">VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'updateReview') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-chat-left-text"></i></div>
                <h3>UPDATE REVIEW</h3>  
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
                <p>You are about to update this testimony. Please confirm the form below with accurate details to successfully update testimony.
                </p>
            </div>

            <div class="main-content-div">
                <div class="tables-content-div form-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-chat-left-text"></i>
                            <p>Update testimony here</p>
                        </div>
                    </div>

                    <div class="form-container">                     
                        <div class="main-content-div form-main-content" data-aos="fade-in" data-aos-duration="1500">
                            <div class="tables-content-div form-content-div">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi bi-envelope"></i>
                                        <p>Email Address</p>
                                    </div>
                                </div>

                                <div class="inner-table-content">
                                    <span id="fullName">Hon. Emmanuel Paul</span>
                                </div>
                            </div>
                        </div>

                        <div class="main-content-div form-main-content" data-aos="fade-in" data-aos-duration="1500">
                            <div class="tables-content-div form-content-div">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi bi-telephone"></i>
                                        <p>Phone Number</p>
                                    </div>
                                </div>

                                <div class="inner-table-content">
                                    <span id="mobileNumber">09123456789</span>
                                </div>
                            </div>
                        </div>

                        <div class="main-content-div form-main-content" data-aos="fade-in" data-aos-duration="1500">
                            <div class="tables-content-div form-content-div">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi bi-chat-left-quote"></i>
                                        <p>Testimony</p>
                                    </div>
                                </div>

                                <div class="inner-table-content">
                                <span id="testimony">This is a a good company. I recommend it to everyone.</span> 
                                </div>
                            </div>
                        </div>

                        <div class="text_field_container" id="statusId_container">
                            <script>
                                selectField({
                                    id: 'statusId',
                                    title: 'Select Status',
                                });
                               // _getSelectStatusId('statusId', '1,2');
                            </script>
                        </div>
                    </div>
                </div>

                <div class="btn-div">
                    <button class="btn" title="SUBMIT" id="updateBtn" onclick=""> <i class="bi-check"></i> SUBMIT </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>