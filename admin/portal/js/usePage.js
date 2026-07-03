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

function _createOrUpdatePage(){
	try {
		tinyMCE.triggerSave();

		////////get all needed values////////////
		let issueCount = 0;
		const pageTitle = $('#pageTitles').val().trim();
		const pageUrl = $('#pageUrl').val().trim();
		const seoKeywords = $('#seoKeywords').val().trim();
		const seoDescription = $('#seoDescription').val().trim();
		const pageContent = $('#pageContentEditor').val().trim();
		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("pageTitles", "PAGE TITLE");
		issueCount += _validateEmptyValue("pageUrl", "PAGE URL");
		issueCount += _validateEmptyValue("seoKeywords", "SEO KEYWORDS");
		issueCount += _validateEmptyValue("seoDescription", "SEO DESCRIPTION");

		if (!pageContent) {
			$("#pageContentEditor").addClass("issue");
			$("#issue_pageContentEditor").html("PAGE CONTENT REQUIRED");
			issueCount += 1;
		}

		if (issueCount > 0) return;

		/////Gather form data////
		const formData = new FormData();
		const totalFiles = $('#seoFlyer').get(0).files.length;
		formData.append("pageTitle", pageTitle);
		formData.append("pageUrl", pageUrl);
		formData.append("seoKeywords", seoKeywords);
		formData.append("seoDescription", seoDescription);
		formData.append("pageContent", pageContent);

		if (totalFiles>0){
			for(var i = 0; i < totalFiles; i++){
				formData.append("seoFlyer[]", $("#seoFlyer").get(0).files[i]);
			}
		}

		////// confirm action////
		_showCustomConfirm({
		callback: () => {
			_createOrUpdatePageCallback(formData);
		},
			title: "Are you sure?",
			message: 'Are you sure you want to save? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createOrUpdatePage());
	}
}

function _createOrUpdatePageCallback(formData) {
	let publishData = JSON.parse(sessionStorage.getItem("publishData"));

	///// get btn text/////
	const btnText = $("#saveBtn").html();
	_btnDisable("saveBtn", btnText, true);
	
	//// call endpoint //////
	_callFileEndPoints({
		url: `admin/pages/create-or-update-page?publishId=${publishData.id}&pageCategory=${publishData.category}`,
		formData,
		accessKey: true,
	})
    .then((response) => {
		const message = response.message;
		const oldPageUrl = response.oldPageUrl;
		const oldSeoFlyer = response.oldSeoFlyer;

		const fetchData = response.data[0]; 
		const newSeoFlyer = fetchData.seoFlyer; 
		const pageCategory = fetchData.pageCategory; 
		const publishId = fetchData.publishId; 
		const pageUrl = fetchData.pageUrl; 
		const pageTitle = fetchData.pageTitle; 
		const seoKeywords = fetchData.seoKeywords; 
		const seoDescription = fetchData.seoDescription; 
		const pageContent = fetchData.pageContent;

		_uploadPagePicture(oldSeoFlyer, newSeoFlyer);
		_createPagesFolder(pageCategory, publishId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, oldSeoFlyer, pageContent, message, btnText);
    })
    .catch((error) => {
		_staffValidationCheck(error.response);
		console.error("Error:", error);
		if (error.status==0) {
			_callAjaxError(() => _createOrUpdatePageCallback(formData), error.message); // retry if needed
			_btnDisable("saveBtn", btnText, false);
		} else {
			_actionAlert(error.message, false);
			_btnDisable("saveBtn", btnText, false);
		}
    });
}

function _uploadPagePicture(oldSeoFlyer, newSeoFlyer) {

    const formData = new FormData();
	const totalFiles = $('#seoFlyer').get(0).files.length;
    formData.append("action", "uploadPagePix");
    formData.append("oldSeoFlyer", oldSeoFlyer);
    formData.append("newSeoFlyer", newSeoFlyer);

	for(let i = 0; i < totalFiles; i++){
		formData.append("seoFlyer[]", $("#seoFlyer").get(0).files[i]);
	}

	_callFileEndPoints({
		url: adminPortalLocalUrl,
		formData,
		expectJson: false,
	})
    .catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _uploadPagePicture(oldSeoFlyer, newSeoFlyer), error.message);
    });
}

function _createPagesFolder(pageCategory, publishId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, oldSeoFlyer, pageContent, message, btnText) {
	if(newSeoFlyer==null){
		newSeoFlyer='';
	}
	if(oldPageUrl==null){
		oldPageUrl='';
	}

	const formData = new FormData();
    formData.append("action", "createPagesFolder");
	formData.append("pageCategory", pageCategory);
	formData.append("publishId", publishId);
	formData.append("pageUrl", pageUrl);
	formData.append("oldPageUrl", oldPageUrl);
	formData.append("pageTitle", pageTitle);
	formData.append("seoKeywords", seoKeywords);
	formData.append("seoDescription", seoDescription);
	formData.append("newSeoFlyer", newSeoFlyer);
	formData.append("oldSeoFlyer", oldSeoFlyer);
	formData.append("pageContent", pageContent);

	_callFileEndPoints({
		url: adminPortalLocalUrl,
		formData,
		expectJson: false,
	})
	.then(() => {
		_showCustomConfirm({
			title: 'Success!',
			message: message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
		});
		_btnDisable("saveBtn", btnText, false);
	})
    .catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _createPagesFolder(pageCategory, publishId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, oldSeoFlyer, pageContent, message, btnText), error.message); // retry if needed
    });
}

function _fetchPageContent() {
	let publishData = JSON.parse(sessionStorage.getItem("publishData"));

	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/pages/fetch-page?publishId=${publishData.id}`,
			accessKey: true,
		})
		.then((response) => {
			const data = response.data[0];
			const pageUrl = data.pageUrl;
			const pageTitle = data.pageTitle;
			const seoKeywords = data.seoKeywords;
			const seoDescription = data.seoDescription;
			const seoFlyer = data.seoFlyer;
			const pageContent = data.pageContent;

			$('#pageUrl').val(pageUrl);
			$('#pageTitles').val(pageTitle);
			$('#seoKeywords').val(seoKeywords);
			$('#seoDescription').val(seoDescription);
			$('#seoFlyerPreviewPix').attr('src', seoFlyerPixPath + '/' + seoFlyer);
			
			setTimeout(function() {
				tinymce.get('pageContentEditor').setContent(pageContent);
			}, 2000);	
			
			let pixPath ="";
			if (publishData.category==="product-category"){
				pixPath = productCategoryPixPath
			} else if (publishData.category==="product") {
				pixPath = productPixPath
			}
			
			const arrayImages = data?.productPictures?? 0;
			let imageContent = "";
			for (let i = 0; i < arrayImages.length; i++) {
				const fetchedArrayImages = arrayImages[i];

				imageContent += `
					<div class="picture-div">
						<img src="${pixPath}/${fetchedArrayImages.productPix}" alt="${pageTitle}">
					</div>
				`;
			}
			$('#fetchedPictures').html(imageContent);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _fetchPageContent(), error.message); // retry if needed
			} else {
				_actionAlert(error.message, false);
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchPageContent());
  	}
}

/// CLEAR FIELDS VALUES ////
function _clearFieldsValues(){
	$('#question').val('');
	tinymce.get('answer').setContent('');
}