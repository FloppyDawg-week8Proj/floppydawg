<?php include("cmsHeader-view.php");?>
<div class="addProductContainer">
	<form method="post" action="save_page.php" class="addAproductForm"enctype="multipart/form-data">
		<h2>Add A Product</h2>
		<label class="required">Name of the Product</label>
		<input type="text" name="strName" class="required" value=""/>

		<label class="required">Price</label>
		<input type="number" name="nPrice" class="required" value=""/>

		<label class="required">Category</label>
		<select name="nCategory" id="">
					<option value="0">Accessories</option>
					<option value="1">Beds</option>
		</select>

		<label class="required">Size</label>
		<input type="number" name="nSizeID" class="required" value=""/>

		<label class="required" >Featured</label>
		<input type="radio" name="bFeatures" value="1">Yes <br>
		<input type="radio" name="bFeatures" value="0">No<br>

		<label class="required">Advantages</label>
		<input type="textarea" name="strAdvantage" class="required" value=""/>

		<label class="required">Reviews</label>
		<input type="number" name="nReviews" class="required" value=""/>

		<label class="required">Stars</label>
		<input type="number" name="nStars" class="required" value=""/>

		<label class="required">Description</label>
		<input type="textarea" name="strDescription" class="required" value=""/>
		
		<label class="required">Upload Photo</label>
		<input type="file" name="strImage">

		<input type="submit" value="Add Product">

	</form><!--addAproductForm-->
</div><!--addProductContainer-->
