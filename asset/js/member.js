$(document).ready(function(){
    
    $('#password_confirm_member_baru').on('input', function() {

		if($(this).val() === $('#password_confirm_member').val() ){
			
			$(".password_alert_new")
			.text("Password Cocok")
			.css('color', 'green');
			// removeClass
			$('#sv_news_password').removeClass('disable')

		} else {

			$(".password_alert_new")
			.text("Password Tidak Cocok")
			.css('color', 'red');
			$('#sv_news_password').addClass('disable')
		}
        
	});
	
    $('#password_confirm_member').on('input', function() {

		if($(this).val() === $('#password_confirm_member_baru').val() ){
			
			$(".password_alert_new")
			.text("Password Cocok")
			.css('color', 'green');
			// removeClass
			$('#sv_news_password').removeClass('disable')
			
		} else {

			$(".password_alert_new")
			.text("Password Tidak Cocok")
			.css('color', 'red');
		}
        
    });

    $('#gender').on('change', function() {
        $(".gender_text").remove();
        
    });
    $("#load_profile").hide();
})

function cek_form_profile(form){
    
    if (form.gender.value === "0"){

		$(".gender_text").remove();
		$(".gender_alert").append("<p class='gender_text text-danger' >Pilih Gender</p>");
		form.gender.focus();
	
		return (false);
		
    } else {

		$("#sv_profile").hide();
		$("#load_profile").show()
		return (true);
	} 

}