$(function(){
	$('#addToCart').click(function(){
		$.ajax({
			url: 'index.php?controller=cart&action=insert',
			method: 'post',
			data: {
				'id' : $('#productName').data('productid'),
				'strName': $('#productName').text(),
				'date': $.now(),
				'nUnityPrice': $('#nPrice').text(),
				'nSubTotal' : parseInt($('#nPrice').text())*parseInt($('#quantity').val()),
				'nSizeID': $('#nSizeID').val(),
				'nQuantity': $('#quantity').val(),
				'nColorID': $('#strColor').val()
			},
			success: function(result){
				let nItems = parseInt($('.cartNav span').text())+1;
//				$('#cartItems').css('opacity', 1);
				$('.cartNav span').text(nItems);
			},
			error: function(){
				console.log('error');
			}
			
		});
//		$('#addToCart .fas').css({'transform': 'scale(2) translateX(10px) translatey(20px)',	'opacity': 1});
		return false;
	})
//	$('#deleteItem').click(function(){
//		$.ajax({
//			url: $(this).data('target'),
//		});
//		$(this).remove();
//		return false;
//	})
});