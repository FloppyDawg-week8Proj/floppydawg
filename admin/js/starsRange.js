const starsRange = function(){
	const range = $('input[name="nStars"]').val();
	$('.starsHolder span').css('width', (range*2)+'%');
}