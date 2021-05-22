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
} )( jQuery );