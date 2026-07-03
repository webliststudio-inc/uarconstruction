<?php include '../../../config/constants.php';?>
<script src="<?php echo $websiteUrl?>/admin/portal/js/session_validation.js"></script>

<?php
$action=$_POST['action'];

switch ($action){

	case 'get_page':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		$pageCategory=$_POST['pageCategory'];
		require_once('dashboard-content.php');
		require_once('staff-content.php');
		require_once('service-content.php');
		require_once('portfolio-content.php');
		require_once('blog-content.php');
		require_once('faq-content.php');
		require_once('review-content.php');
		require_once('settings-content.php');
		require_once('role-content.php');
		require_once('pages-content.php');
		require_once('page-details.php');
		require_once('information-category-content.php');
	break;

	case 'get_form':
		$page=$_POST['page'];
		$id=$_POST['id'];
		$pageCategory=$_POST['pageCategory'];
		$modalLayer=$_POST['modalLayer'];
		require_once('dashboard-content.php');
		require_once('staff-content.php');
		require_once('service-content.php');
		require_once('portfolio-content.php');
		require_once('blog-content.php');
		require_once('faq-content.php');
		require_once('review-content.php');
		require_once('settings-content.php');
		require_once('role-content.php');
		require_once('pages-content.php');
		require_once('page-details.php');
		require_once('information-category-content.php');
	break;

	case 'uploadBlogPix':
		$newBlogPix = $_POST['newBlogPix'] ?? '';
		$oldBlogPix = $_POST['oldBlogPix'] ?? '';
		$blogPix = $_POST['blogPix'] ?? '';
	
		///// Validate Exam Logo /////
		if (!empty($blogPix)) {
    		$blogPix = preg_replace('#^data:image/\w+;base64,#i', '', $blogPix);
			$blogPix = str_replace(' ', '+', $blogPix);
			$blogPix = base64_decode($blogPix);
		}
		
		//// Upload Exam Logo ////
		$uploadBlogDir = "../../../uploaded_files/blog/";

		//// Create Directory If Not Exists ////
		if(!empty($newBlogPix)){
			if($newBlogPix!=$oldBlogPix){
				unlink($uploadBlogDir . $oldBlogPix);
				file_put_contents($uploadBlogDir . $newBlogPix, $blogPix);
			}
		}
    break;
}
?>