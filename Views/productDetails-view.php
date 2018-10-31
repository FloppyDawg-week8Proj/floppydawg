<div class="productDetailContainer">
	<div class="detailsHolder">
		<div class="imagesContainer">
			<div class="imageHolderContainer">
				<div class="mainImage coverBg">
					<img src="assets/placeholder.jpg" alt="placeholder">
				</div><!---mainImage-->
				<div class="imageViews">
					<div class="productPictures">
						<span class="coverBg productPicture-wraper">
							<img src="assets/placeholder.jpg" alt="placeholder">
						</span>
					</div>
					<div class="productPictures">
						<span class="coverBg productPicture-wraper">
							<img src="assets/placeholder.jpg" alt="placeholder">
						</span>
					</div>
					<div class="productPictures">
						<span class="coverBg productPicture-wraper">
							<img src="assets/placeholder.jpg" alt="placeholder">
						</span>
					</div>
					<div class="productPictures">
						<span class="coverBg productPicture-wraper">
							<img src="assets/placeholder.jpg" alt="placeholder">
						</span>
					</div>
					
				</div><!--imageViews--->
			</div><!--imageHolderContainer-->
		</div><!--imagesContainer-->
		<div class="productContentContainer">		
			<h2><?=$arrData['strName']?></h2>
			<p>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i> Reviews(<a target="_blank" rel="noopener noreferrer" href="https://www.amazon.com/product-reviews/B0777TBXSP/ref=acr_dpproductdetail_text?ie=UTF8&showViewpoints=1"><?=$arrData['nReviews']?></a>)
			</p>
			<h3>$<?=$arrData['nPrice']?></h3>
			<h3>Advantages: </h3>
			<ol>
				<li>&#8226; Washable</li>
				<li>&#8226; Waterproof</li>
				<li>&#8226; Portable</li>
				<li>&#8226; Weight</li>
			</ol>
			<div class="product-details-row product-color">
				<h3>Color: </h3>
				<select name="" id="">
					<option>Blue</option>
					<option>Red</option>
					<option>Brown</option>
				</select>
			</div>
			<div class="product-details-row product-size">
				<h3>Size:</h3>
				<select name="nSizeID" id="">
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
			</div>
			<div class="product-details-row product-quantity" >
				<label>Quantity: </label>
				<div class="item-quantity-decrementincrement"><span class="fas fa-minus"></span></div>
				<input name="nQuantity" type="text" value="1">
				<div class="item-quantity-increment"><span class="fas fa-plus"></span></div>
			</div>
			<a href="#" class="btn btn-primary">Add to Cart</a>
		</div><!--detailsHolder--->

		<div class="productDescription">
			<h2>Description :</h2>
			<p>
				<?=$arrData['strDescription']?>
			</p>
		</div><!---productDescription-->
	</div><!--productContentContainer-->
</div><!--productDetailContainer-->

