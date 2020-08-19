$(function(){

	/* タブ切り替え
	---------------------------------------------------------------------------- */

	$('.p-area-btn').find('li').click(function(){
		var $btn = $(this).parent().find('li');

		$btn.removeClass('is-active');
		$(this).addClass('is-active');

		var $content = $(this).parent().siblings('.p-head-office-wrap').find('.p-head-office');
		$content.removeClass('is-active');

		var tabindex = $btn.index(this);
		$content.eq(tabindex).addClass('is-active');

		var position = $(this).parent().siblings('.m-mh01').offset().top;
		$('body, html').animate({
			scrollTop: position - $('.l-header').height()
		}, 400, 'swing');
	});

});