( function( $ ) {
    $( '.search-submit' ).on( 'click', function() {
        if ( !( $( '.search-field' ).hasClass( 'toggle-search' ) ) ) {
            $( '.search-field' ).addClass( 'toggle-search' );
            $( '.search-field' ).focus();
        } else if ( $( '.desktop-search-container .search-field' ).val() ) {
            $( '.desktop-search-container .search-form' ).submit();
        }
    } );

    $( '.search-field' ).on( 'blur', function() {
        setTimeout( function() {
            $( '.search-field' ).removeClass( 'toggle-search' );
        }, 200 )
    } );
} )( jQuery )