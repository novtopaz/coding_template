$(function() {
	var mvSlider = $('.p-mv-imgList');
	mvSlider.slick({
	  autoplay: true,
	  autoplaySpeed: 4000,
	  dots: false,
	  infinite: true,
	  speed: 2000,
	  fade: true,
	  cssEase: 'linear',
	});
})

$(function() {
	var fancyboxBtn = $('.p-access-list-item-img a');
	fancyboxBtn.click(function() {
		if($(window).width() < 768){
			return false;
		}
	})
})