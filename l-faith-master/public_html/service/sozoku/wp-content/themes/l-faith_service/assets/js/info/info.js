$(function() {
	var selectValue;
	if(window.location.href.indexOf("post_year=") > -1) {
		selectValue = $('.p-control-select option:selected').html();
    } else{
    	selectValue = $('.p-control-select option').html();
    }

    $('.p-control-year').text(selectValue);
})



