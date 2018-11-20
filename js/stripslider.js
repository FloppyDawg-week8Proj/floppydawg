$(function(){
	const holder = $('.stripslider-holder');
	const slider = holder.find('.stripslider');
	const elements = slider.find('.sliderElement');
	
	slider.css('width', ((100*elements.length)/4)+'%')
	
	const moveSlide = function(){
		const maxPos = -($(this).siblings( ".stripslider" ).outerWidth() - $(this).parent().outerWidth());
		const minPos = 0;
		const currPos = parseInt($(this).siblings( ".stripslider" ).css('left'));
		if($(this).hasClass('next') && currPos > maxPos){
			$(this).siblings( ".stripslider" ).css('left', (currPos-(elements.eq(0).outerWidth()))+'px');
		}
		else if($(this).hasClass('back') && currPos < minPos){
			$(this).siblings( ".stripslider" ).css('left', (currPos+(elements.eq(0).outerWidth()))+'px');
		}
		return false;
	}
	
	holder.find('a.fas').click(moveSlide);
});