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
	});
	
	$(".menu").click(function(){
		$("body").addClass("bodylock");
		$(".fullpage-nav").addClass("open");
		setTimeout(function(){
			$(".fullpage-nav ul").addClass("open");
		}, 1000);
		setTimeout(function(){
			$(".fullpage-nav .nav-border img").addClass("open");
		}, 2000);
	});
	
	$(".menu-close").click(function(){
		$("body").removeClass("bodylock");
		$(".fullpage-nav").removeClass("open");
		$(".fullpage-nav ul").removeClass("open");
		$(".fullpage-nav .nav-border img").removeClass("open");
	});
	
	

})