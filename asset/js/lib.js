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

function append_component(event, id, preview_id) {
  var id = "#" + id;
  var last_part = "div" + id + ":last";

  var old_id, new_id, new_component;
  if (preview_id != '') {
    var $div = $('img[id^="' + preview_id + '"]:last');
    var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
    old_id = preview_id + '-' + (num - 1);
    new_id = preview_id + '-' + num;
    new_component = replaceAll($(last_part)[0].outerHTML, old_id, new_id);
  } else {
    new_component = $(last_part)[0].outerHTML;
  }

  $($.parseHTML(new_component)).clone().insertAfter(last_part);
  event.preventDefault();
}

function remove_component(event, id) {
  var id = "#" + id;
  var last_part = "div" + id + ":last"
  if ($('div' + id).length > 1) {
    $(last_part).remove();
  }
  event.preventDefault();
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(find, 'g'), replace);
}