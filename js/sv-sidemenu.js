( function ( $ ) {
    $( '.actOpenSidemenu' ).on( 'click', function() {
        $( '.sidemenu-container' ).toggleClass( 'opened' );

        if ( ! $( '.sidemenu-container' ).hasClass( 'opened' ) ) {
            $( '.drawer-menu' ).removeClass( 'opened' );
        }
    } );

    $( '.actOpenDrawer' ).on( 'click', function() {
        var id = '#' + $( this ).data( 'id' );
        $( '.drawer-menu:not('+id+')' ).removeClass( 'opened' );
        $( id ).toggleClass( 'opened' );
    } );

    $( '.actChangeSrcVtxTheme' ).on( 'click', function() {
        var theme = $( this ).data( 'theme' );
        $( 'html' ).removeClass( 'srcvtx_theme_dark' );
        $( 'html' ).removeClass( 'srcvtx_theme_light' );
        $( 'html' ).addClass( 'srcvtx_theme_' + theme );

        localStorage.setItem('srcvtx_theme', theme);
    } );
} )( jQuery );