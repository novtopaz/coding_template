$(function(){

	//高さを取得
	function height(){
		$('.p-table-line').each(function(){
			var h = $(this).innerHeight();

			$(this).find('.p-line-box').height(h);
		});
	}
	height();

	$(window).resize(function(){
		height();
	});

	$('.is-spplan-btn').on('click',function(){
		$(this).siblings('.is-spplan-content').stop().slideToggle();
		$(this).toggleClass('is-open-spplan');

		height();
	});

	//スクロールアイコン
	new ScrollHint('.is-scrollable', {
			scrollHintIconAppendClass: 'scroll-hint-icon-gray', // white-icon will appear
			applyToParents: true,
			enableOverflowScrolling: true,
			scrollableClass: 'is-scrollable',
			i18n: {
			scrollable: 'スクロールできます'
		}
	});
});