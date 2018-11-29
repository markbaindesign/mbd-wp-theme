/*
=====================================================

Remove No-JS

=====================================================
*/	

document.documentElement.className = 
document.documentElement.className.replace("no-js","js");

jQuery( document ).ready( function( $ ) {

	/**
	 * Animations
	 */

	AOS.init();

	// Posts	
	$( ".posts .post article" ).attr({
		"data-aos":"fade-down",
		"data-aos-duration":"500",
		"data-aos-delay":"500",
		"data-aos-once":"true"
	});

	// Nav links
	$( ".archive-nav .read-more" ).attr({
		"data-aos":"fade",
		"data-aos-duration":"1500",
		"data-aos-delay":"500",
		"data-aos-once":"true"
	});

	// Footer .menu
	$( ".site-footer .menu" ).attr({
		"data-aos":"fade",
		"data-aos-duration":"500",
		"data-aos-delay":"500",
		// "data-aos-once":"true"
	});

	// Footer .site-info
	$( ".site-footer .site-info" ).attr({
		"data-aos":"fade",
		"data-aos-duration":"500",
		"data-aos-delay":"800",
		// "data-aos-once":"true"
	});

	// Footer .form
	$( ".site-footer .form" ).attr({
		"data-aos":"fade",
		"data-aos-duration":"500",
		"data-aos-delay":"1100",
		// "data-aos-once":"true"
	});

	// Footer .social-media-links
	$( ".site-footer .social-media-links" ).attr({
		"data-aos":"fade",
		"data-aos-duration":"500",
		"data-aos-delay":"1300",
		"data-aos-easing":"ease-in-out",
		// "data-aos-once":"true"
	});


	/*
	=====================================================

	Back to top scrolling

	=====================================================
	*/		


/*
	// scroll body to 0px on click
	$('#back-to-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
*/

	/*
	=====================================================

	Responsive Nav

	=====================================================
	*/	


/*

	 var navigation2 = responsiveNav(".hidden-search", {
		 customToggle: "search-toggle",
		 navClass: "hidden-search", // String: Default CSS class. If changed, you need to edit the CSS too!
		 navActiveClass: "js-search-active", //
	 });
	 */
	 
	/*
	var navigation1 = responsiveNav(".main-navigation", {
		customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
		 // Swapping no-js to js with script instead
		 // openPos: "static",
	});
	*/


/*
	=====================================================

	Local Scroll

	=====================================================
	*/	

/*
 		// Local Scroll //
		$('.hero-cta').localScroll({
			duration: 1000
		});
*/

/*
	=====================================================

	FitVids

	=====================================================
	*/	

	// Target your .container, .wrapper, .post, etc.
	// $(".section").fitVids();

/*
	=====================================================

	Match Height

	=====================================================
*/

/*	$(window).on('resize',function() {
	    if ( $(window).width() > 479) {	    
		    $('.media-object').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		    $('media-object-group-1 .media-object').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		}
	});
	
	$(window).trigger('resize'); */


	/*
	=====================================================
			
			Wrap all links in <span> for styling
		
	=====================================================
	*/	

		// $( "a" ).wrapInner( "<span></span>" );



	/*
	===============================================
			
			Navicons config
		
	===============================================
	*/	

	/* (function() {
		// initialize all
		
		[].slice.call( document.querySelectorAll( '.si-icons-default > .si-icon' ) ).forEach( function( el ) {
			var svgicon = new svgIcon( el, svgIconConfig );
		} );

		new svgIcon( document.querySelector( '.si-icons-easing .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );

		// new svgIcon( document.querySelector( '.si-icons-hover si-icon-nav-right-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
		// new svgIcon( document.querySelector( '.si-icons-hover .si-icon-nav-up-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
	})(); */


	/*
	=====================================================
			
			mmenu
		
	=====================================================
	*/	

	// Main Menu

	$("#offcanvas-main-nav").mmenu({
	   	// options
	   	"extensions": [ 
			"fx-menu-slide",
            "fx-panels-slide-up",
            "fx-listitems-slide",
		   	"pagedim-black",
		   	"position-front",
            "position-right",
            "shadow-page",
            "shadow-panels",
            "theme-dark"
	   	],
	   	"iconPanels": true  

	});

	/*
	=====================================================
			
			Opacity on scroll
			
			https://codepen.io/michaeldoyle/pen/Bhsif/
		
	=====================================================
	*/	
/* 
	var header = $('.cover');
	var range = 200;

	$(window).on('scroll', function () {
	  
	    var scrollTop = $(this).scrollTop();
	    var offset = header.offset().top;
	    var height = header.outerHeight();
	    offset = offset + height / 2;
	    var calc = 1 - (scrollTop - offset + range) / range;
	  
	    header.css({ 'opacity': calc });
	  
	    if ( calc > '1' ) {
	      header.css({ 'opacity': 1 });
	    } else if ( calc < '0º' ) {
	      header.css({ 'opacity': 0 });
	    }
	  
	}); */


	/*
	=====================================================
			
			Parallax
		
	=====================================================
	*/
/*
	$('.mailchimp-form').parallax({
		imageSrc: (assets_dir.stylesheet_directory_uri) + '/assets/images/stones.jpg',
		speed: 0.13
	});
*/
}); 

