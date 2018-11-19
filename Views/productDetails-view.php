<div class="productDetailContainer">
	<div class="detailsHolder">
		<div class="imagesContainer">
			<div class="imageHolderContainer">
				<div class="mainImage coverBg">
					<img src="assets/<?=$arrData['product']['strFile']?>" alt="placeholder">
				</div><!---mainImage-->
				<div class="imageViews">
				<?php foreach($arrData['product']['photos'] as $photoIndex => $photo){ ?>
					<div class="productPictures" data-imageindex="<?=$photoIndex?>">
						<span class="coverBg productPicture-wraper">
							<img src="assets/<?=$photo?>" alt="$arrData['product']['strName']">
						</span>
					</div>
				<?php } ?>
				</div><!--imageViews--->
			</div><!--imageHolderContainer-->
		</div><!--imagesContainer-->
		<div class="productContentContainer">		
			<h2 id="productName" data-productid="<?=$arrData['product']['id']?>"><?=$arrData['product']['strName']?></h2>
			<p><span class="starRate" data-rate="<?=$arrData['product']['nStars']?>"><span id="fill"><img src="images/starMask.png" alt="star range"></span></span> Reviews(<a target="_blank" rel="noopener noreferrer" href="https://www.amazon.com/product-reviews/B0777TBXSP/ref=acr_dpproductdetail_text?ie=UTF8&showViewpoints=1"><?=$arrData['product']['nReviews']?></a>)
			</p>
			<h3 id="nPrice"><?=$arrData['product']['nPrice']?></h3>
			<h3>Advantages: </h3>
			<ul>
				<?php
					foreach($arrData['product']['advantages'] as $advantage){
				?>
					<li><span class="fas fa-paw"></span><?=$arrData['advantagesCaption'][$advantage]?></li>
				<?php } ?>
			</ul>
			<div class="product-details-row product-size">
				<h3>Size:</h3>
				<p><?=$arrData['sizesCaption'][$arrData['product']['nSizeID']]?></p>
				<a href="#" data-modaltarget="size">Size Chart</a>
			</div>
			
			<div class="product-details-row product-quantity" >
				<label>Quantity: </label>
				<div class="item-quantity-decrement"><span class="fas fa-minus"></span></div>
				<input id="quantity" name="nQuantity" type="text" value="1">
				<div class="item-quantity-increment"><span class="fas fa-plus"></span></div>
			</div>
			<a id="addToCart" href="#" class="btn btn-primary">Add to Cart</a>
		</div><!--detailsHolder--->

		<div class="productDescription">
			<h2>Description :</h2>
			<p>
				<?=$arrData['product']['strDescription']?>
			</p>
		</div><!---productDescription-->
	</div><!--productContentContainer-->
</div><!--productDetailContainer-->

