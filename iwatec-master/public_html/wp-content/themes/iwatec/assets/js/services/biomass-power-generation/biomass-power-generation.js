// INTRO
$(function() {
	$(window).load(function() {
		var deco = $('.p-intro-deco-animateDefault');
		var infinite_deco = $('.p-intro-deco-animateInfinite');
		var time = 1100;
		var count = 0;

		var infinite = 0;

		setInterval(function() {
			if(infinite == 0){
			// first loop
				if(count < deco.length){
					deco.eq(count).addClass('is-animate');
					count++;
				}
				else if(count == deco.length){
					infinite_deco.addClass('is-disappear');
					count++;
				}
				else if(count > deco.length){
					infinite = 1;
					infinite_deco.removeClass('is-animate');
					setTimeout(function() {
						infinite_deco.removeClass('is-disappear');
					}, 1000);
					count = 0;
				}
			}
			// second loop
			else{
				if(count < infinite_deco.length){
					infinite_deco.eq(count).addClass('is-animate');
					count++;
				}
				else if(count == infinite_deco.length){
					infinite_deco.addClass('is-disappear');
					count++;
				}
				else if(count > infinite_deco.length){
					infinite_deco.removeClass('is-animate');
					setTimeout(function() {
						infinite_deco.removeClass('is-disappear');
					}, 1000);
					count = 0;
				}
			}

		}, time);
	})
})