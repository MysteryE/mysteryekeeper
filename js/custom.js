// lazyload using Lozad JS
const observer = lozad('.lozad', {
	loaded: function(el) {
        // Custom implementation on a loaded element
        el.classList.add('loaded');
        console.log('loading element');
    }
});
observer.observe();

$(document).ready(function() {

	// animate on scroll - using AOS JS
	AOS.init({
		// add option here if you want
		duration: 1000
	});

	// use this for fixed header animation (on page load) - or remove this if not using it
	if ( $(window).scrollTop() > 50 ) {
		// do something
		$("#web-header").addClass("stuck");
	} else {
		$("#web-header").removeClass("stuck");
	}
	// use this for fixed header animation (on scroll) - or remove this if not using it
	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();
		
		if ( scrollTop > 50 ) {
			// do something
			$("#web-header").addClass("stuck");
		} else {
			$("#web-header").removeClass("stuck");
		}
	});

	// open search
	$(document).on('click','.search-toggle', function(e){
		$("#search-box").addClass("opened");
		setTimeout(
		  function() 
		  {
		    // focus on input text (not working on iOS)
		    $("#search-input-text").focus();
		  }, 600);
		e.preventDefault();
	});
	// close search
	$(document).on('click','.close-search', function(e){
		$("#search-box").removeClass("opened");
		e.preventDefault();
	});
	// open language
	$(document).on('click','.lang-select', function(e){
		$("#lang-box").addClass("opened");
		e.preventDefault();
	});
	// close language
	$(document).on('click','.close-lang', function(e){
		$("#lang-box").removeClass("opened");
		e.preventDefault();
	});

	// homepage toggle menu
	$(document).on('click','.menu-toggle', function(e){
		if( $("#header_side").hasClass("opened") ) {
			$("#header_side").removeClass("opened");
			$("#header_mobile").removeClass("closed");
		} else {
			$("#header_side").addClass("opened");
			$("#header_mobile").addClass("closed");
		}
		e.preventDefault();
	});
	$(document).on('click','.close-header', function(e){
		$("#header_side").removeClass("opened");
		$("#header_mobile").removeClass("closed");
		e.preventDefault();
	});

	// menu accordion
	$(document).on('click','#main-nav li.has-sub > a', function(e){
		if( $(this).hasClass("opened") ) {
			$(this).removeClass("opened");
			$(this).next(".sub-nav").slideUp("fast");
		} else {
			$(this).addClass("opened");
			$(this).next(".sub-nav").slideDown("fast");
		}
		e.preventDefault();
	});
});

// call AOS on page load
window.addEventListener('load', AOS.refresh);
