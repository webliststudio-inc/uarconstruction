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

function _filtersStaffs(value) {
  $("#staffContent .tb-row").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}

function formatDate(date) {
  if (!date) return "";
  const parts = date.split("-"); // Convert "1990-05-20" to ["1990", "05", "20"]
  return `${parts[2]}/${parts[1]}/${parts[0]}`; // Output: "20/05/1990"
}
