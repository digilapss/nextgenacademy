function numberOnly(key) {
	id = "#"+key;
  	var input = $(id).val();
  	input = input.replace(/[^0-9]/g,'');
  	$(id).val(input);
}

function openTab(id) {
  $(".tabcontent").addClass("hide");
  $(".tablinks").removeClass("primary");
  $(".tablinks").addClass("primary-border");

  tabcontentId = "#" + id;
  tablinksId = "#tab-" + id;
  $(tabcontentId).removeClass("hide");
  $(tablinksId).addClass("primary");
  $(tablinksId).removeClass("primary-border");
}