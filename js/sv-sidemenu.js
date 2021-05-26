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
        $( 'body' ).removeClass( 'srcvtx_theme_dark' );
        $( 'body' ).removeClass( 'srcvtx_theme_light' );
        $( 'body' ).addClass( 'srcvtx_theme_' + theme );

        localStorage.setItem('srcvtx_theme', theme);
    } );

    (function () {
        var theme = localStorage.getItem('srcvtx_theme');
        
        $( 'body' ).removeClass( 'srcvtx_theme_dark' );
        $( 'body' ).removeClass( 'srcvtx_theme_light' );
        $( 'body' ).addClass( 'srcvtx_theme_' + theme );
    } )();
} )( jQuery );