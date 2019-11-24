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

function append_component(event, id) {
  var id = "#" + id;
  var last_part = "div" + id + ":last"
  $(id).clone().insertAfter(last_part);
  event.preventDefault();
}

function remove_component(event, id) {
  var id = "#" + id;
  if ($('div' + id).length > 1) {
    $(id + ':last').remove();
  }
  event.preventDefault();
}