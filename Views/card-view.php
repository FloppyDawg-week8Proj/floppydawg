<div class="cardView">
	<?php	foreach($arrData as $product){?>
		<div class="productBox">
			<div class="placeHolder">
				<div class="holderImage coverBg">
					<img src="assets/placeholder.jpg">
				</div><!--holderImage coverBg-->
				<div class="productName">
					<h3>Product Name</h3>
				</div><!--productname-->
				<div class="desc">
					<p>Description</p>
				</div><!--desc-->
				<div class="price">
					<p>$PRICE</p>
				</div><!--price-->
				<a class="btn btn-primary" href="?action=products&id=1">VIEW DETAILS</a>
			</div><!--placeholder-->
		</div><!--productBox-->	
	<?php } ?>
</div><!--cardView-->

