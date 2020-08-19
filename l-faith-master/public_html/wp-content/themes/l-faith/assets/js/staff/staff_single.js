$(function(){

	/* 他の社員紹介を見る
	---------------------------------------------------------------------------- */
	$('.p-relation-slide').slick({
		slidesToShow: 3,
		dots: true,
		arrows: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				centerMode: true,
				centerPadding: '0',
			}
		}],
	});

});