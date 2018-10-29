$(function(){
	$(".filterClass").each(function(){
		$(this).find("a").click(function(){
			$(this).siblings(".dropList").toggle();
			$(this).siblings(".fas").toggleClass("fa-angle-right");//deleting class
			$(this).siblings(".fas").toggleClass("fa-angle-down");//applying the class
		});
	});
});