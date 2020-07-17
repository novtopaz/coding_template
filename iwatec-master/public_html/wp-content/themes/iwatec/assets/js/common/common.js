/* ブレイクポイント
---------------------------------------------------------------------------- */
var is_pc = '(min-width:768px)';
var is_sp = '(max-width:767px)';


/* .is-pagelink ページ内リンクの処理
---------------------------------------------------------------------------- */
var $header = $('.l-header'); // ヘッダー

var hash = location.hash;
if(hash){
	setTimeout(function(){
		var position = $(hash).offset().top  - $header.height() - 20;
		$("html, body").scrollTop(position);
	}, 200);
}

$('.is-pagelink').click(function() {
	var href = $(this).attr('href');
	var target = $(href == '#' || href == '' ? 'html' : href);
	var position = target.offset().top;
	$('body, html').animate({
		scrollTop: position - $header.height() - 20
	}, 400, 'swing');
	return false;
});


/* .is-imghover ホバーした時の処理
---------------------------------------------------------------------------- */
$('.is-imghover').on('mouseenter',function(){
	if( window.matchMedia( is_pc ).matches ){
		$(this).not(':animated').animate({ 'opacity':'0.7' }, 200);
	}
});
$('.is-imghover').on('mouseleave',function(){
	if( window.matchMedia( is_pc ).matches ){
		$(this).animate({ 'opacity':'1' }, 200);
	}
});


/* PC・SPで画像切り替え (IE)
---------------------------------------------------------------------------- */
var $set_elem = $('.is-imgswitch'),
	pc_name = '_pc',
	sp_name = '_sp';

var userAgent = window.navigator.userAgent.toLowerCase();
if( userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1 ){
	$set_elem.each(function(){
		var $this = $(this);
		function img_size(){
			if( window.matchMedia( is_pc ).matches ){
				$this.attr('src',$this.attr('src').replace(sp_name,pc_name));
			} else {
				$this.attr('src',$this.attr('src').replace(pc_name,sp_name));
			}
		}
		$(window).resize(function(){img_size();});
		img_size();
	});
}


/* 「is-tel」を指定したaタグをPCだけ削除する
---------------------------------------------------------------------------- */
var ua = navigator.userAgent;
if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
	$('.is-tel').each(function(){
		$(this).unwrap();
	});
}


/* pagetopボタンの挙動
---------------------------------------------------------------------------- */
var $pagetop = $('.l-pagetop');
$pagetop.hide();

$(window).scroll(function () {
	if ( $(this).scrollTop() > $(window).height()/2 ) {
		$pagetop.fadeIn();
	} else {
		$pagetop.fadeOut();
	}
});

$('.l-pagetop a').click(function() {
	$('.l-header').removeClass('is-appear');
})

// フッターに固定
$(window).scroll(function(e){
	var bottomY = 80, //スクロール時の下からの位置
		$window = $(e.currentTarget),
		height = $window.height(), //ウィンドウ(ブラウザ)の高さ
		scroll_top = $window.scrollTop(), //スクロール量
		document_height = $(document).height(), //ページ全体の高さ
		footer_height = $('.l-footer').outerHeight(); //フッタの高さ
		bottom_height = footer_height + height + scroll_top + bottomY - document_height;
	if( scroll_top >= document_height - height - footer_height + bottomY ){
		$pagetop.addClass('is-fix');
	}else{
		$pagetop.removeClass('is-fix');
	}
});


