$(function(){

	/* 改行
	---------------------------------------------------------------------------- */
	$('.p-cat-mh').each(function(){
		var txt = $(this).text();
		txt = txt.replace("リーガル・フェイス", "<br>リーガル・フェイス");
		$(this).html(txt);
	});

});