$(function(){
	$('#addToCart').click(function(){
		$.ajax({
			url: 'index.php?controller=cart&action=insert',
			method: 'post',
			data: {
				'id' : $('#productName').data('productid'),
				'date': $.now(),
				'nQuantity': $('#quantity').val()
			},
			success: function(result){
				const quantity = $('.cartNav').find('#cart-product-quantity').text();
				let nItems = parseInt(quantity)+1;
				$('.cartNav').find('#cart-product-quantity').text(nItems);
				$('body').append(result);
			},
			error: function(){
				console.log('error');
			}
			
		});
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