// matchHeight PC ONLY
$(window).load(function() {
	var adjustHeight = function() {
		$('.is-matchHeight').matchHeight();
	};

	var adjustHeightPC = function() {
		if($(window).width() > 767){
			setTimeout(function() {
				$('.is-matchHeightPC').matchHeight();
				$('.is-matchHeightPC2').matchHeight();
			},100);
		} else{
			$('.is-matchHeightPC').css('height', 'auto');
		}
	};
	
	// matchHeight SP ONLY
	var adjustHeightSP = function() {
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
	
	adjustHeightPC();
	adjustHeightSP();
	$(window).resize(function() {
		adjustHeightPC();
		adjustHeightSP();
	})

	/* FONTSIZE SELECT */
	var btnNormal = $('.l-header-control-fontsize-normal');
	var btnLarge = $('.l-header-control-fontsize-large');

	btnLarge.click(function () {
		$(this).addClass('is-active');
		$('html').css('font-size', '67%');
		btnNormal.removeClass('is-active');
		
		adjustHeight();
		adjustHeightPC();
	})

	btnNormal.click(function() {
		$(this).addClass('is-active');
		$('html').css('font-size', '62.5%');
		btnLarge.removeClass('is-active');
		
		adjustHeight();
		adjustHeightPC();
	});
})






/* PC MENU */
$(function() {
	var header = $('.l-header');
	var is_top = header.hasClass('is-top') ? true : false;
	var menuBtn = $('.l-header-menu-btn');
	var menuContent = $('.l-gnav');

	var activeMenu = function() {
		menuContent.addClass('is-active');
		menuBtn.addClass('is-active');
	};

	var deactiveMenu = function() {
		menuContent.removeClass('is-active');
		menuBtn.removeClass('is-active');
	}

	menuBtn.mouseenter(function() {
		activeMenu();
	});

	menuContent.mouseenter(function() {
		activeMenu();
	});

	menuBtn.mouseleave(function() {
		deactiveMenu();
	});

	menuContent.mouseleave(function() {
		deactiveMenu();
	});


	var fixMenu = function() {
		header.addClass('is-fix');
		if(!is_top){
			var headerHeight = header.outerHeight();
			$('body').css('margin-top', headerHeight);
		}
	};

	var unfixMenu = function() {
		header.removeClass('is-fix');
		if(!is_top){
			$('body').css('margin-top', 0);
		}
	}

	var appearMenu = function() {
		header.addClass('is-appear');
	};

	var disappearMenu = function() {
		header.removeClass('is-appear');
	};

	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    var headerHeight = header.outerHeight();
	    if(scroll > headerHeight){
	    	fixMenu();
			if(scroll > headerHeight + 100){
				appearMenu();
			} else{
				disappearMenu();
			}
	    } else{
	    	unfixMenu();
	    }
	});



})

/* SP MENU */
$(function() {
	var menuBtnOpen = $('.l-header-menu-btnSP');
	var menuBtnClose = $('.l-header-menu-btnSP-close');
	var menuContent = $('.l-header-content');

	menuBtnOpen.click(function() {
		menuContent.addClass('is-appear');
	});

	menuBtnClose.click(function() {
		menuContent.removeClass('is-appear');
	})

	// ACCORDION MENU
	var menuItem = $('.l-gnav-list li');
	var subMenu = $('.l-header-menu-subMenu');
	var setMenu = function() {
		menuItem.each(function() {
			var href = $(this).find('a').attr('href');
			var text = $(this).find('.l-gnav-list-txt').html();
			var item = '<li><a href="'+ href +'">'+ text +'</a></li>';

			subMenu.append(item);
		})
	};

	setMenu();

	var accordionBtn = $('.l-header-menu-btn-accordion');

	accordionBtn.unbind('click').click(function() {
		$(this).toggleClass('is-active');
		subMenu.slideToggle();
	})
})


