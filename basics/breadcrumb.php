<?php
//remove the <?php 
function b3m_prefix_breadcrumb( $args ) {
  $args['labels']['prefix'] = '';
  
  return $args;
}
add_filter( 'genesis_breadcrumb_args', 'b3m_prefix_breadcrumb' );

function b3m_change_breadcrumb_separator( $args ) {
    $args['sep'] = ' &rsaquo; ';
    return $args;
  }
  add_filter( 'genesis_breadcrumb_args', 'b3m_change_breadcrumb_separator' );

  
