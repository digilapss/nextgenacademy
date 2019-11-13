function isNumber() {
	var id = "#" + $(".number-only")[0].id;
  	var input = $(id).val();
  	input = input.replace(/[^0-9]/g,'');
  	$(id).val(input);
}