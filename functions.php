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

add_theme_support( 'post-thumbnails' );



// Load the theme stylesheets
function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	// wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

  // Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'style', get_template_directory_uri());
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'vendor', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'onecol', get_template_directory_uri() . '/assets/css/1-col-portfolio.css' );

	wp_enqueue_style( 'mainmain', get_template_directory_uri() . '/assets/css/main.css' );
	
	// Conditionally load the FlexSlider CSS on the homepage
	// if(is_page('home')) {
		// wp_enqueue_style('flexslider');
	// }

}
add_action('wp_enqueue_scripts', 'theme_styles');
