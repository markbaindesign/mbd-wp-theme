/*
=====================================================

Remove No-JS

=====================================================
*/	

document.documentElement.className = 
document.documentElement.className.replace("no-js","js");

jQuery( document ).ready( function( $ ) {



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
	    google: { families: [ 'Lato|Montserrat:400,700' ] }
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
	$(".content-video").fitVids();

/*
	=====================================================

	Match Height

	=====================================================
*/

	$(window).on('resize',function() {
	    if ( $(window).width() > 479) {	    
		    $('.media-object header').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		    $('.media-object article p').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		    $('.media-object article ul').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		}
	});
	
	$(window).trigger('resize');


	/*
	=====================================================
			
			Wrap all links in <span> for styling
		
	=====================================================
	*/	

		$( "a" ).wrapInner( "<span></span>" );



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
		
		// new svgIcon( document.querySelector( '.si-icons-hover .si-icon-nav-up-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
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


	

}); 