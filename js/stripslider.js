$(function(){
	const holder = $('.stripslider-holder');
	const slider = holder.find('.stripslider');
	const elements = $('.sliderElement');
	
	slider.css('width', (elements.length/4)*100+'%')
	
	const moveSlide = function(){
		const maxPos = -(slider.outerWidth() - holder.outerWidth());
		const minPos = 0;
		const currPos = parseInt(slider.css('left'));
		if($(this).hasClass('next') && currPos > maxPos){
			slider.css('left', (currPos-(elements.eq(0).outerWidth()))+'px');
		}
		else if($(this).hasClass('back') && currPos < minPos){
			slider.css('left', (currPos+(elements.eq(0).outerWidth()))+'px');
		}
		return false;
	}
	
	holder.find('a.fas').click(moveSlide);
});