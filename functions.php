<?php

function wpb_catlist_desc() { 
$string = '<ul>';
$catlist = get_terms( 'category' );
if ( ! empty( $catlist ) ) {
  foreach ( $catlist as $key => $item ) {
    $string .= '<li>'. $item->name . '<br />';
    $string .= '<em>'. $item->description . '</em> </li>';
  }
}
$string .= '</ul>';
 
return $string; 
}
add_shortcode('wpb_categories', 'wpb_catlist_desc');