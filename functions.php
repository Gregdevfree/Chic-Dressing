<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

function remove_ashe_google_fonts() {
    wp_dequeue_style('ashe-fontello-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-playfair-font');
}
add_action('wp_enqueue_scripts', 'remove_ashe_google_fonts', 999);

?>
