<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/style.css">
    

    <title><?php bloginfo('name'); ?></title>

    <script src="https://kit.fontawesome.com/1c337c1bea.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 

<?php if(is_product()){ ?>

//custom header would go here

      <div class="container">
            
            <!-- Header Background Img -->

            <?php global $wp_query;
            $cat = $wp_query->get_queried_object();
            $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 
            $background_image = wp_get_attachment_url( $thumbnail_id ); ?>

            
            <div class="row" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

            
               	<!-- Logo Icon for Header -->
                   <div class="col-lg-6 logo-container">
                    <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Company Logo"/></a>
                </div>


                <!-- Menu for Header -->
                <div class="col-lg-6 navigation">
                        <nav class="custom-menu-class">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu'
                                ));
                            ?>
                        </nav>
                </div>
                
                <!-- Title of Page -->
                <div class="div">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                </div>     
                

            </div>
        </div>
    </header>

  <?php }else{ ?>

  //copy and paste the parent theme header here.

  <header>
        <div class="container">
            
            <!-- Header Background Img -->
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post ->ID), 'full') ;?>
            
            <div class="row" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

            
               	<!-- Logo Icon for Header -->
                   <div class="col-lg-6 logo-container">
                    <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Company Logo"/></a>
                </div>


                <!-- Menu for Header -->
                <div class="col-lg-6 navigation">
                        <nav class="custom-menu-class">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu'
                                ));
                            ?>
                        </nav>
                </div>
                
                <!-- Title of Page -->
                <div class="div">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                </div>     
                

            </div>
        </div>
    </header>

 <?php }?>