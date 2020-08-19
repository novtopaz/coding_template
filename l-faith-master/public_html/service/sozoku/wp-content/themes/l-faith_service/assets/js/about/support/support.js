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
})



