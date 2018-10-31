$(function(){
	const rate = $('.starRate').data('rate');
	$('.starRate').find('#fill').css("width", ((rate/5)*100)+"%");
});