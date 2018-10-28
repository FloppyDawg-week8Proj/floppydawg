//$(function(){
//	/* seting variables */
//	const keyholeWidth = $(".slide-keyhole").outerWidth();
//	const arrSlides = $(".slide-holder");
//	const slidesContainer = $(".slide-container");
////	const curretSlider = getCurrentSlider();
//
//	slidesContainer.css({"position": "absolute", "height": "100%", "width": "100%"});
//
//	arrSlides.each(function(){
//		$(this).css("width", "0");
//		$(this).css({"transition": "width 1s 0.2s ease, left 0.1s linear, right 0.1s linear", "position": "absolute"});
//	});
//	
//	$(".slide-control").click(function(){
//		if($(this).hasClass("slide-back")){
//			currentSlide.css({"right": "0", "left": "auto", "width": "0"});
//			prevtSlide.css({"right": "auto", "left": "0", "width": "100%"});
//		}
//		if($(this).hasClass("slide-next")){
//			currentSlide.css({"left": "0", "rights": "auto", "width": "0"});
//			nextSlide.css({"left": "auto", "rights": "0", "width": "100%"});
//		}
//	});
//	
//	
//});

$(function(){
	$(".slide-keyhole").hover(
		function(){
			clearInterval(startSlider);
		},
		function(){
			startSlider = setInterval(moveSlide, 3000);
		}
	);
	function setSizes(){		
		const arrSlide = $(".slide-holder");
		const slidesWidth = $(".slide-keyhole").outerWidth();
		const containerWidth = arrSlide.length*(slidesWidth);
		$(".slide-container").css({"width": containerWidth, "transform": "translate(-"+slidesWidth*(Math.floor(arrSlide.length/2))+"px)"});
		arrSlide.each(function(){
			$(this).css("width", slidesWidth+"px")
		});
	}
	function heroSlider(){
		const arrSlide = $(".slide-holder");
		for(var i=0; i<arrSlide.length ; i++){
			const pos = i*$(".slide-keyhole").outerWidth();
			arrSlide[i].style.left = pos+"px";
		}
		startSlider = setInterval(moveSlide, 3000);
	}
	function moveSlide(direction = "next"){	
		var arrSlide = $(".slide-holder");
		var slidesWidth = $(".slide-keyhole").outerWidth();
		
		for(var a=0; a<arrSlide.length ; a++){
			let newPos = '';
			const minPos = 0;
			const maxPos = (arrSlide.length-1)*slidesWidth;
			
			if(direction == "next"){
				newPos = parseInt(arrSlide[a].style.left)-slidesWidth;
			}else if(direction == "prev"){
				newPos = parseInt(arrSlide[a].style.left)+slidesWidth;
			}
			
			if(newPos<0){
				newPos = maxPos;
				arrSlide[a].style.zIndex = "-1";
			}else if(newPos>maxPos){
				newPos = minPos;
				arrSlide[a].style.zIndex = "-1";
			}else{
				arrSlide[a].style.zIndex = "2";
			}
			
			arrSlide[a].style.left = newPos+"px";
		}
		setSizes();
	}
	$(".slide-control").click(function(){
	if($(this).hasClass("slide-back")){
		moveSlide("prev");
	}
	if($(this).hasClass("slide-next")){
		moveSlide("next");
	}
	});
	setSizes();
	heroSlider();
});