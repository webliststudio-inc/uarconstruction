function _getActiveStaffPage(props) {
    const { page = "", divid = "", pageContainer = "get_staff_details" } = props;
    _getStaffPagesActiveLink(divid);
    if (page) {
        _getPage({
        page: page,
        pageContainer: pageContainer,
        url: adminPortalMiddlewareUrl,
        });
    }
}
function _getStaffPagesActiveLink(divid) {
    $("#staff_profile_details, #staff_activities").removeClass("active");
    $("#" + divid).addClass("active");
}

//// Filter Staffs ////
function _filtersStaffs(value) {
    $("#staffContent .tb-row").each(function () {
        var text = $(this).text();
        text.toLowerCase().indexOf(value.toLowerCase()) > -1
        ? $(this).show()
        : $(this).hide();
    });
}

//// Get Role Preset Data ////
function _getSelectRole(fieldId) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/settings/roles/fetch-roles`,
      accessKey: true,
		})
        .then((response) => {
            $("#searchList_" + fieldId).html("");
			for (let i = 0; i < response.data.length; i++) {
				const id = response.data[i].roleId;
        const value = response.data[i].roleName;
                
				$("#searchList_" + fieldId).append(`
          <li onclick="
            _clickOption(
              'searchList_${fieldId}',
              '${id}',
              '${value}'
            );
          ">
            ${value}
          </li>
        `);
			}				
		})
		.catch((error) => {
			console.error("Error:", error);
		});
	} catch (error) {
		console.error("Error:", error);
		_actionAlert('An unexpected error occurred. Please try again.', false);
    }
}

///// Create or Update Staff /////
function _createStaff(){
	try {
		////////get all needed values////////////
		let issueCount = 0;
		const fullName = $('#fullName').val();
		const emailAddress = $('#emailAddress').val();
		const mobileNumber = $('#mobileNumber').val();
		const roleId = $('#roleId').val();
		const statusId = $('#statusId').val();

		///// empty field validation//////////
		issueCount += _validateEmptyValue("fullName", "FULL NAME");
		issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
        issueCount += _validateEmail("emailAddress", "EMAIL ADDRESS");
		issueCount += _validateEmptyValue("mobileNumber", "MOBILE NUMBER");
		issueCount += _validateEmptyValue("roleId", "ROLE");
		issueCount += _validateEmptyValue("statusId", "STATUS");

		if (issueCount > 0) return;

		// Gather form data //
		const formData = {
			fullName,
            emailAddress,
            mobileNumber,
            roleId,
            statusId,
		};

		////// confirm action////
		_showCustomConfirm({
            callback: () => {
                _createStaffCallback(formData);
            },
			title: "Are you sure?",
			message: 'Are you sure you want to submit? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createStaff());
	}
}

///// Save Create or Update Role Callback /////
function _createStaffCallback(formData) {

	///// get btn text/////
	const btnText = $("#submitBtn").html();
	_btnDisable("submitBtn", btnText, true);
	
	//// call endpoint //////
	_callRawEndPoints({
		url: `admin/staff/create-staff`,
		formData,
		accessKey: true,
	})
    .then((response) => {
		_showCustomConfirm({
			callback: () => {
				_alertClose();
				_getActivePage({page:'adminPage', divid:'adminPage'});
			},
			title: 'Success!',
			message: response?.message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
		});
		_btnDisable("submitBtn", btnText, false);
    })
    .catch((error) => {
		_staffValidationCheck(error.response);
		console.error("Error:", error);
		if (error.status==0) {
			_callAjaxError(() => _createStaffCallback(formData), error.message); // retry if needed
			_btnDisable("submitBtn", btnText, false);
		} else {
			_showCustomConfirm({
                title: "Unable to Create Staff",
                message: error.message,
                alertType: "warning",
                trueActionBtnText: "OK",
                closeOnOverlayClick: true,
            });
			_btnDisable("submitBtn", btnText, false);
		}
    });
}