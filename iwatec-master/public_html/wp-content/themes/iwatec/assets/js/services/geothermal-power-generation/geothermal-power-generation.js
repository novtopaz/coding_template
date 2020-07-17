
// THROWN ANIMATE
$(function() {
	var block = $('.p-intro-thrown-block');
	var deco = $('.p-intro-deco');

	var time_main_start = 3000;

	var count = 0;

	setInterval(function() {
		// MOVE TO NEXT BLOCK
		if(count < block.length){
			block.removeClass('is-appear');
			deco.removeClass('is-animate')

			var this_block = block.eq(count);
			var this_deco = this_block.find(deco);

			this_block.addClass('is-appear');
				this_deco.addClass('is-animate');

			count++;
		}
		
		// BACK TO FIRST
		else{
			count = 0;
		}
	}, time_main_start)	
})


// THROWN ANIMATE
$(function() {
	var block = $('.p-intro-hotspring-block');

	var time_main_start = 3000;

	var count = 0;

	setInterval(function() {
		if(count < block.length){
			block.removeClass('is-appear');

			block.eq(count).addClass('is-appear');
			count++;
		}
		
		// BACK TO FIRST
		else{
			count = 0;
		}

	}, time_main_start)
	
})