// SIDENAV
$(function() {
	$(window).load(function() {
		var topLayoutHeight = 0;
		var sideNav = $('.l-sidenav');
		var contentHeight = $('#sidenav-content').outerHeight();

		var anchorItem = $('.l-sidenav-item');
		
		var anchorMega = $('.l-anchorMega');
		var linkMega = $('.l-linkMega');

		var anchor = $('.l-anchor');
		var link = $('.l-link');

		var updateTopLayoutHeight = function() {
			var headerHeight = $('.l-header').outerHeight();
			var mvHeight = $('.m-mv').outerHeight();
			var breadcrumbHeight = $('.l-breadcrumbs').outerHeight();
			topLayoutHeight = headerHeight + mvHeight + breadcrumbHeight;
		};

		var fixSideNav = function(topPosition) {
			topPosition += 20;
			sideNav.css('top', topPosition);
			sideNav.css('bottom', 'auto');
			sideNav.addClass('is-fix');
		};

		var unfixSideNav = function() {
			sideNav.css('top', 0);
			sideNav.removeClass('is-fix');
		};

		var stopSideNav = function() {
			sideNav.css('top', 'auto');
			sideNav.css('bottom', 0);
			sideNav.removeClass('is-fix');
		};

		// ADJUST SIDENAV POSITION
		var adjustSideNavPosition = function() {
			var scroll = $(window).scrollTop();
		    if(scroll > topLayoutHeight){
				var headerHeight = $('.l-header').outerHeight();
		    	fixSideNav(headerHeight);
		    	var sideNavHeight = sideNav.outerHeight();
		    	var fullLayoutHeight = topLayoutHeight + contentHeight - sideNavHeight - 20;
		    	if(scroll > fullLayoutHeight){
		    		stopSideNav();
		    	}
		    } else{
		    	unfixSideNav();
		    }
		};

		// ADJUST SIDENAV ANCHOR LINK
		var	gap = 200;
		var getCurrentLink = function(anchor, link, gap) {
			var positionArray = [];
			anchor.each(function() {
				var basePosition = $(this).offset().top;
				var defaultScrollPosition = $(window).scrollTop();
				if (defaultScrollPosition > basePosition - gap) {
					var position = anchor.index($(this));
					positionArray.push(position);

					var currentPosition = positionArray[positionArray.length-1];

					link.removeClass('is-current');
					link.eq(currentPosition).addClass('is-current');
				}
			});
		}

		// SYNCHRONIZE CHILD WITH MEGA (LINK)
		var synchronizeLink = function() {
			if(anchorItem.length > 0){
				anchorItem.each(function() {
					var current_child = $(this).find('.l-link');

					if(current_child.hasClass('is-current')){
						var current_parent = $(this).find('.l-linkMega');
						if(!current_parent.hasClass('is-current')){
							current_child.removeClass('is-current');
						}
					}
				})
			}
		};

		$(window).load(function() {
			updateTopLayoutHeight();
		});
		$(window).scroll(function () {
			if( window.matchMedia( is_pc ).matches ){
				updateTopLayoutHeight();
				adjustSideNavPosition();
				getCurrentLink(anchor, link, gap);
				getCurrentLink(anchorMega, linkMega, gap);
				synchronizeLink();
			}
		});
	});
})

/*SERVICE LINK*/
$(function() {
	var linkItem = $('.m-serviceLink li');
	var siteurl = window.location.href;

	linkItem.each(function() {
		var url = $(this).find('a').attr('href');
		if(url == siteurl){
			$(this).remove();
		}
	})
})


// ANIMATION DEFAULT
$(function() {
	var animateItem = $('.animate-default');
	var animateItemOrderCover = $('.animate-default-orderCover');
	var animateItemOrder = $('.animate-default-order');
	var gap = 500;
	var gapTime = 500;

	var appear = function(item) {
		item.each(function() {
			var basePosition = $(this).offset().top;
			var defaultScrollPosition = $(window).scrollTop();
			if (defaultScrollPosition > basePosition - gap) {
				$(this).addClass('is-active');
			}
		});
	};

	$(window).scroll(function() {
		appear(animateItem);

		if( window.matchMedia( is_pc ).matches ){
			animateItemOrderCover.each(function() {
				var basePosition = $(this).offset().top;
				var defaultScrollPosition = $(window).scrollTop();
				if (defaultScrollPosition > basePosition - gap) {
					var item = $(this).find('.animate-default-order');
					var delayTime = 0;

					item.each(function() {
						var $this = $(this);
						setTimeout(function() {
							$this.addClass('is-active');
						}, delayTime);
						delayTime += gapTime;
					})
				}
			});
		}
		else{
			appear(animateItemOrder);
		}


	})
})

// GIF HOVER
$(function() {
	var area = $('.m-hover-area li');
	var comment = $('.m-hover-comment li')

	area.mouseenter(function() {
		var position = area.index($(this));
		comment.eq(position).addClass('is-active');
	});

	area.mouseleave(function() {
		comment.removeClass('is-active');
	})
})


// 追従ヘッダー横スクロール
$(function(){
  $(window).on("scroll", function(){
      $(".l-header.is-fix").css("left", -$(window).scrollLeft());
  });
});