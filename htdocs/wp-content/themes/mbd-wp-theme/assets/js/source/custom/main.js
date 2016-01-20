jQuery( document ).ready( function( $ ) {

	/*
	=====================================================

	Remove No-JS

	=====================================================
	*/	
	
	document.documentElement.className = 
	document.documentElement.className.replace("no-js","js");


	/*
	=====================================================

	Back to top scrolling

	=====================================================
	*/		



	// scroll body to 0px on click
	$('#back-to-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});


	/*
	=====================================================

	Responsive Nav

	=====================================================
	*/	



	
	 var navigation2 = responsiveNav(".hidden-search", {
		 customToggle: "search-toggle",
		 navClass: "hidden-search", // String: Default CSS class. If changed, you need to edit the CSS too!
		 navActiveClass: "js-search-active", //
	 });
	 

	var navigation1 = responsiveNav(".main-navigation", {
		customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
		 // Swapping no-js to js with script instead
		 // openPos: "static",
	});





	/*
	=====================================================

	Google Fonts 

	=====================================================
	*/	


	WebFontConfig = {
	    google: { families: [ 'Raleway:400,300,200:latin' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); 



	/*
	=====================================================

	Wow.js

	=====================================================
	*/	


	// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
	// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

	// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

	// MIT license

	(function() {
	    var lastTime = 0;
	    var vendors = ['ms', 'moz', 'webkit', 'o'];
	    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
	        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
	        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
	                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
	    }

	    if (!window.requestAnimationFrame)
	        window.requestAnimationFrame = function(callback, element) {
	            var currTime = new Date().getTime();
	            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
	            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
	              timeToCall);
	            lastTime = currTime + timeToCall;
	            return id;
	        };

	    if (!window.cancelAnimationFrame)
	        window.cancelAnimationFrame = function(id) {
	            clearTimeout(id);
	        };
	}());

	new WOW().init();


/*
	=====================================================

	Local Scroll

	=====================================================
	*/	


 		// Local Scroll //
		$('.hero-cta').localScroll({
			duration: 1000
		});


/*
	=====================================================

	FitVids

	=====================================================
	*/	

	// Target your .container, .wrapper, .post, etc.
	$(".entry-content").fitVids();

/*
	=====================================================

	Match Height

	=====================================================
*/

	$(window).on('resize',function() {
	    if ( $(window).width() > 479) {	    
		    $('#categories-front .media-object').matchHeight({
		    	byRow: true,
		    	target: $('#categories-front .media-object:nth-of-type(10n+2)')
			});
		    $('.match-height').matchHeight({
		    	byRow: true,
		    	// target: $('#categories-front .media-object:first-of-type')
			});
		}
	});
	
	$(window).trigger('resize');

	/*
	===============================================
			
			Navicons config
		
	===============================================
	*/	

	(function() {
		// initialize all
		
		[].slice.call( document.querySelectorAll( '.si-icons-default > .si-icon' ) ).forEach( function( el ) {
			var svgicon = new svgIcon( el, svgIconConfig );
		} );

		new svgIcon( document.querySelector( '.si-icons-easing .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );

		// new svgIcon( document.querySelector( '.si-icons-hover si-icon-nav-right-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
		new svgIcon( document.querySelector( '.si-icons-hover .si-icon-nav-up-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
	})();


	/*
	=====================================================
			
			Masonry.js
		
	=====================================================
	*/	



		// initialize Masonry

		$container = $('.masonrycontainer').masonry({
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			itemSelector: ".media-object"
		
		});
		
		// layout Masonry again after all images have loaded
		
		$container.imagesLoaded( function() {
		$container.masonry();
		});

	/*
	=====================================================

	Headroom.js 

	=====================================================
	*/	



	// grab an element
	var myElement = document.querySelector(".site-header.sticky-header");
	// construct an instance of Headroom, passing the element
	var headroom = new Headroom(myElement, {
		"offset": 105,
		 "tolerance": 5,
		 "classes": {
			 "initial": "animated",
		 // "top": "headroom--top slideUp",
		 //	"notTop": "headroom--not-top slideDown"
		 }
	});
	// initialise
	headroom.init(); 	

}); 