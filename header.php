<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo(title); ?></title>
     <?php wp_head(); ?>
     <link rel="stylesheet" href="<?php bloginfo(stylesheet_uri)?>" >
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#"><?php bloginfo( title ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
           <?php
            wp_nav_menu([
                'menu'              => 'Principal',
                'theme_location'    => 'Principal Menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarResponsive',
                'menu_class'        => 'nav navbar-nav ml-auto',
                'li_class'          => 'nav-item',
                'a_class'           => 'nav-link',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
                ]
            );
            
           ?>

              

           
          
    
      </div>
    </nav>