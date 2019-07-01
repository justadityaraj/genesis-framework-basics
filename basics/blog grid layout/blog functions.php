//* Grid Style Content Archive 

function be_archive_post_class( $classes ) {
 // Don't run on single posts or pages
 if( !is_home() ) 
 return $classes;
 $classes[] = 'one-half';
 global $wp_query;
 if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 2 )
 $classes[] = 'first';
 return $classes;
}
add_filter( 'post_class', 'be_archive_post_class' );

function he_archive_post_class( $classes ) {
 // Don't run on single posts or pages
 if( !is_category() )
 return $classes;
 $classes[] = 'one-half';
 global $wp_query;
 if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 2 )
 $classes[] = 'first';
 return $classes;
}
add_filter( 'post_class', 'he_archive_post_class' );
