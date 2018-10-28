<style>
.productDetailContainer{
	display: inline-block;
}
.productDetailContainer>*
{
	display: inline-block;
	float: left;
	position: relative;
	width: 100%;
}

.productContentContainer h2,h3,p,ol
{
margin-bottom: 15px;
}
.productContentContainer, .imagesContainer
{
	display: inline-block;
	width: 49%;
	height: 100%;
	overflow: auto;
	padding: 20px;
}
.detailsHolder{
	height: 600px;
}
.mainImage img
{
	width: 100%;
}
.imageViews .productPictures{
	width: 25%;
	height: 100px;
	float: left;
	padding: 5px;
}
.imageViews .productPictures .productPicture-wraper{
	display: inline-block;
	width: 100%;
	height: 100%;
}
.imageViews img
{
	max-width: 97px;
	float: left;
}
.fa-star, .fa-star-half-alt
{
	color: #363636;
}
.fa-circle
{
	font-size: 20px;
	margin-left: 5px;
}
.productDescription p
{
	width: 500px;
	margin-top: 10px;
}
</style>

<div class="productDetailContainer">
	<div class="detailsHolder">
		<div class="imagesContainer">
			<h2>Product Details</h2>
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
			<h2>Product Name</h2>
			<p>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star"></i>
			   <i class="fas fa-star-half-alt"></i> Reviews(178)
			</p>
			<h3>$ 100.00</h3>
			<h3>Advantages</h3>
				<ol>&#8226; Washable</ol>
				<ol>&#8226; Waterproof</ol>
				<ol>&#8226; Portable</ol>
				<ol>&#8226; Weight</ol>
			<h3>Color: 
				<i class="fas fa-circle"></i>
				<i class="fas fa-circle"></i>
				<i class="fas fa-circle"></i>
				<i class="fas fa-circle"></i>
			</h3>
			<h3>Size :
			<select> 
				<option value="">Select a size:</option>
				<option value="small">Small</option>
				<option value="medium">Medium</option>
				<option value="large">Large</option>
				<option value="extraLarge">Extra Large</option>
			</select>
			</h3>
			<h3> Quantity: 
					<input type="button" onclick="decrementValue()" value=" - " />
					<input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
					<input type="button" onclick="incrementValue()" value=" + " />
			</h3>
			<a href="#" class="btn btn-primary">Add to Cart</a>
		</div><!--detailsHolder--->

		<div class="productDescription">
			<h2>Description :</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
			</p>
		</div><!---productDescription-->
	</div><!--productContentContainer-->
</div><!--productDetailContainer-->

