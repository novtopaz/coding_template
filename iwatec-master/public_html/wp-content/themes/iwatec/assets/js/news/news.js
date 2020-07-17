/* ブレイクポイント
---------------------------------------------------------------------------- */
var is_pc = '(min-width:768px)';
var is_sp = '(max-width:767px)';

$(function() {
	var btnCategory = $('.p-control-category-btn-cover');
	var btnYear = $('.p-control-year-btn-cover');

	var category = $('.p-control-category-list');
	var year = $('.p-control-year-list');

	var clickAccordion = function(btn, content) {
		btn.toggleClass('is-active');
		content.stop(true, false).slideToggle(300);
	};
	
	var resetAccordion = function() {
		if( window.matchMedia( is_pc ).matches ){
			category.show();
		} else{
			category.hide();
		}
		year.hide();
	};

	btnYear.click(function() {
		clickAccordion($(this), year);
	});

	btnCategory.click(function() {
		if( window.matchMedia( is_sp ).matches ){
			clickAccordion($(this), category);
		}
	});

	resetAccordion();
	$(window).resize(function() {
		resetAccordion();
	})
})



var popup = $('.m-single-content a');

popup.each(function() {
	$image = $(this).find('img');
	if($image.length > 0){
		$(this).attr('data-fancybox', 'images');
	}
})
