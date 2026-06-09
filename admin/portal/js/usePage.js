function _getActivePagesTab(props) {
	const {
        page = '',
        divid = '',
		pageContainer='getPagesDetails'
    } = props;
	_getActivePagesTabLink(divid);
	if(page){
		_getPage({page: page, pageContainer: pageContainer,  url: adminPortalMiddlewareUrl});
	}
}
function _getActivePagesTabLink(divid){
	$('#pageContent, #picturePage').removeClass('active-li');
	$("#"+divid).addClass('active-li');
}

$(function () {
	seoFlyerPreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#seoFlyerPreviewPix').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});