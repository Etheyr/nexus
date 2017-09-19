$(document).ready(function () {
	$('#myCarousel').carousel({
		interval: 5000
	});

	$('.js-scrollTo').on('click', function() { 
		var page = $(this).attr('href'); 
		var speed = 1000; 
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
});
