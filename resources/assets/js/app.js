$(document).ready(function () {
	$('#myCarousel').carousel({
		interval: 4000
	});

	$('.js-scrollTo').on('click', function() { 
		var page = $(this).attr('href'); 
		var speed = 1000; 
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});

	$('#btn1').click(function () {
		
		$('body').css('background-color','#2f2f2f');
		$('#colorMenu').css('background-color','white');
		$('a').css('color','#2f2f2f');

	});
	$('#btn2').click(function () {
		
		$('body').css('background-color','white');
		$('#colorMenu').css('background-color','#2f2f2f');
		$('a').css('color','white');
	});
});
