jQuery(document).ready(function () {

	/*------------------------------------------------
	# SMOOTH SCROLLING
	------------------------------------------------*/
	
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 100
		}, 500);
	});


	objectFitVideos();
	
});

