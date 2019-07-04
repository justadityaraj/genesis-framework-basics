<?php
//remove page titles from specific pages, remove the <?php before pasting

add_action( 'get_header', 'remove_titles_from_pages' );
function remove_titles_from_pages() {
    if ( is_page(array('contact', 'about') ) ) {
        remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    }
}
