<?php
 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

           function my_theme_enqueue_styles()
           {

               $parent_style = 'parent-style'; 

                     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

                     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));

            }
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20);



// Custom Header Image 
$custom_image_header = array(
    'width' => 500,
    'height' => 500,
    'uploads' => true
); 

add_theme_support('custom-header', $custom_image_header);




            ?>

            
