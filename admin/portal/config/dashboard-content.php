<?php if ($page == 'dashboard') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-speedometer2"></i></div>
            </div>
            <div class="text-div">
                <h2>Welcome Back, <span id="DashFullname">
                       Paul</span>!</h2>
                <p>Welcome to your dashboard, where you can oversee all your activities, tasks, progress, and updates—helping you stay organized and on track</p>
            </div>
        </div>

        <div class="dashboard-right-wrapper">
            <div>
                <p><span><i class="bi-clock"></i> Last Login Date </span></p>
            </div>
            <div><strong id="lastLoginTime">
                    2023-12-12 12:00:00
                </strong></div>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="dashboard-wrapper">
            <div class="statistics-back-div">
                <div class="statistics-div" id="adminPage" title="Administrators" onclick="_getActivePage({page:'adminPage', divid:'adminPage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>Administrators</p>
                            <span>Total Administrators</span>
                            <h2 id="totalAdminCount">10</h2>
                        </div>
                        <div class="statistics-icon pending">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div" id="servicePage" title="Services" onclick="_getActivePage({page:'servicePage', divid:'servicePage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>Services</p>
                            <span>Total Construction Services</span>
                            <h2 id="totalServiceCount">10</h2>
                        </div>
                        <div class="statistics-icon upcoming">
                           <i class="bi bi-stack"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div" id="portfolioPage" title="Portfolio" onclick="_getActivePage({page:'portfolioPage', divid:'portfolioPage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>Portfolio</p>
                            <span>Completed Portfolio Items</span>
                            <h2 id="totalPortfolioCount">100</h2>
                        </div>
                        <div class="statistics-icon pending">
                            <i class="bi bi-images"></i>
                        </div>
                    </div>
                </div>
                
                <div class="statistics-div" id="blogsPage" title="Blog" onclick="_getActivePage({page:'blogPage', divid:'blogPage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>Blog</p>
                            <span>Published Articles</span>
                            <h2 id="totalBlogCount">20</h2>
                        </div>
                        <div class="statistics-icon upcoming">
                            <i class="bi bi-journal-text"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div" id="faqPage" title="Frequently Asked Questions" onclick="_getActivePage({page:'faqPage', divid:'faqPage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>FAQ</p>
                            <span> Frequently Asked Questions (FAQs)</span>
                            <h2 id="totalFAQaqCount">4</h2>
                        </div>
                        <div class="statistics-icon pending">
                            <i class="bi bi-patch-question"></i>
                        </div>
                    </div>
                </div>

                <div class="statistics-div" id="reviewPage" title="Reviews" onclick="_getActivePage({page:'reviewPage', divid:'reviewPage'});">
                    <div class="statistics-inner-div">
                        <div class="statistics-text">
                            <p>Review</p>
                            <span> Reviews</span>
                            <h2 id="totalReviewCount">10</h2>
                        </div>
                        <div class="statistics-icon completed">
                            <i class="bi bi-chat-text"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-statistics-wrapper">
                <div class="left-contaioner">
                    <div class="main-content-div dash-main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title">
                                    <i class="bi bi-chat-text"></i>
                                    <p>Recent Reviews</p>
                                </div>
                            </div>

                            <div class="inner-table-content">
                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%" id="fetchAllSubscriptions">
                                        <thead>
                                            <tr class="tb-col">
                                                <th>sn</th>
                                                <th>Review Id</th>
                                                <th>Fullname</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                <th>Review</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>REV02020261029115106</td>
                                                <td class="clickable-td" title="Click to view review Details">
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">JOHNSON AGIDA</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>johnson.agida@example.com</td>
                                                <td>+2348012345678</td>
                                                <td>Good Service</td>
                                                <td>2026-03-01</td>
                                                <td>
                                                    <div class="status-div ACTIVE">ACTIVE</div>
                                                </td>
                                                <td>
                                                    <button class="btn view-btn" title="Activate Review">
                                                        ACTIVATE
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>REV02020261029115106</td>
                                                <td class="clickable-td" title="Click to view review Details">
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">JOHNSON AGIDA</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>johnson.agida@example.com</td>
                                                <td>+2348012345678</td>
                                                <td>Good Service</td>
                                                <td>2026-03-01</td>
                                                <td>
                                                    <div class="status-div ACTIVE">ACTIVE</div>
                                                </td>
                                                <td>
                                                    <button class="btn view-btn" title="Activate Review">
                                                        ACTIVATE
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>REV02020261029115106</td>
                                                <td class="clickable-td" title="Click to view review Details">
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">JOHNSON AGIDA</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>johnson.agida@example.com</td>
                                                <td>+2348012345678</td>
                                                <td>Good Service</td>
                                                <td>2026-03-01</td>
                                                <td>
                                                    <div class="status-div PENDING">PENDING</div>
                                                </td>
                                                <td>
                                                    <button class="btn view-btn" title="Activate Review">
                                                        PENDING
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>REV02020261029115106</td>
                                                <td class="clickable-td" title="Click to view review Details">
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">JOHNSON AGIDA</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>johnson.agida@example.com</td>
                                                <td>+2348012345678</td>
                                                <td>Good Service</td>
                                                <td>2026-03-01</td>
                                                <td>
                                                    <div class="status-div ACTIVE">ACTIVE</div>
                                                </td>
                                                <td>
                                                    <button class="btn view-btn" title="Activate Review">
                                                        ACTIVATE
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'logoutConfirmForm') { ?>
    <div class="caption-success-div animated zoomIn">
        <div class="div-in">
            <div class="img"><img src="<?php echo $websiteUrl ?>/all-images/images/warning.gif" /></div>
            <h2>Are you sure to log-out?</h2>
            Please, confirm your log-out action.
            <div class="btn-div">
                <button class="btn" onclick="_logOut();">YES</button>
                <button class="btn no-btn" onclick="_alertClose(<?php echo $modalLayer ?>);">NO</button>
            </div>
        </div>
    </div>
<?php } ?>