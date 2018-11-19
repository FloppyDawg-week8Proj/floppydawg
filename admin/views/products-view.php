<?php
$arrProducts = runSelectSQL("SELECT products.*, categories.strName as category, photos.strFile FROM categories LEFT JOIN products ON categories.id = nCategory LEFT JOIN photos ON photos.nProductID = products.id WHERE bMainPhoto=1");
?>
<div id="products">
	<h2>Products</h2>
	<form method="post" action="search.php?search=products">
			<div class="searchField">
				<input type="text" name="strKeyword" id="searchField"  autocomplete="off" placeholder="Search for product by name">
			</div><!--searchField-->
	</form>
	<section>
		<table id="productsTable" class='table'>
			<thead>
				<tr>
					<th>Name</th>
					<th>Category</th>
					<th>Photo</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr class="addNew">
					<td>
						<a href="?page=addProduct">
							<img src="images/iconAdd.png" alt="iconAdd" class="iconAdd">
							<p class="addBtn">Add a Product</p>
						</a>
					</td>
				</tr>
			<?php foreach($arrProducts as $products) { ?>	
				<tr>
					<td><?=$products['strName']?></td>
					<td><?=$products['category']?></td>
					<td><img width=200 class="productsImage" src="../assets/<?=$products['strFile']?>"></td>
					<td><a href="?page=editProducts&id=<?=$products['id'];?>" class="editBtn">Edit</a></td>
					<td><a href="?page=deleteProduct&id=<?=$products['id'];?>" class="deleteBtn">Delete</a></td>

				</tr>
			<?php } ?>
			</tbody>
		</table>
	</section><!--productsTable-->
</div>