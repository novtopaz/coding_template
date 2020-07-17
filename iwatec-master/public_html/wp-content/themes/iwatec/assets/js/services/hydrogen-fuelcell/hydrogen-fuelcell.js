$(function() {
	var animate_item = $('.p-future-animateItem');
	var deco = $('.p-future-deco');
	var bubble = $('.p-future-deco-bubble');
	var bounce = bubble.attr('data-bounce');

	var time_main_start = 3200;
	var time_animate_start = 1000;
	var time_disappear_start = 2500;

	var count = 0;

	var add_class_water_turn = function(water, turn) {
		var turn_count = 1;

		// CALCULATE TURN TIME
		var time_water_turn = (time_disappear_start - time_animate_start) / turn;

		setInterval(function() {
			if(turn_count <= turn){
				var turn_class = 'is-turn0' + turn_count;
				water.addClass(turn_class);
				turn_count++;
			} 
		}, time_water_turn);
	};

	var remove_class_water_turn = function(water, turn) {
		for (var i = 1; i <= turn; i++) {
			var turn_class = 'is-turn0' + i;
			water.removeClass(turn_class);
		}
	};

	setInterval(function() {
		bubble.css('animation-name', '');
		if(count < animate_item.length){
			var $this = animate_item.eq(count);
			var $this_deco = $this.find(deco);

			// APPEAR
			$this.addClass('is-appear');

			// ANIMATE
			setTimeout(function() {
				$this.addClass('is-animate');
			}, time_animate_start);

			// BOUNCE ANIMATE
			if(bounce > count){
				setTimeout(function() {
					bubble.css('animation-name', 'bounce');
				}, time_disappear_start);
			}

			// TURN ANIMATE
			$this_deco.each(function() {
				var turn = $(this).attr('data-turn');
				if(turn > 0){
					add_class_water_turn($(this), turn);
				}
			})

			// DISAPPEAR
			setTimeout(function() {
				$this.removeClass('is-appear');
			}, time_disappear_start)
			count++;
		}
		
		else{
			deco.removeClass('is-appear');

			setTimeout(function() {
				animate_item.removeClass('is-animate');
			}, 500);

			deco.each(function() {
				var turn = $(this).attr('data-turn');
				if(turn > 0){
					remove_class_water_turn($(this), turn);
				}
			})
			count = 0;
		}
	}, time_main_start);
})