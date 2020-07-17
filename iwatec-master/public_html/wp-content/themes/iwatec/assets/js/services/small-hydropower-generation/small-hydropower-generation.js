$(function() {
	var content = $('.p-place-img');
	var btn = $('.p-control-list li');

	var reset = function() {
		content.removeClass('is-active');
		btn.removeClass('is-active');
	};


	btn.mouseenter(function() {
		var position = btn.index($(this));
		reset();

		content.eq(position).addClass('is-active');
		$(this).addClass('is-active');

	});

	btn.mouseleave(function() {
		content.removeClass('is-active');
	})

})