// LOADING
// $(function() {
// 	// $.scrollLock(true);
// 	$(window).load(function(){
// 		setTimeout(function() {
// 			$.when(
// 				$('.l-loading').addClass('is-done')
// 				// $.scrollLock(false)
// 			).done(function(){
// 				var href = location.hash;
// 				var target = $(href == "#" || href == "" ? 'html' : href);
// 				var position = target.offset().top - $('.l-header-inner').height();
// 				// スムーススクロール
// 				if( href ){
// 					$('body,html').animate({scrollTop:position}, 400, 'swing');
// 				}
// 			});
// 		}, 3000);
// 	});
// });


// MV SLIDER
var replaceToActive = function(btn) {
	var sliderImg = btn.find('img');
	var sliderImgSrc = sliderImg.attr('src').replace('_normal', '_active');
	sliderImg.attr('src', sliderImgSrc);
};

var replaceToNormal = function(btn) {
	var sliderImg = btn.find('img');
	var sliderImgSrc = sliderImg.attr('src').replace('_active', '_normal');
	sliderImg.attr('src', sliderImgSrc);
}

$(function() {
	$(window).load(function() {
		var sliderBtn = $('#nav-dots span');
		var sliderLogo = $('.slider-logo-list li');

		var sliderTitle = $('.slider-title-cover');
		sliderTitle.css('display', 'inline-block');

		var isSliderAnimate = (function() {
			sliderBtn.each(function() {
				if( $(this).is(':animated') ) {
					return true;
				}
			})
			return false;
		});

		sliderBtn.mouseenter(function() {
			replaceToActive($(this));
		});

		sliderBtn.mouseleave(function() {
			replaceToNormal($(this));
			var sliderBtnCurrent = $('.nav-dot-current');
			replaceToActive(sliderBtnCurrent);
		});

		sliderBtn.click(function() {
			if(!isSliderAnimate){
				sliderBtn.each(function() {
					replaceToNormal($(this));
				})

				replaceToActive($(this));
				var position = sliderBtn.index($(this));

				sliderLogo.removeClass('logo-current');
				sliderLogo.eq(position).addClass('logo-current');
			}

		})

		setTimeout(function() {
			for (i = 0; i < sliderTitle.length; ++i) {
			  setDelay(i);
			}

			function setDelay(i) {
			  setTimeout(function(){
			    sliderTitle.eq(i).addClass('is-appear');
			  }, 500*i);
			}
		}, 600);

		var Page = (function() {
			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				$navLogo = $('.slider-logo-list li'),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {
						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

						// LOGO
						$navLogo.removeClass('logo-current');
						$navLogo.eq(pos).addClass('logo-current');

						// BUTTON
						$nav.each(function() {
							replaceToNormal($(this));
						})
						replaceToActive($nav.eq( pos ));
					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };
		})();

		Page.init();

		// RELOAD PAGE WHEN NOT FOCUS
		var window_focus = true;

		setInterval(function() {
			$(window).blur(function() {
			    window_focus = false;
			});


			if(!window_focus){
				Page.init();
			}
		}, 1000);
	})
});



// INTRO ANIMATION
$(function() {
	var animateItem = $('.animate-item');
	var gap;
	var delayTime = 0;

	$(window).scroll(function() {
		if($(window).width() > 768){
			gap = 400;
		} else{
			gap = 500;
		}
		animateItem.each(function() {
			var basePosition = $(this).offset().top;
			var defaultScrollPosition = $(window).scrollTop();
			if (defaultScrollPosition > basePosition - gap) {
				$(this).addClass('is-active');
			}
		});

	})
})

// SERVICE ANIMATION
$(function() {
	$(window).load(function() {
		$('.p-service-bio-deco1').css('animation-name', 'walk1');
		$('.p-service-bio-deco2').css('animation-name', 'walk2');
		$('.slider-logo-bio-deco1').css('animation-name', 'walk-mv1');
		$('.slider-logo-bio-deco2').css('animation-name', 'walk-mv2');
		$('.p-service-oversea-deco').css('animation-name', 'airplane');

		setInterval(function() {
		    $('.p-service-bio-deco1').toggleClass('is-turn');
		    $('.p-service-bio-deco2').toggleClass('is-turn');

		    $('.slider-logo-bio-deco1').toggleClass('is-turn');
		    $('.slider-logo-bio-deco2').toggleClass('is-turn');
		}, 3000);

		setInterval(function() {
		    $('.p-service-oversea-deco').toggleClass('is-turn');
		}, 4000);

	});
})


