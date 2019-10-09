$(document).ready(function(){

	var rating_description = ['Sangat Kurang', 'Kurang Baik', 'Cukup Baik', 'Baik', 'Sangat Baik'];

	$('.course-rating').on('click', function () {
        var course_category = $(this).attr("course_category");
        var star = $(this).attr("star");

        var rating_description_id = "#rating-description"+course_category;
        $(rating_description_id).text(rating_description[star-1]);
        for (var i = 1; i <=5; i++) {
        	var course_id = "#course-rating"+course_category+"-"+i;
        	if (i <= star) {
        		$(course_id).attr('src','img/icon/color_star.svg');
        	} else {
        		$(course_id).attr('src','img/icon/star.svg');
        	}
        }
    });
})