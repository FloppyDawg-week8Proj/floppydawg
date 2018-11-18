<?php 
$sql = 'SELECT * FROM sizes';
$arrData['sizes'] = runSelectSQL($sql);

$sql = 'SELECT * FROM categories';
$arrData['categories'] = runSelectSQL($sql);

$sql = 'SELECT * FROM advantages';
$arrData['advantages'] = runSelectSQL($sql);
?>
<div class="addProductContainer">
	<form method="post" action="views/save_page.php" class="addAproductForm" enctype="multipart/form-data">
		<h2>Add A Product</h2>
		<label>Name of the Product</label>
		<input type="text" name="strName" class="required" value=""/>

		<label>Price</label>
		<input type="number" name="nPrice" class="required" value=""/>

		<label class="required">Category</label>
		<select name="nCategory" id="">
			<?php
			foreach( $arrData['categories']  as $category){
			?>
			<option value='<?=$category['id'];?>'><?=$category['strName'];?></option>
			<?php
				}
			?>
		</select>

		<label>Size</label>
		<select name="nSizeID" class="required">
			<?php
				foreach( $arrData['sizes']  as $size){
			?>
			<option value='<?=$size['id'];?>'><?=$size['strName'];?></option>
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
		?>
		<div class="advantegeRow col-12">
			<input type="checkbox" name="nAdvantageID[]" value='<?=$advantage['id'];?>'><?=$advantage['strName'];?>
		</div>
		<?php
			}
		?>

		<label>Reviews</label>
		<input type="number" name="nReviews" class="required" value=""/>

		<label>Stars</label>
		<input type="range" name="nStars" class="required col-12" min="0" max="50" onchange='starsRange()' />
		<div class='starsHolder col-12'>
			<span></span>
			<img src="../images/starMask.png" alt="stars Mask" class="starsMask col-12">
		</div>

		<label>Description</label>
		<input type="textarea" name="strDescription" class="required" value=""/>
		
		<label>Upload Photo</label>
		<input id="myFile" type="file" name="strImage[]" multiple>
		<div id="myImages" class="col-12">
			<img class="col-12" src="../assets/placeholder.jpg" alt="defaultPhoto">
		</div>

		<input type="hidden" name="bMainPhoto" value='0'/>
		<input type="submit" value="Add Product">

	</form><!--addAproductForm-->
</div><!--addProductContainer-->
