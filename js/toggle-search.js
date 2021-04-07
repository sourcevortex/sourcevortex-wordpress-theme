( function( $ ) {
    $( '.search-submit' ).on( 'click', function() {
        $( '.search-field' ).toggleClass( 'toggle-search' );

        if ( $( '.search-field' ).hasClass( 'toggle-search' ) ) {
            $( '.search-field' ).focus();
        }
    } );

    $( '.search-field' ).on( 'blur', function() {
        $( '.search-field' ).removeClass( 'toggle-search' );
    } );
} )( jQuery )