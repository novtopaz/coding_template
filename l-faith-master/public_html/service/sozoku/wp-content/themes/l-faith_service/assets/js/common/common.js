/* viewport設定  */
var tb_view = 'width=device-width, initial-scale=0.6';

if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
	$('meta[name="viewport"]').attr('content', tb_view);
}


/* .pagelink ページ内リンクの処理 */
$(function(){


	var headerHeight = $(".l-header").outerHeight();
	var urlHash = location.hash;
	if(urlHash) {
	    setTimeout(function(){
	        var target = $(urlHash);
	        var position = target.offset().top - headerHeight;
	        $('body,html').stop().animate({scrollTop:position}, 0);
	    }, 0);
	}
	// #で始まるアンカーをクリックした場合に処理
	$('a.pagelink[href^="#"]').click(function() {
		// スクロールの速度
		var speed = 400; // ミリ秒
		// アンカーの値取得
		var href = $(this).attr('href');
		// 移動先を取得
		var target = $(href == '#' || href == '' ? 'html' : href);
		// 移動先を数値で取得
		var position = target.offset().top - headerHeight;
		// スムーススクロール
		$('body, html').animate({
			scrollTop:position
		}, speed, 'swing');
		return false;
	});
});


/* .imghover ホバーした時の処理 */
$(function(){
	$('.imghover').on('mouseenter',function(){
		$(this).not(':animated').animate({
			'opacity':'0.7'
		}, 200);
	});
	$('.imghover').on('mouseleave',function(){
		$(this).animate({
			'opacity':'1'
		}, 200);
	});
});


/* .imgchange ホバーした時の処理（画像変更） */
//画像に直接付ける場合
$(function(){
	// Back-Forward Cache 判定
	window.onpageshow = function(event) {
		var persisted = event.persisted;
		if( persisted ){
			$('.imgchange').each(function(){
				$(this).attr('src',$(this).attr('src').replace('_on.jpg','.jpg'));
				$(this).attr('src',$(this).attr('src').replace('_on.gif','.gif'));
				$(this).attr('src',$(this).attr('src').replace('_on.png','.png'));
			});
			console.log('replace');
		}
	};
	$('.imgchange').mouseenter(function(){
		if(!$(this).hasClass('is-active')){
			$(this).attr('src',$(this).attr('src').replace('.jpg','_on.jpg'));
			$(this).attr('src',$(this).attr('src').replace('.gif','_on.gif'));
			$(this).attr('src',$(this).attr('src').replace('.png','_on.png'));
		};
	});
	$('.imgchange').mouseleave(function(){
		if(!$(this).hasClass('is-active')){
			$(this).attr('src',$(this).attr('src').replace('_on.jpg','.jpg'));
			$(this).attr('src',$(this).attr('src').replace('_on.gif','.gif'));
			$(this).attr('src',$(this).attr('src').replace('_on.png','.png'));
		};
	});
});


/* PC・SPで画像切り替え (IE) */
$(function(){
	var $setElem = $('.imgswitch'),
		pcName = '_pc',
		spName = '_sp';

	var userAgent = window.navigator.userAgent.toLowerCase();
	if( userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1 ){
		$setElem.each(function(){
			var $this = $(this);
			function imgSize(){
				if( window.matchMedia('(min-width:768px)').matches ){
					$this.attr('src',$this.attr('src').replace(spName,pcName));
				} else {
					$this.attr('src',$this.attr('src').replace(pcName,spName));
				}
			}
			$(window).resize(function(){imgSize();});
			imgSize();
		});
	}
});

//「tel」を指定したaタグをPCだけ削除する
$(function() {
	var ua = navigator.userAgent;
	if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
		$('.is-tel').each(function(){
			$(this).unwrap();
		});
	}
});

// 高さ統一
$(function(){
	$('.is-matchHeight').matchHeight();
});

// matchHeight PC ONLY
$(function() {
	$(window).load(function() {
		var adjustHeight = function() {
			if($(window).width() > 767){
				setTimeout(function() {
					$('.is-matchHeightPC').matchHeight();
					$('.is-matchHeightPC2').matchHeight();
					$('.is-matchHeightPC3').matchHeight();
				},100);
			} else{
				$('.is-matchHeightPC').css('height', 'auto');
				$('.is-matchHeightPC2').css('height', 'auto');
				$('.is-matchHeightPC3').css('height', 'auto');
			}
		};
		
		adjustHeight();
		$(window).resize(function() {
			adjustHeight();
		})
	})
})

// matchHeight SP ONLY
$(function() {
	$(window).load(function() {
		var adjustHeight = function() {
			if($(window).width() < 768){
				setTimeout(function() {
					$('.is-matchHeightSP').matchHeight();
				},100);
			} else{
				setTimeout(function() {
					$('.is-matchHeightSP').css('height', 'auto');
				},100);
			}
		};
		
		adjustHeight();
		$(window).resize(function() {
			adjustHeight();
		})
	})
})

// PC MEGA NAV
$(function() {
	var menuBtn = $('.l-gnav-list-item-menu');
	var megaNavCover = $('.l-meganav');
	var megaNavContent = $('.l-meganav-content');
	menuBtn.mouseenter(function() {
		resetMenu();
		var position = menuBtn.index($(this));
		megaNavCover.addClass('is-on');
		megaNavContent.eq(position).addClass('is-on');

		megaNavCover.mouseenter(function() {
			resetMenu();
			$(this).addClass('is-on');
			megaNavContent.eq(position).addClass('is-on');
		})

		megaNavCover.mouseleave(function() {
			resetMenu();
		});
		menuBtn.mouseleave(function() {
			resetMenu();
		})
	})


	var resetMenu = function() {
		megaNavCover.removeClass('is-on');
		megaNavContent.removeClass('is-on');
	};
})


