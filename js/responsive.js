$(document).ready(function(){
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
		if($(this).hasClass('open')){
			$(this).next().css('max-height', '148px');
		}
		else{
			$(this).next().css('max-height', '0');
		}
	});
});