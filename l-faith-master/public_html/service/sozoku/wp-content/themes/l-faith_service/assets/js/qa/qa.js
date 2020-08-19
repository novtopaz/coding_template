$(function(){
	//タブパネル
	$('.p-inheritance-tab li').click(function() {
		var index = $('.p-inheritance-tab li').index(this);
		$('.p-inheritance-tab li').removeClass('is-inheritance-tab-active');
		$(this).addClass('is-inheritance-tab-active');
		$('.p-inheritance').removeClass('is-inheritance-show').eq(index).addClass('is-inheritance-show');
	});
	
	//アコーディオンパネル
	$('.p-qa-title').on('click',function(){
		$(this).siblings('.p-qa-answerbox').stop().slideToggle();
		$(this).toggleClass('is-open-qatitle');
	});
});