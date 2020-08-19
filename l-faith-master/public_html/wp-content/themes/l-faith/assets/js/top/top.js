$(function(){

	/* ヘッダー
	---------------------------------------------------------------------------- */
	$(window).scroll(function(){
		if( $(this).scrollTop() == 0 ){
			$('.l-header').addClass('is-fv');
			$('.l-logo').find('img').attr('src',$('.l-logo').find('img').attr('src').replace('img_logo.png','img_logo_white.png'));
		} else {
			$('.l-header').removeClass('is-fv');
			$('.l-logo').find('img').attr('src',$('.l-logo').find('img').attr('src').replace('img_logo_white.png','img_logo.png'));
		}
	});


	/* サービスラインナップ
	---------------------------------------------------------------------------- */
	$('.p-service-lineup-list').slick({
		slidesToShow: 5,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				centerMode: true,
				centerPadding: '0',
				dots: true,
				arrows: true,
			}
		}],
	});


	/* グループのご紹介
	---------------------------------------------------------------------------- */
	$(window).scroll(function (){
		$('.p-group-content-box').each(function(){
			var pos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > pos - windowHeight + windowHeight/2.8){
				$(this).removeClass('is-group-anime');
			}
		});
	});

});