$(function(){

	$("#searchField").keyup(function(){
			$.ajax(
			{
				url: "filter.php",
				method: "GET",
				data: {strKeyword: $("#searchField").val()},
				success: function(result){
					
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
				data: {strKeyword: $("#searchField").val(),strSortBy: $(this).data("filtervalue")},
				success: function(result){
					
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