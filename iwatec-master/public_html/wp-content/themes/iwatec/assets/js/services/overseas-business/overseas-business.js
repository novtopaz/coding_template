/* ブレイクポイント
---------------------------------------------------------------------------- */
var is_pc = '(min-width:768px)';
var is_sp = '(max-width:767px)';


// マップ表示
// $(function() {
// 	$(window).load(function() {
// 		var countries = $('.p-map-item');
// 		var time = 3500;
// 		var count = 1;
// 		var displayGif = function(count) {
// 			var img = countries.eq(count).find('img');
// 			var src = img.attr('src');
// 			img.attr('src', '');
// 			setTimeout(function() {
// 		        img.attr('src', src);
// 		    }, 10);
// 			countries.eq(count).addClass('is-active');
// 		}

// 		displayGif(0);

// 	    setInterval(function() {
// 			if(count >= countries.length){
// 				countries.removeClass('is-active');
// 				count = 0;
// 			}
// 			displayGif(count);
// 			count++;
// 		}, time);
// 	})
// })

document.getElementById('map').play();

// コメント移動
$(function() {
	var comment = $('.p-step-desc-comment');

	var moveComment = function() {
		comment.each(function() {
			var parent = $(this).parent();

			var top = parent.position().top;
			$(this).css('top', top);
		})
	};

	var resetComment = function() {
		comment.each(function() {
			$(this).css('top', 'auto');
		})
	};

	var adjustComment = function() {
		if( window.matchMedia( is_pc ).matches ){
			moveComment();
		} else{
			resetComment();
		}
	};

	adjustComment();
	$(window).resize(function() {
		adjustComment();
	})
})