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
				let nItems = parseInt($('#cartItems').text())+1;
				console.log($('#productName').data('productID'));
//				$('#cartItems').css('opacity', 1);
//				$('#cartItems').text(nItems);
				$('.page-title').html(result);
			},
			error: function(){
				console.log('error');
			}
			
		});
		return false;
	})
});