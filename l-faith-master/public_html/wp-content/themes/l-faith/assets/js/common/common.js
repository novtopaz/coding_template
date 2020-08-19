/* viewport設定
---------------------------------------------------------------------------- */
var tb_view = 'width=device-width, initial-scale=0.6';

if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
	document.querySelector('meta[name="viewport"]').setAttribute('content', tb_view);
}


$(function(){

	/* .pagelink ページ内リンクの処理
	---------------------------------------------------------------------------- */
	var hash = location.hash;
	if(hash){
		setTimeout(function(){
			var position = $(hash).offset().top  - $('.l-header').height() - 20;
			$("html, body").scrollTop(position);
		}, 200);
	}

	$('a[href^="#"]').click(function() {
		var href = $(this).attr('href');
		var target = $(href == '#' || href == '' ? 'html' : href);
		var position = target.offset().top;
		$('body, html').animate({
			scrollTop: position - $('.l-header').height() - 20
		}, 400, 'swing');
		return false;
	});


	/* .imghover ホバーした時の処理
	---------------------------------------------------------------------------- */
	$('.imghover').on('mouseenter',function(){
		if( window.matchMedia('(min-width:768px)').matches ){
			$(this).not(':animated').animate({ 'opacity':'0.7' }, 200);
		}
	});
	$('.imghover').on('mouseleave',function(){
		if( window.matchMedia('(min-width:768px)').matches ){
			$(this).animate({ 'opacity':'1' }, 200);
		}
	});


	/* PC・SPで画像切り替え (IE)
	---------------------------------------------------------------------------- */
	var $setElem = $('.switch'),
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


	/* 「tel」を指定したaタグをPCだけ削除する
	---------------------------------------------------------------------------- */
	var ua = navigator.userAgent;
	if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
		$('.is-tel').each(function(){
			$(this).unwrap();
		});
	}


	/* pagetopボタンの挙動
	---------------------------------------------------------------------------- */
	var topBtn = $('.l-pagetop');
	topBtn.hide();

	$(window).scroll(function () {
		if ( $(this).scrollTop() > $(window).height()/2 ) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});

	// フッターに固定
	$(window).scroll(function(e){
		var bottomY = 80, //スクロール時の下からの位置
			$window = $(e.currentTarget),
			height = $window.height(), //ウィンドウ(ブラウザ)の高さ
			scrollTop = $window.scrollTop(), //スクロール量
			documentHeight = $(document).height(), //ページ全体の高さ
			footerHeight = $('.l-footer').outerHeight(); //フッタの高さ
			bottomHeight = footerHeight + height + scrollTop + bottomY - documentHeight;
		if(scrollTop >= documentHeight - height - footerHeight + bottomY){
			topBtn.addClass('is-fix');
		}else{
			topBtn.removeClass('is-fix');
		}
	});


	/* ナビのカレント
	---------------------------------------------------------------------------- */
	var url = location.pathname.split("/")[1];
	var url2 = location.pathname.split("/")[2];
	var navList = $(".l-gnav > li > a");

	navList.each(function(){
		var href = $(this).attr("href").split("/")[1];

		if( href == url ) {
			$(this).addClass("is-current");
		};
	});


	/* SPナビ
	---------------------------------------------------------------------------- */
	var $spnav = $('.l-gnav-wrap');

	$('.l-nav-btn').on('click', function(event) {
		event.preventDefault();

		$(this).toggleClass('is-active');
		$spnav.stop().slideToggle(250, 'swing');
		if( $(this).hasClass('is-active') ){
			$(this).find('span').text('CLOSE');
		} else {
			$(this).find('span').text('MENU');
		}
	});

	var isNavheight = function(){
		var navHeight = $(window).height() - $('.l-header').outerHeight();
		$spnav.css('height', navHeight);
	}
	$(window).load(function(){
		if( window.matchMedia('(min-width:768px)').matches ){
			$spnav.css('height','auto');
		} else {
			isNavheight();
		}
	});
	$(window).resize(function(){
		if( window.matchMedia('(min-width:768px)').matches ){
			$spnav.show().addClass('is-resize');
			$spnav.css('height','auto');
		} else {
			if( $spnav.hasClass('is-resize') ){
				$spnav.hide().removeClass('is-resize');
				$('.l-nav-btn').removeClass('is-active');
				isNavheight();
			}
		}
	});


	/* 高さ統一
	---------------------------------------------------------------------------- */
	$('.is-matchHeight').matchHeight();
	$('.is-matchHeight02').matchHeight();

});