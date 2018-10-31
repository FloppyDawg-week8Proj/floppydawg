<div class="productDetailContainer">
	<div class="detailsHolder">
		<div class="imagesContainer">
			<div class="imageHolderContainer">
				<div class="mainImage coverBg">
					<img src="assets/<?=$arrData['strFile']?>" alt="placeholder">
				</div><!---mainImage-->
<!--
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
					
				</div>imageViews-
-->
			</div><!--imageHolderContainer-->
		</div><!--imagesContainer-->
		<div class="productContentContainer">		
			<h2 id="productName" data-productid="<?=$arrData['id']?>"><?=$arrData['strName']?></h2>
			<p><span class="starRate" data-rate="<?=$arrData['nStars']?>"><span id="fill"><img src="images/starMask.png" alt="star range"></span></span> Reviews(<a target="_blank" rel="noopener noreferrer" href="https://www.amazon.com/product-reviews/B0777TBXSP/ref=acr_dpproductdetail_text?ie=UTF8&showViewpoints=1"><?=$arrData['nReviews']?></a>)
			</p>
			<h3 id="nPrice"><?=$arrData['nPrice']?></h3>
			<h3>Advantages: </h3>
			<ol>
				<li><sapn class="fas fa-check"></sapn> Washable</li>
				<li><sapn class="fas fa-check"></sapn> Waterproof</li>
				<li><sapn class="fas fa-check"></sapn> Portable</li>
				<li><sapn class="fas fa-check"></sapn> Light</li>
			</ol>
			<div class="product-details-row product-color">
				<h3>Color: </h3>
				<select name="" id="strColor">
					<option value="blue">Blue</option>
					<option value="red">Red</option>
					<option value="brown">Brown</option>
				</select>
			</div>
			<div class="product-details-row product-size">
				<h3>Size:</h3>
				<select id="nSizeID" name="nSizeID" id="">
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
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
				<?=$arrData['strDescription']?>
			</p>
		</div><!---productDescription-->
	</div><!--productContentContainer-->
</div><!--productDetailContainer-->

