( function ( $ ) {
    $( '.actChangeSrcVtxTheme' ).on( 'click', function() {
        var theme = $( this ).data( 'theme' );
        $( 'html' ).removeClass( 'srcvtx_theme_dark' );
        $( 'html' ).removeClass( 'srcvtx_theme_light' );
        $( 'html' ).addClass( 'srcvtx_theme_' + theme );
		$( '#mobile-theme-switch-input' ).prop( 'checked', theme === 'dark' );

        localStorage.setItem('srcvtx_theme', theme);
    } );
} )( jQuery );