<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light box-shadow mb-3 w-100 p-3">
              <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between" id="head-menu">
              <?php
            wp_nav_menu( array( 
              'theme_location' => 'header-menu', 
              'container_class' => 'my_extra_menu_class'
              )); 
            echo"<p>hello</p>";
            ?>
              </div>
              </div>
            </nav>
            
          </div>
        </div>
          
 </header>