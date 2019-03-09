$(document).ready(function(){
	$('.slider-wrapper').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	});
	
	$('.customer-feedbacks').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 1,
  	  slidesToScroll: 1
	});
	
	$(window).scroll(function(){
		var scrollval = $(window).scrollTop();
		if(scrollval > 0){
			$("header").addClass("slim-header");
		}else{
			$("header").removeClass("slim-header");
		}
	})

})