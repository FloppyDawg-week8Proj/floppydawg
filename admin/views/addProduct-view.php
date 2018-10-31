<?php include("cmsHeader-view.php");?>
<style>
	.addProductContainer
	{
		margin: 20px auto;
		width: 300px;
		padding: 30px 25px;
		background: #fff;
		border: 2px solid #ff5a1f;/*orange*/
	}
	.addAproductForm label
	{
		display: block;
		margin: 10px;
		color: #ff5a1f; 
	}
	.addAproductForm input[type=text], input[type=textarea] ,select
	{
		margin: 5px;
		padding: 5px;
		border: 1px solid #363636;
	}
	.addAproductForm input[type=file]
	{
	margin-bottom: 20px;
	}
	.addAproductForm h2
	{
	color: #ff5a1f;
	}
	.addAproductForm img
	{
		max-width: 50px;
	}
	.addAproductForm input[type=submit]
	{
		background-color: #ff5a1f;
		color: #fff;
		border: none;
		padding: 10px;
	}
	.addAproductForm input[type=submit]:hover
	{
		background-color: #fff;
		color: #ff5a1f;
		border: 1px solid #ff5a1f;
		transition: all ease 0.7s;
	}
	.addAproductForm input[type=number]
	{
		margin: 5px;
		padding: 5px;
		border: 1px solid #363636;
	}


</style>
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
