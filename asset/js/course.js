$(document).ready(function(){

	var rating_description = ['Sangat Kurang', 'Kurang Baik', 'Cukup Baik', 'Baik', 'Sangat Baik'];

	$('.course-rating').on('click', function () {
        var course_category = $(this).attr("course_category");
        var star = $(this).attr("star");

        var rating_description_id = "#rating-description"+course_category;
        $(rating_description_id).text(rating_description[star-1]);
        for (var i = 1; i <= 5; i++) {
        	var course_id = "#course-rating"+course_category+"-"+i;
        	if (i <= star) {
        		$(course_id).attr('src','img/icon/color_star.svg');
        	} else {
        		$(course_id).attr('src','img/icon/star.svg');
        	}
        }
	});

})



$("#load_course").hide();
function cek_form(form){
    
    if (form.pemateri.value == "0"){

		$(".pemateri_text").remove();
		$(".pemateri_alert").append("<p class='pemateri_text text-danger' >Pilih pemateri</p>");
		form.pemateri.focus();
	
		return (false);
		
	}  else if (!$("input[name='type_course']:checked").val()) {

		$(".type_course_text").remove();
		$(".type_course_alert").append("<p class='type_course_text text-danger' >Pilih Type </p>");
		
		return (false);
		
    } else {

		$("#sv_course").hide();
		$("#load_course").show()
		return (true);
	} 

}	



$("#load_profile").hide();
function cek_form_profile(form){
    
    if (form.gender.value == "0"){

		$(".gender_text").remove();
		$(".gender_alert").append("<p class='gender_text text-danger' >Pilih Gender</p>");
		form.gender.focus();
	
		return (false);
		
    } else {

		$("#sv_course").hide();
		$("#load_course").show()
		return (true);
	} 

}	

$('#gender').on('change', function() {
	$(".gender_text").remove();
	
});



$('#pemateri').on('change', function() {
	$(".pemateri_text").remove();
	
});


function course_img(gambar,idpreview){
    var gb = gambar.files;
            
    for (var i = 0; i < gb.length; i++){
         var gbPreview = gb[i];
         var imageType = /image.*/;
         var preview=document.getElementById(idpreview);            
         var reader = new FileReader();
                
        if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;

                    reader.onload = (function(element) { 
                        return function(e) { 
                            element.src = e.target.result; 
                        }; 
                    })(preview);

                reader.readAsDataURL(gbPreview);
        }else{
                alert("Type file tidak sesuai. Khusus image.");
        }
               
    }    
}