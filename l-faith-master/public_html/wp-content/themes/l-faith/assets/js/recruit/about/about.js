$(function() {
	/* pc版タブ切り替え
	---------------------------------------------------------------------------- */
	$('.p-system-pctab li').click(function(){
		var index = $('.p-system-pctab li').index(this);
		$('.p-system-pctab li').removeClass('is-active');
		$(this).addClass('is-active');

		$('.p-system-content-wrap').removeClass('is-show').eq(index).addClass('is-show');
	});

	/* sp版アコーディオン
	---------------------------------------------------------------------------- */
	$('.p-system-sptab').click(function(){
		$(this).siblings('.p-system-content').stop().slideToggle();
		$(this).toggleClass('is-open');
	});


	/* 働く環境
	---------------------------------------------------------------------------- */
	var $slider = $('.p-environment-image-thum').slick({
		slidesToShow: 4,
		dots: false,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 3500,
		speed: 300,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		}],
	});

	$('.p-environment-image-thum').find('.slick-slide').click(function(){
		var index = $(this).data('slick-index');
		$slider.slick('slickGoTo', index);
	});

	$slider.on('beforeChange', function(){
		$('.p-environment-image-main').animate({ 'opacity':'0.1' }, 300);
	});

	$slider.on('afterChange', function(){
		$('.p-environment-image-main').animate({ 'opacity':'1' }, 200);

		var src = $('.slick-current').find('.p-environment-image-item-thum img').attr('src');
		var alt = $('.slick-current').find('.p-environment-image-item-thum img').attr('alt');

		$('.p-environment-image-main').find('img').attr('src', src).attr('alt', alt);
		$('.p-environment-image-main-caption').text(alt);
	});

});