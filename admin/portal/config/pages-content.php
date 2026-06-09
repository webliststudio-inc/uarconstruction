<?php if ($page == 'editPagesForm') { ?>
    <div class="pages-creation-panel">
        <div class="side-bar">
            <div class="div-in">
                <?php include 'page-summary.php' ?>
            </div>
        </div>

        <div class="pages-content-div">
            <div class="title-div">
                <ul>
                    <?php if ($pageCategory == 'services') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', url: adminPortalMiddlewareUrl});">PAGE CONTENT</li>
                        <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', url: adminPortalMiddlewareUrl});">UPLOAD PICTURE</li>
                    <?php } ?>

                    <?php if ($pageCategory == 'portfolio') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', url: adminPortalMiddlewareUrl});">PAGE CONTENT</li>
                         <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', url: adminPortalMiddlewareUrl});">UPLOAD PICTURE</li>   
                    <?php } ?>

                    <?php if ($pageCategory == 'blog') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', url: adminPortalMiddlewareUrl});">PAGE CONTENT</li> 
                         <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', url: adminPortalMiddlewareUrl});">UPLOAD PICTURE</li>
                    <?php } ?>
                </ul>
                <div class="btn-div">
                    <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                        <i class="bi bi-x-lg"></i> Close
                    </button>
                </div>
            </div>

            <div class="pages-back-div">
                <div id="getPagesDetails">
                    <?php
                        $page = 'pageContent';
                        include 'page-details.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>