<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navigation">
    
  <a href="#" class="menu-btn">Menu</a>
  
  <?php

    $defaults = array(
      'container'       => 'div',
      'container_class' => 'menu-wrap',
      'container_id'    => '',
      'menu_class'      => 'nav nav--stacked main-menu',
    );

    wp_nav_menu( $defaults );

  ?>  

</nav>

<div class="page">
  <header class="header">
    <div class="banner"></div>
    <div class="latest-jobs"></div>
  </header>
</div>
