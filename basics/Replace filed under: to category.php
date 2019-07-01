<?php
//* Customize Entry Meta Filed Under and Tagged Under - remove the <?php

add_filter( 'genesis_post_meta', 'ig_entry_meta_footer' );
function ig_entry_meta_footer( $post_meta ) {
	$post_meta = '[post_categories before="Categories: "] [post_tags before="Tags: "]';
	return $post_meta;
}
