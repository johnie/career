<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <script src="<?php bloginfo('template_url' ); ?>/js/modernizr.js"></script>
  <script type="text/javascript" src="//use.typekit.net/iau6lvh.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
  <?php include (TEMPLATEPATH . '/parts/global-site-styles.php' ); ?>
</head>

<body <?php body_class(); ?>>

<div class="page">

  <header class="header">

  <?php if(is_front_page()) { ?>
  
    <section class="teaser">
      <h2 class="teaser__title">Be part of the Symbio journey.</h2>
      <p class="teaser__text">We are in exciting times at Symbio. Do you want to join us for the ride? We need help in several key areas.</p>
      <a href="#apply" class="teaser__btn btn btn--small btn--orange">Work at Symbio</a>
    </section>

  <?php } ?>

  <?php if( !is_front_page() ) { ?>

    <hgroup class="single-page__callout">
      <h1 class="single-page--title"><?php echo get_the_title(); ?></h1>
    </hgroup>

  <?php } ?>

    <div class="nav-bar">
      <a href="<?php echo get_home_url(); ?>" class="logo--nav-bar" ><h1 class="logo logo--small logo--nav-bar"><?php bloginfo('name'); ?></h1></a>
      <a href="#" class="menu-btn" id="menu-btn"><span>Menu</span></a>
    </div>

    <section class="gradient-expander">
    </section>
  
  </header>

  <main class="main" role="main">
