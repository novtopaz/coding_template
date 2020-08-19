$(function() {
	var fancyItem = $('.data-fancybox');

	var fancyItemSetting = function() {
		fancyItem.click(function() {
			if($(window).width() < 767){
					return false;
			}
		})
	};

	fancyItemSetting();
	$(window).resize(function() {
		fancyItemSetting();
	})
})