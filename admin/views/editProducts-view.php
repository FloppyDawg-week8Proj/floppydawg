<?php 
$arrProducts = runSelectSQL("SELECT * FROM products WHERE id=".$_GET["id"]);
?>
<form method="POST" action="views/updateProduct.php" class="addAproductForm" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$arrProducts[0]['id']?>">
		<h2>Edit a Product</h2>
		<label class="required">Name of the Product</label>
		<input type="text" name="strName" id = "strName" class="required" value="<?=$arrProducts[0]['strName']?>"/>

		<label class="required">Price</label>
		<input type="number" name="nPrice" class="required" value="<?=$arrProducts[0]['nPrice']?>"/>


		<label class="required">Size</label>
		<input type="number" name="nSizeID" class="required" value="<?=$arrProducts[0]['nSizeID']?>"/>

		<label class="required">Advantages</label>
		<input type="textarea" name="strAdvantage" class="required" value="<?=$arrProducts[0]['strAdvantage']?>"/>

		<label class="required">Reviews</label>
		<input type="number" name="nReviews" class="required" value="<?=$arrProducts[0]['nReviews']?>"/>

		<label class="required">Stars</label>
		<input type="number" name="nStars" class="required" value="<?=$arrProducts[0]['nStars']?>"/>

		<label class="required">Description</label>
		<input type="textarea" name="strDescription" class="required" value="<?=$arrProducts[0]['strDescription']?>"/>

		<input type="submit" value="Update Product">
		<a href="?page=products">Cancel</a>

	</form><!--addAproductForm-->