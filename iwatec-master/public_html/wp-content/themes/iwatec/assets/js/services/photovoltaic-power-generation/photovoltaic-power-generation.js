// EMS表示
$(function() {
	$(window).load(function() {
		var deco_cover_overlay = $('.p-ems-deco-cover-overlay');
		var deco_cover = $('.p-ems-deco-cover');
		var deco_inner = $('.p-ems-deco-inner');
		var timeout = 1200;
		var timeout_inner = 800;
		var count_cover = 0;
		var count_inner = 0;

		var animate_loop = function(item, count) {
			if(count < item.length){
				item.eq(count).addClass('is-active');
				count++;
			} else{
				count = 0;
				item.removeClass('is-active');
			}
		};

		setInterval(function() {
			// COVER APPEAR
			if(count_cover < deco_cover.length){
				deco_cover_overlay.addClass('is-transition');
				deco_cover.eq(count_cover).addClass('is-active');

				for (i = 0; i < deco_inner.length; ++i) {
				  display_deco_inner(i);
				}

				function display_deco_inner(i) {
				  setTimeout(function(){
				    deco_inner.eq(i).addClass('is-active');
				  }, timeout_inner*i);
				}

				count_cover++;
			}
			// COVER ROTATE
			else if(count_cover == deco_cover.length){
				deco_cover_overlay.addClass('is-rotate');
				count_cover++;
			}
			// WAIT COVER ROTATE COMPLETE
			else if(count_cover == deco_cover.length + 1){
				count_cover++;
			}
			// REST
			else if(count_cover == deco_cover.length + 2){
				deco_cover_overlay.removeClass('is-transition');
				count_cover++;
			}
			// RESET ALL
			else if(count_cover == deco_cover.length + 3){
				deco_inner.removeClass('is-active');
				deco_cover.removeClass('is-active');
				setTimeout(function() {
					deco_cover_overlay.removeClass('is-rotate');
				}, 800);
				count_cover++;
			}
			// LOOP
			else{
				count_cover = 0;
			}
		}, timeout);
	})
})

document.getElementById('solar-self').play();