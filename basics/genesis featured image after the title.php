<?php
//* Do NOT include the opening php tag
function featured_post_image() {
 if ( ! is_singular( 'post' ) ) return;
 the_post_thumbnail('post-image');
}
// Display featured image below title on the single post in Genesis 
add_action( 'genesis_entry_content', 'featured_post_image', 8 );
