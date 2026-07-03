$(function () {
	blogPicturePreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blogPixPreview').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});


/// Create And Update Blog ////
function _createAndUpdateBlog(){
	let useEachBlogSession = JSON.parse(sessionStorage.getItem("useEachBlogSession"));
	try {
		////////get all needed values////////////
		let issueCount = 0;
		const blogCatId = $('#categoryId').val().trim();
		const blogTitle = $('#blogTitle').val().trim();
		const blogPix = $("#blogPix").prop("files")[0];
        const statusId = $('#statusId').val().trim();
		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("categoryId", "BLOG CATEGORY");
		issueCount += _validateEmptyValue("blogTitle", "BLOG TITLE");
		issueCount += _validateEmptyValue("statusId", "STATUS");

		if (!useEachBlogSession){
			if (!blogPix) {
				$("#issues_blogPix").html("BLOG PICTURE IS REQUIRED").fadeIn();
				$("#issueBorder").addClass("issue-border");
				issueCount ++
			} else {
				$("#issues_blogPix").html("");
				$("#issueBorder").removeClass("issue-border");
			}
		}

		if (issueCount > 0) return;

		/////Gather form data////
		const formData = new FormData();
		formData.append("blogTitle", blogTitle);
		formData.append("blogCatId", blogCatId);
		formData.append("statusId", statusId);

		if (blogPix) {
			formData.append("blogPix", blogPix);
		}

		////// confirm action////
		_showCustomConfirm({
		callback: () => {
			_saveCreateAndUpdateBlogCallback(formData);
		},
			title: "Are you sure?",
			message: 'Are you sure you want to save? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createAndUpdateBlog());
	}
}

/// Save Create And Update Blog CallBack ///
function _saveCreateAndUpdateBlogCallback(formData) {
    let useEachBlogSession = JSON.parse(sessionStorage.getItem("useEachBlogSession"));
	///// get btn text/////
	const btnText = $("#submitBtn").html();
	_btnDisable("submitBtn", btnText, true);
	
    let callUrl= useEachBlogSession?.blogId ? `admin/publish/blog/update-blog?pageCategoryId=${pageCategory.blog}&blogId=${useEachBlogSession?.blogId}` : `admin/publish/blog/create-blog?pageCategoryId=${pageCategory.blog}`;

	//// call endpoint //////
	_callFileEndPoints({
		url: callUrl,
		formData,
		accessKey: true,
	})
    .then((response) => {
		const message = response.message;
		const newBlogPix = response.newBlogPix;
		const oldBlogPix = response.oldBlogPix;
		
		_uploadBlogPix(newBlogPix, oldBlogPix, message);
		_btnDisable("submitBtn", btnText, false);
    })
    .catch((error) => {
		_staffValidationCheck(error.response);
		console.error("Error:", error);
		if (error.status==0) {
			_callAjaxError(() => _saveCreateAndUpdateBlogCallback(formData), error.message); // retry if needed
			_btnDisable("submitBtn", btnText, false);
		} else {
			_actionAlert(error.message, false);
			_btnDisable("submitBtn", btnText, false);
		}
    });
}

/// Upload Blog Picture ///
function _uploadBlogPix(newBlogPix, oldBlogPix, message) {
    var blogPix = document.getElementById("blogPixPreview").src;

	// Only proceed if it's a NEW image (base64)
    if (!blogPix.startsWith("data:image")) {
        _showCustomConfirm({
            callback: () => {
                _alertClose();
                _getActivePage({page:'blogPage', divid:'blogPage'});
            },
            title: 'Success!',
            message: message,
            alertType: 'success',
            trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
        });
        return;
    }

    const formData = new FormData();
    formData.append("action", "uploadBlogPix");
    formData.append("newBlogPix", newBlogPix);
    formData.append("oldBlogPix", oldBlogPix);
    formData.append("blogPix", blogPix);

    _callFileEndPoints({
		url: adminPortalLocalUrl,
		formData,
		expectJson: false,
	})
	.then(() => {
		_showCustomConfirm({
            callback: () => {
                _alertClose();
                _getActivePage({page:'blogPage', divid:'blogPage'});
            },
            title: 'Success!',
            message: message,
            alertType: 'success',
            trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
        });
	})
    .catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _uploadBlogPix(newBlogPix, oldBlogPix, message), error.message);
    });
}

/// Fetch Blog Data ///
function _fetchBlogData() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/publish/blog/fetch-blog`,
			accessKey: true,
		})
		.then((response) => {
            _initFetchBlogData(response.data);
		 })
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: "#blogPageContent",
					message: "Check your internet connection and try again",
					colspan: 20,
					paginationContainer: "#blogContentPaginationControls",
				});
				_callAjaxError(() => _fetchBlogData(), error.message); // retry if needed
			} else {
				_showEmptyState({
					container: "#blogPageContent",
					message: error.message,
					colspan: 20,
					button: `
						<button class="btn" title="ADD NEW BLOG" onclick="sessionStorage.removeItem('useEachBlogSession'); _getForm({page: 'blogReg', url: adminPortalLocalUrl});">
							<i class="bi-plus-square"></i> ADD NEW BLOG
						</button>
					`,
					paginationContainer: "#blogContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchBlogData());
  	}
}

/// Initialize Blog Data ///
function _renderBlogData(data) {
  return data.map((item) => `
  	<div class="grid-div">
		<div class="btn-div">
			<button class="btn active-btn" onclick="_fetchEachBlog('${item.blogId}', 'edit');">EDIT</button>
			<button class="btn" onclick="_fetchEachBlog('${item.blogId}', 'page');">EDIT PAGE DETAILS</button>
		</div>

		<div class="status-div ${item.statusData?.statusName}">${item.statusData?.statusName}</div>
		<div class="img-div">
			<img src="${blogPixPath}/${item.blogPix}" alt="${item.blogTitle}" />
		</div>

		<div class="text-div">
			<div class="text-in">
				<div class="text">UPDATED ON: <span>${_formatDate(item.updatedTime)}</span></div>
			</div>
			<h2>${item.blogTitle}</h2>
			<p>${item.blogDescription}</p>  
			<div class="bottom-content">
				<div class="category"><span>${item.blogCatData?.categoryName}</span></div>
			</div>
		</div>
	</div>`).join("");
}

function _initFetchBlogData(data) {
  const paginator = new Paginator(
    data,
    _renderBlogData,
    "blogContentPaginationControls",
    "blogPageContent",
    10
  );
  __paginatorHandlers["blogContentPaginationControls"] = paginator;
  paginator.renderPage();
}

function _filtersBlog(value) {
  $("#blogPageContent .grid-div").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}

/// Fetch Each Blog ///
function _fetchEachBlog(blogId, action) {
    $("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/publish/blog/fetch-blog?blogId=${blogId}`,
			accessKey: true,
		})
		.then((response) => {
			const blogId = response?.data[0]?.blogId;
			const pageCategoryId = response?.data[0]?.pageCategoryId;
			sessionStorage.setItem("useEachBlogSession", JSON.stringify(response?.data[0]));

			sessionStorage.setItem("publishData", JSON.stringify({
				id: blogId,
				category: pageCategoryId
			}));
			
			_getForm({page: action==='edit' ? 'blogReg' : 'editPagesForm', 
				pageCategory: pageCategoryId, 
				url: adminPortalMiddlewareUrl
			});
		 })
		.catch((error) => {
			_staffValidationCheck(error.response);
			_alertClose();
			console.error("Error:", error);
			_callAjaxError(() => _fetchEachBlog(blogId, action), error.message); // retry if needed
		});
	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _fetchEachBlog(blogId, action));
  	}
}