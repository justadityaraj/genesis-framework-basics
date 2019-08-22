<?php
//* Do NOT include the opening php tag shown above. Copy the code shown below.

//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

<?php //<= remove this
// Add featured image on single post
add_action( 'genesis_entry_content', 'themeprefix_featured_image', 1 );
function themeprefix_featured_image() {
	$add_single_image = get_theme_mod( 'themeprefix_single_image_setting', true ); //sets the customizer setting to a variable
	$image = genesis_get_image( array( // more options here -> genesis/lib/functions/image.php
			'format'  => 'html',
			'size'    => 'large',// add in your image size large, medium or thumbnail - custom size => array(300, 450, true),
			'context' => '',
			'attr'    => array ( 'class' => 'aligncenter' ), // set a default WP image class
			
		) );
	if ( is_singular() && ( true === $add_single_image ) ) {
		if ( $image ) {
			printf( '<div class="featured-image-class">%s</div>', $image ); // wraps the featured image in a div with css class you can control
		}
	}
}
// www.wprumors.com - adityaraj.com

