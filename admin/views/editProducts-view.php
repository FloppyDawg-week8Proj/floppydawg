<?php 
$sql = 'SELECT * FROM sizes';
$arrData['sizes'] = runSelectSQL($sql);

$sql = 'SELECT * FROM categories';
$arrData['categories'] = runSelectSQL($sql);

$sql = 'SELECT * FROM advantages';
$arrData['advantages'] = runSelectSQL($sql);

$sql = "SELECT 
			products.*
		FROM 
			products
		WHERE products.id=".$_GET["id"];
$productDetails = runSelectSQL($sql)[0];

$sql = "SELECT 
			product_advantages.nAdvantageID
		FROM 
			product_advantages
		WHERE product_advantages.nProductID=".$_GET["id"];
$results = runSelectSQL($sql);

$productDetails['advantages'] = [];
foreach($results as $result){
	array_push($productDetails['advantages'], $result['nAdvantageID']);
}


$sql = "SELECT 
			photos.strFile,
			photos.bMainPhoto
		FROM 
			photos
		WHERE photos.nProductID=".$_GET["id"];
$results = runSelectSQL($sql);

$productDetails['photos'] = [];
foreach($results as $result){
	array_push($productDetails['photos'], $result['strFile']);
}

?>
<div class="editProductContainer">
	<form method="POST" action="views/updateProduct.php" class="addAproductForm" enctype="multipart/form-data">
			<input type='hidden' name="id" value="<?=$_GET['id']?>" />
			
			<h2>Edit Product</h2>
			<label>Name of the Product</label>
			<input type="text" name="strName" class="required" value="<?=$productDetails['strName']?>"/>

			<label>Price</label>
			<input type="number" name="nPrice" class="required" value="<?=$productDetails['nPrice']?>"/>

			<label class="required">Category</label>
			<select name="nCategory" id="">
				<?php
				foreach($arrData['categories'] as $category){	
					$selected = ($category['id']==$productDetails['nCategory'])?'selected':'';
				?>
				<option value='<?=$category['id'];?>' <?=$selected?>><?=$category['strName'];?></option>
				<?php
					}
				?>
			</select>

			<label>Size</label>
			<select name="nSizeID" class="required">
				<?php
					foreach( $arrData['sizes']  as $size){
						$selected = ($size['id']==$productDetails['nSizeID'])?'selected':'';
				?>
				<option value='<?=$size['id'];?>' <?=$selected?>><?=$size['strName'];?></option>
				<?php
					}
				?>
			</select>

			<label class="required" >Featured</label>
			<input type="radio" name="bFeatures" value="1">Yes <br>
			<input type="radio" name="bFeatures" value="0" checked>No<br>

			<label>Advantages</label>
			<?php
				foreach( $arrData['advantages']  as $advantage){
					$checked = (in_array($advantage['id'], $productDetails['advantages']))?'checked':'';
			?>
			<div class="advantegeRow col-12">
				<input type="checkbox" name="nAdvantageID[]" value='<?=$advantage['id'];?>' <?=$checked?>><?=$advantage['strName'];?>
			</div>
			<?php
				}
			?>

			<label>Reviews</label>
			<input type="number" name="nReviews" class="required" value="<?=$productDetails['nReviews']?>"/>
			
			<label>Stars</label>
			<input type="range" name="nStars" class="required col-12" min="0" max="50" onchange='starsRange()' value='<?=$productDetails['nStars']?>'/>
			<div class='starsHolder col-12'>
				<span style="width: <?=$productDetails['nStars']*2?>%"></span>
				<img src="../images/starMask.png" alt="stars Mask" class="starsMask col-12">
			</div>

			<label>Description</label>
			<textarea name="strDescription" class="required" value=""><?=$productDetails['strDescription']?></textarea>
			
			<label>Upload Photo</label>
			<input id="myFile" type="file" name="strImage[]" multiple>
			<div id="myImages" class="col-12">
			<?php
				foreach($productDetails['photos'] as $photo){
			?>
				<div class="product-view-holder">
					<div class="product-pictures-preview coverBg">
						<img class="col-12" src="../assets/<?=$photo?>" alt="defaultPhoto">
					</div>
				</div>
			<?php } ?>
			</div>

			<input type="hidden" name="bMainPhoto" value='0'/>
			<input type="submit" value="Save Changes">
			<a href="?page=products">Cancel</a>
	</form><!--addAproductForm-->
</div><!--editProductContainer-->