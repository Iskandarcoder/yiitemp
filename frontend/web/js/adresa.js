$(document).ready(function() {
	$('.title').append('<span></span>');
	$('.post span').each(function() {
		var trigger = $(this), state = true, el = trigger.parent().next('.entry');
		trigger.click(function(){
			state = !state;
			el.slideToggle();
			trigger.parent().parent().toggleClass('inactive');
		});
	});
});