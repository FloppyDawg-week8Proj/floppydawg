$(function(){
	$(".filterClass").each(function(){
		$(this).click(function(){
			$(this).find(".dropList").toggle();
			$(this).find(".fas").toggleClass("fa-angle-right");//deleting class
			$(this).find(".fas").toggleClass("fa-angle-down");//applying the class
		});
	});
});