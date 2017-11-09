// toggles

$('.hover-wrap').hover(
	function(){$(this).toggleClass('hover');}
);
	
$('#testimonials').readmore({
  speed: 500,
  moreLink: '<div class="expand-link"><a href="#">expand</a></div>',
  lessLink: '<div class="collapse-link"><a href="#">collapse</a></div>'
});
	
$('.skill-toggle').readmore({
  speed: 500,
  moreLink: '<div class="more-skill"></div>',
  lessLink: '<div class="less-skill"></div>'
});
	
$('.more-skill').click(function (e) {
      $(".expand-alert").animate({ opacity: 0 })
});

// typing, skill tally scripts 

 $('.web-dev').typeIt({
     strings: 'front-end developer + designer in Seattle, WA',
     speed: 100,
     autoStart: false, 
	 lifeLike: true,
	 cursor: true
});

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

$(document).ready(function() {
    
function isScrolledIntoView(element) {
    var scrollBottomPosition = $(window).scrollTop() + $(window).height();
    return ($(element).offset().top < scrollBottomPosition);
}

function addClassIfVisible(element) {
	$(element).each(function () {      
        if (isScrolledIntoView(this)) {
          $(this).addClass('is-visible');
        }
    });
}

addClassIfVisible('.expand-alert');

$(window).scroll(function () {
    addClassIfVisible('.expand-alert');
});
    
});