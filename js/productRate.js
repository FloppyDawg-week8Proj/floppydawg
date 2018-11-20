$(function(){
	const rate = $('.starRate').data('rate');
	$('.starRate').find('#fill').css("width", ((rate)+"%"));
});