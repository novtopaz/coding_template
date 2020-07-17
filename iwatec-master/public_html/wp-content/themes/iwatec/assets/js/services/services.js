// SERVICE ANIMATION
$(function() {
	$(window).load(function() {
		$('.p-bio-deco1').css('animation-name', 'walk01');
		$('.p-bio-deco2').css('animation-name', 'walk02');
		setInterval(function() {
		    $('.p-bio-deco1').toggleClass('is-turn');
		    $('.p-bio-deco2').toggleClass('is-turn');
		}, 3000);

		$('.p-geotherma-deco2').css('animation-name', 'smoke02');
		$('.p-geotherma-deco3').css('animation-name', 'smoke03');

		$('.p-geotherma-deco2').toggleClass('is-float');
		$('.p-geotherma-deco3').toggleClass('is-float');

		setInterval(function() {
		    $('.p-geotherma-deco2').toggleClass('is-float');
		    $('.p-geotherma-deco3').toggleClass('is-float');
		}, 1990);
	})
})