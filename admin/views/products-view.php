<?php
$arrProducts = runSelectSQL("SELECT categories.strName as category, products.*, photos.strFile FROM categories LEFT JOIN products ON categories.id = nCategory LEFT JOIN photos ON photos.nProductID = products.id
");
?>


<section>
<table id="productsTable">
	<tr>
		<th>Name</th>
		<th>Category</th>
		<th>Photo</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<tr>
		<td>
			<a href="?page=addProduct" class="addProductBtn">Add a Product</a>
		</td>
	</tr>
<?php foreach($arrProducts as $products) { ?>	
	<tr>
		<td><?=$products['strName']?></td>
		<td><?=$products['category']?></td>
		<td><img width=200 src="../assets/<?=$products['strFile']?>"></td>
		<td><a href="?page=editProducts&id=<?=$products['id'];?>" class="editBtn">Edit</a></td>
		<td><a href="?page=deleteProduct&id=<?=$products['id'];?>" class="deleteBtn">Delete</a></td>
	</tr>
<?php } ?>

</table>
</section><!--productsTable-->

<?php
include("cmsFooter-view.php");
?>