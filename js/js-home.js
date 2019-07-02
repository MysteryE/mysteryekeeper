$(document).ready(function() {
	// execute when document ready 
	$('#hero-slider').on('init', function(event, slick, currentSlide, nextSlide){
		$('.slick-active').addClass('show');
		// $("#hero-slider .slick-slide").removeClass("active");
		// $("#hero-slider .slick-current").addClass("active");
	});
	$('#hero-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  nextArrow: '.arrow-next',
	  prevArrow: '.arrow-prev',
	  dots: true,
	  // autoplay: true,
	  autoplaySpeed: 6000,
	  speed: 800,
	  lazyLoad: 'ondemand',
	  adaptiveHeight: true
	});
	$('#hero-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
		$('.slick-slide').removeClass('show');
		$('.slick-active').addClass('show');
		// $("#hero-slider .slick-slide").removeClass("active");
		// $("#hero-slider .slick-current").addClass("active");
		if ($('.slick-active .item').data('color') === 'dark') {
			// alert("dark bg");
			$(".logo-container, .menu-container").addClass("inverted");
		} else {
			$(".logo-container, .menu-container").removeClass("inverted");
		}
	});

	$('.home-product-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		arrows: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 1000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					arrows: false
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]

	});

	$('.home-news-carousel').slick({
		infinite: true,
		slidesToShow: 2,
		arrows: true,
		dots: false,
		nextArrow: ".next-news",
		prevArrow: ".prev-news",
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 1000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					dots: true
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
				}
			}
		]
	});

	$('.client-list').slick({
		infinite: true,
		slidesToShow: 6,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		lazyLoad: 'ondemand',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 540,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});
});
