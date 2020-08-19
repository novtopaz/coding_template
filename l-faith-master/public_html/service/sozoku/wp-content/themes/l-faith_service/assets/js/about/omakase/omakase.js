$(function() {
	$('.p-slider').slick({
    dots:true,
    focusOnSelect:true,
    slidesToShow:3,
    slidesToScroll:3,

	responsive:[
	    {
	        breakpoint: 768,
	        settings:{
	    		centerMode: false,
	    		classenterPadding: '0',
	    		slidesToShow:1,
	    		slidesToScroll:1,
	        }
	    },
	]
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

	
})



