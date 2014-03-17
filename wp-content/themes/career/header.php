<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/images/favicon.png">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <script src="<?php bloginfo('template_url' ); ?>/js/modernizr.js"></script>
  <script type="text/javascript" src="//use.typekit.net/zoc3xxu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
  <?php include (TEMPLATEPATH . '/parts/global-site-styles.php' ); ?>
</head>

<body <?php body_class(); ?>>

<div class="page">

  <header class="header">

  <?php if(is_front_page()) { ?>
  
    <section class="teaser">
      <?php  
        $front_page = new WP_Query( 'page_id=15' );

        while ( $front_page->have_posts() ) {
          $front_page->the_post();
      ?>
        <h2 class="teaser__title"><?php the_field('frontpage_title'); ?></h2>
        <p class="teaser__text"><?php the_field('frontpage_intro'); ?></p>
        <a href="#contact" class="teaser__btn btn btn--small btn--orange btn--soft">Work at Symbio</a>
      <?php } wp_reset_postdata(); ?>
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

    <section class="gradient-expander"></section>
  
  </header>

  <main class="main" role="main">
