<?php include("dbqueries.php"); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<style>
		*{box-sizing: border-box; font-family: arial;}
		form, .searchField {position: relative; display: inline-block;}
		table {width: 100%;}
		table thead {}
		table thead td { padding: 3px;background: #0072cc; color: #fff;}
		table thead td a {color: #fff; border-bottom: 1px dotted #fff; text-decoration: none;}
		table td {margin: 0px;}
		table td {text-align: center;}
		table td:first-child {text-align: left;}
		table tbody tr td {background: #eee; margin-top: 4px; border-bottom: 4px solid #fff; border-top: 4px solid #fff; padding: 3px;}
		table tbody tr td:first-child {border-radius: 8px 0px 0px 8px;}
		table tbody tr td:last-child {border-radius: 0px 8px 8px 0px;}

		table thead tr td:first-child {border-radius: 8px 0px 0px 8px;}
		table thead tr td:last-child {border-radius: 0px 8px 8px 0px;}
	</style>	
</head>
<form method="post" action="search.php">
	<div class="searchField">
		<input type="text" name="strKeyword" id="searchField"  autocomplete="off"/>
	</div><!--searchField-->
</form>

<div id="myFruitTableContainer">
	<table cellspacing="0">
		<thead>
			<td><a href="#" data-filtervalue="strFirstName">First Name</a></td>
			<td><a href="#" data-filtervalue="strLastName">Last Name</a></td>
			<td><a href="#" data-filtervalue="strEmail">Email Address</a></td>
			<td><a href="#" data-filtervalue="nOrderNumber">Order Number</a></td>
		</thead>

		<tbody id="tableBody">
			<!-- this is where my table will exist -->
			<?php include("filter.php");?>
		</tbody>
	</table>
</div>

<script>
// exec once jquery loaded
$(function(){

	$("#searchField").keyup(function(){
			$.ajax(
			{
				url: "filter.php",
				method: "GET",
				data: {strKeyword: $("#searchField").val()}, /// nvp therefore, object
				success: function(result){
					// do something
					$("#tableBody").html(result);
	        		return false;
	        	},
	   		 	error: function(response)
	   		 	{
	   		 		console.log(response.statusText);
	   		 	}
	   		});
	});

		
	$("table thead tr td a").click(function(){
			
			$.ajax(
			{
				url: "filter.php",
				method: "GET",
				data: {strKeyword: $("#searchField").val(),strSortBy: $(this).data("filtervalue")}, /// nvp therefore, object
				success: function(result){
					// do something
					$("#tableBody").html(result);
	        		return false;
	        	},
	   		 	error: function(response)
	   		 	{
	   		 		console.log(response.statusText);
	   		 	}
	   		});
	});

	
	
});