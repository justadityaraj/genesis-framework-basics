<?php
// Enqueue To Top script

add_action( 'wp_enqueue_scripts', 'to_top_script' );
function to_top_script() {
    wp_enqueue_script( 'to-top', get_stylesheet_directory_uri() . '/js/to-top.js', array( 'jquery' ), '1.0', true );
}

// Add To Top button
add_action( 'genesis_before', 'genesis_to_top');
	function genesis_to_top() {
	 echo '<a href="#0" class="to-top" title="Back To Top">Top</a>';
}
