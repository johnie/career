<?php 
  // TEMPLATE NAME: Open Positions
?>

<?php get_header(); ?>

  <?php include( TEMPLATEPATH . '/parts/custom-page-styles.php'); ?>

  <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <article class="article article--front container">

      <?php the_content(); ?>

    </article>

  <?php endwhile; ?>
      
  <?php endif; ?>

<?php get_footer(); ?>
