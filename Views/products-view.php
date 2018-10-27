<?php include("header-view.php");?>
<div class="productsView">
		<div class="categoryNav">
		<ul>
				<h3>CATEGORIES AND FILTER</h3>
				<li class="filterClass"><span class="fas fa-angle-right"></span><a href="#">Categories</a>
				<ul class="dropList">
					<li><a href="#">Dog Beds</a></li>
					<li><a href="#">Accessories</a></li>
				</ul>
				</li>
				<li class="filterClass">
					<span class="fas fa-angle-right"></span><a href="#">Size</a>
				</li>
				<li class="filterClass"><span class="fas fa-angle-right"></span><a href="#">Waterproof</a></li>
			</ul> 
		</div><!--categoryNav-->
		<div class="productsContent">
			Content
		</div>
</div><!--productsView-->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
	$(function(){
		$(".filterClass").each(function(){
			$(this).click(function(){
				$(this).find(".dropList").toggle();
				$(this).find(".fas").toggleClass("fa-angle-right");//deleting class
				$(this).find(".fas").toggleClass("fa-angle-down");//applying the class
			});
		});
	});


// function dropBtn() {
//     var x = document.getElementByClassName("dropList");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }
</script>
<?php include("footer-view");?>
