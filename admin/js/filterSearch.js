$(function(){

	$("#searchField").keyup(function(){
		$.ajax(
		{
			url: "views/filter.php",
			method: "GET",
			data: {strKeyword: $("#searchField").val()},
			success: function(result){
				
				$("#searchResults").html(result);
        		return false;
        	},
   		 	error: function(response)
   		 	{
   		 		console.log(response.statusText);
   		 	}
   		});
	});

		
	$(".filterTable table thead td a").click(function(){
		$.ajax(
		{
			url: "views/filter.php",
			method: "GET",
			data: {strKeyword: $("#searchField").val(),strSortBy: $(this).data("filtervalue")},
			success: function(result){
				
				$("#searchResults").html(result);
        		return false;
        	},
   		 	error: function(response)
   		 	{
   		 		console.log(response.statusText);
   		 	}
   		});
	});
});