<?php
//* Grid Style Search Results 

function search_results_post_class( $classes ) {
 // Don't run on single posts or pages
 if( !is_search() )
 return $classes;
 $classes[] = 'one-third';
 global $wp_query;
 if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
 $classes[] = 'first';
 return $classes;
}
add_filter( 'post_class', 'search_results_post_class' );
