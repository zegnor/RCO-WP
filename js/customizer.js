/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {


	// primary color.
	wp.customize( 'theme_bg_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1, h2, h3, h4, h6, .nav-button-scrolled, .map-link, .wp-caption-text' ).css( {
				'color': to
			} );
                        $( '.nav-button, #global-button-click, .mobile-menu, .mobile-dropdown' ).css( {
				'background-color': to
			} );
                        $( '.section-page, #landing_page, .main-menu-nav-scrolled' ).css( {
				'border-bottom-color': to
			} );
                        $( '.staff-image, .donation-image, iframe, img, .site-footer' ).css( {
				'border-color': to
			} );
		} );
	} );
        
        // header and footer.
	wp.customize( 'theme_head_foot_color', function( value ) {
		value.bind( function( to ) {
                        $( '.site-footer, .main-menu-nav-scrolled' ).css( {
				'background-color': to
			} );
		} );
	} );
        
        // header and footer text.
	wp.customize( 'theme_second_text_color', function( value ) {
		value.bind( function( to ) {
                        $( '.footer-text, .partner-, .nav-button' ).css( {
				'color': to
			} );
		} );
	} );


} )( jQuery );