// SPハンバーガーメニュー
$(function() {
	$(window).load(function() {
		var btnOpen = $('.l-header-menuBtn-cover');
		var btnClose = $('.l-gnav-btn');
		var menu = $('.l-gnav');
		var btnSubMenu = $('.l-gnav-list-item-menu').find('.l-gnav-list-item-inner');
		var btnSubMenuType2 = $('.l-gnav-list-item-menu-2type-icn');
		var subMenu = $('.l-meganav-listImg');
		var megaNavContent = $('.l-meganav-content');

		btnOpen.click(function() {
			$('body').addClass('is-overlay');
			menu.addClass('is-active');
		})

		btnClose.click(function() {
			$('body').removeClass('is-overlay');
			menu.removeClass('is-active');
		})

		var subMenuMove = function() {
			if($(window).width() < 767){
				// insert submenu to accordion
				btnSubMenu.each(function() {
					var position = btnSubMenu.index($(this));
					$(this).after(subMenu.eq(position));
				})
			}else{
				// move submenu back
				megaNavContent.each(function() {
					btnSubMenu.removeClass('is-active');
					// remove inline css
					subMenu.attr('style', function(i, style)
					{
					    return style && style.replace(/display[^;]+;?/g, '');
					});
					var position = megaNavContent.index($(this));
					$(this).prepend(subMenu.eq(position));
				})
			}
		};
		subMenuMove();

		$(window).resize(function() {
			subMenuMove();
		})


		var btnSubMenuSP = function() {
			btnSubMenu.unbind('click').click(function() {
				if($(window).width() < 767){
					if(!$(this).parent().hasClass('l-gnav-list-item-menu-2type')){
						$(this).toggleClass('is-active');
						$(this).siblings(subMenu).stop(true, false).slideToggle();
						return false;
					}
				}
			})
		};

		btnSubMenuType2.unbind('click').click(function() {
			$(this).toggleClass('is-active');
			$(this).siblings('.l-meganav-listImg').stop(true, false).slideToggle();
		});

		btnSubMenuSP();
		$(window).resize(function() {
			btnSubMenuSP();
		})

		$('body').click(function(e) 
		{
			var notOverlay = $('.l-header-top, .l-gnav-inner');

		    // if the target of the click isn't the menuList nor a descendant of the menuList
		    if (!notOverlay.is(e.target) && notOverlay.has(e.target).length === 0) 
		    {
		    	$('body').removeClass('is-overlay');
		        menu.removeClass('is-active');
		    }
		});
	})
})

// FIXED HEADER
$(function() {
	$(window).load(function() {
		var header = $('.l-header');
		var pageBody = $('body');
		var megaNav = $('.l-gNav');

		var headerBack = function() {
			header.removeClass('is-appeared');
		}

		var headerReset = function() {
			var headerHeight = header.outerHeight();
			header.removeClass('is-fixed');
			megaNav.removeClass('is-fixed');
			pageBody.css('padding-top', 0);
			if($(window).width() > 767){
				pageBody.css('padding-top', 0);
			} else{
				pageBody.css('padding-top', header.outerHeight());
			}
		}

		var headerInitial = function() {
			var headerHeight = header.outerHeight();
			// HEADER PC
			if($(window).width() > 767){
				$(window).scroll(function() {
					if($(window).width() > 767){
						var scrollPosition = $(window).scrollTop();

						if(scrollPosition > headerHeight){
							pageBody.css('padding-top', headerHeight);
							header.addClass('is-fixed');
							megaNav.addClass('is-fixed');
							if(scrollPosition > headerHeight + 200){
								header.addClass('is-appeared');
							}
						}
						if(scrollPosition < headerHeight + 199){
							headerBack();

							if(scrollPosition < headerHeight){
								headerReset();
							}
						}
					}
				});
			}
			else{
				setTimeout(function() {
					headerBack();
					headerReset();
				}, 500);
			}
		}

		headerInitial();
		$(window).resize(function() {
			headerReset();
			headerInitial();
		})
	})
})

// pagetop
$(function() {
	$(window).load(function() {
		var pagetop = $('.l-pagetop');
		var windowHeight = $(window).outerHeight();
		$(window).scroll(function() {
			var scrollPosition = $(window).scrollTop();
			if(scrollPosition > 300){
				pagetop.fadeIn();
			} else{
				pagetop.fadeOut();
			}

			var footerHeight = $('.l-footer').outerHeight();
			var fullHeight = $('html').outerHeight();
			var windowHeight = $(window).outerHeight();


			var stopPosition = fullHeight - footerHeight - windowHeight;
			if (scrollPosition > stopPosition){
				pagetop.addClass('is-stop');
			} else{
				pagetop.removeClass('is-stop');
			}
		})
	})
})

$(function() {
	// SINGLE
	var itemDefault = $('.moveItem-default');
	$(window).scroll(function() {
		itemDefault.each(function() {
			var basePosition = $(this).offset().top;
			var defaultScrollPosition = $(window).scrollTop();
			if (defaultScrollPosition > basePosition - 500) {
				$(this).addClass('is-active');
			}
		})
	})

	// Multiple
	var listDefault = $('.moveItem-defaultList');
	if(listDefault.length > 0){
		$(window).scroll(function() {
			listDefault.each(function() {
				var basePosition = $(this).offset().top;
				var scrollPosition = $(window).scrollTop();
				if (scrollPosition > basePosition - 500) {
					var listDefaultItem = $(this).find('li');
					var delayTime = 0;
					for(var i = 0; i < listDefaultItem.length; i++){
						listDefaultItem.eq(i).delay(delayTime).animate({
							'opacity': 1,
							'bottom': 0
						}, 500);
						delayTime += 400;
					}

				}
			})
		})
	}
})