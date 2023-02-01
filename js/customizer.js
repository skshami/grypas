/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );

	//Home intro Section
	//title
	wp.customize( 'home-intro-title', function( value ) {
		value.bind( function( to ) {
			$( '#home-into-title' ).html( to );
		} );
	} );
	//description
	wp.customize( 'home-intro-desc', function( value ) {
		value.bind( function( to ) {
			$( '#home-into-desc' ).html( to );
		} );
	} );

	//btn text
	wp.customize( 'intro-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#intro-btn' ).html( to );
		} );
	} );
	
	//expertise-title
	wp.customize( 'expertise-title', function( value ) {
		value.bind( function( to ) {
			$( '#expertise-title' ).html( to );
		} );
	} );
	//serve-title
	wp.customize( 'serve-title', function( value ) {
		value.bind( function( to ) {
			$( '#serve-title' ).html( to );
		} );
	} );
	//serve-desc
	wp.customize( 'serve-desc', function( value ) {
		value.bind( function( to ) {
			$( '#serve-desc' ).html( to );
		} );
	} );
	//testimonial-desc
	wp.customize( 'testimonial-title', function( value ) {
		value.bind( function( to ) {
			$( '#testimonial-title' ).html( to );
		} );
	} );
	//testimonial-desc
	wp.customize( 'testimonial-desc', function( value ) {
		value.bind( function( to ) {
			$( '#testimonial-desc' ).html( to );
		} );
	} );

	//principles
	wp.customize( 'principles-title', function( value ) {
		value.bind( function( to ) {
			$( '#principles-title' ).html( to );
		} );
	} );
	//principles-desc
	wp.customize( 'principles-desc', function( value ) {
		value.bind( function( to ) {
			$( '#principles-desc' ).html( to );
		} );
	} );
	//blog-title
	wp.customize( 'blog-title', function( value ) {
		value.bind( function( to ) {
			$( '#blog-title' ).html( to );
		} );
	} );
	//about-intro-title
	wp.customize( 'about-intro-title', function( value ) {
		value.bind( function( to ) {
			$( '#about-intro-title' ).html( to );
		} );
	} );
	//about-intro-title
	wp.customize( 'about-intro-desc', function( value ) {
		value.bind( function( to ) {
			$( '#about-intro-desc' ).html( to );
		} );
	} );

	wp.customize( 'about-team-title', function( value ) {
		value.bind( function( to ) {
			$( '#about-team-title' ).html( to );
		} );
	} );
	wp.customize( 'about-strategies-title', function( value ) {
		value.bind( function( to ) {
			$( '#about-strategies-title' ).html( to );
		} );
	} );
	wp.customize( 'about-strategies-desc', function( value ) {
		value.bind( function( to ) {
			$( '#about-strategies-desc' ).html( to );
		} );
	} );
	wp.customize( 'principle-slider-Second-heading', function( value ) {
		value.bind( function( to ) {
			$( '#principle-slider-Second-heading' ).html( to );
		} );
	} );
	wp.customize( 'principle-slider-heading', function( value ) {
		value.bind( function( to ) {
			$( '#principle-slider-heading' ).html( to );
		} );
	} );
	wp.customize( 'principles-intro-desc', function( value ) {
		value.bind( function( to ) {
			$( '#principles-intro-desc' ).html( to );
		} );
	} );
	wp.customize( 'principles-intro-title', function( value ) {
		value.bind( function( to ) {
			$( '#principles-intro-title' ).html( to );
		} );
	} );
	wp.customize( 'principles-intro-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#principles-intro-btn-text' ).html( to );
		} );
	} );
	wp.customize( 'career-heading', function( value ) {
		value.bind( function( to ) {
			$( '#career-heading' ).html( to );
		} );
	} );
	wp.customize( 'brand-heading', function( value ) {
		value.bind( function( to ) {
			$( '#brand-heading' ).html( to );
		} );
	} );



	wp.customize( 'contact-location', function( value ) {
		value.bind( function( to ) {
			$( '#contact-location' ).html( to );
		} );
	} );
	wp.customize( 'contact-mail', function( value ) {
		value.bind( function( to ) {
			$( '#contact-mail' ).html( to );
		} );
	} );
	wp.customize( 'contact-phone', function( value ) {
		value.bind( function( to ) {
			$( '#contact-phone' ).html( to );
		} );
	} );
	wp.customize( 'footer-desc', function( value ) {
		value.bind( function( to ) {
			$( '#footer-desc' ).html( to );
		} );
	} );
	wp.customize( 'footer-addres', function( value ) {
		value.bind( function( to ) {
			$( '#footer-addres' ).html( to );
		} );
	} );
	wp.customize( 'footer-copyright', function( value ) {
		value.bind( function( to ) {
			$( '#footer-copyright' ).html( to );
		} );
	} );


	wp.customize( 'font-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#font-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'font-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#font-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'font-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#font-hero-btn-text' ).html( to );
		} );
	} );
	wp.customize( 'about-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#about-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'about-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#about-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'about-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#about-hero-btn-text' ).html( to );
		} );
	} );

	wp.customize( 'brands-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#brands-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'brands-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#brands-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'brands-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#brands-hero-btn-text' ).html( to );
		} );
	} );

	wp.customize( 'career-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#career-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'career-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#career-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'career-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#career-hero-btn-text' ).html( to );
		} );
	} );

	wp.customize( 'priciples-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#priciples-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'priciples-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#priciples-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'priciples-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#priciples-hero-btn-text' ).html( to );
		} );
	} );
	wp.customize( 'blog-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#blog-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'blog-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#blog-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'blog-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#blog-hero-btn-text' ).html( to );
		} );
	} );
	wp.customize( 'contact-hero-desc', function( value ) {
		value.bind( function( to ) {
			$( '#contact-hero-desc' ).html( to );
		} );
	} );
	wp.customize( 'contact-hero-title', function( value ) {
		value.bind( function( to ) {
			$( '#contact-hero-title' ).html( to );
		} );
	} );
	wp.customize( 'contact-hero-btn-text', function( value ) {
		value.bind( function( to ) {
			$( '#contact-hero-btn-text' ).html( to );
		} );
	} );

	
}( jQuery ) );
