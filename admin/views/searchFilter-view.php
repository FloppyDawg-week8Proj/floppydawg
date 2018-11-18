<section id="filterSearch">
	<h1>Filter Search</h1>
	<form method="post" action="search.php?search=order">
		<div class="searchField">
		<input type="text" name="strKeyword" id="searchField"  autocomplete="off" placeholder="Search for users by name, email, order number, order date..">
		</div><!--searchField-->
	</form>

	<div class="filterTable">
	<table class='table'>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email Address</th>
				<th>Order Number</th>
				<th>Order Date</th>
			</tr>
		<tbody id="searchResults">
			<!-- this is where my table will exist -->
		</tbody><!--searchResults-->
	</table>
	</div><!--filterTable-->
</section><!--filterSearch-->