/*
=====================================================

Remove No-JS

=====================================================
*/	

document.documentElement.className = 
document.documentElement.className.replace("no-js","js");



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

