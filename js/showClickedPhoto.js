$(function(){
	$('.productPictures').on('click', function(){
		$('.mainImage').find('img').attr('src', $(this).find('img').attr('src'));
		makeContainBg();
	});
});