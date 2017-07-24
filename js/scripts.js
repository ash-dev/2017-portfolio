// testimonials scripts 

$(function(){
	var nav = $('.testimonials-wrap'),
		animateTime = 500,
		navLink = $('#testimonials .expand .expand-link');
	navLink.click(function()
	{
		if (nav.height() === 120)
		{
			autoHeightAnimate(nav, animateTime);
		}
		else
		{
			nav.stop().animate(
			{
				height: '120'
			}, animateTime);
		}
	});
})

function autoHeightAnimate(element, time){
	var curHeight = element.height(),
		autoHeight = element.css('height', 'auto').height();
	element.height(curHeight);
	element.stop().animate(
	{
		height: autoHeight
	}, time);
}
$(document).ready(function(){
	$(".expand-link").click(function()
	{
		$(this).fadeOut();
		$(".testimonials-wrap").css("z-index", "1100");
	});
});

// skill tally scripts 

 $('.l-dev').typeIt({
     strings: '////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////',
     speed: 10,
     autoStart: false, 
	 cursor: false
});

 $('.l-design').typeIt({
     strings: '////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////',
     speed: 10,
     autoStart: false, 
	 cursor: false
});

 $('.l-more').typeIt({
     strings: '////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////',
     speed: 10,
     autoStart: false, 
	 cursor: false
});