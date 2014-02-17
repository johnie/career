<?php get_header(); ?>

  <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <article class="article article--single container">

      <h1 class="single-page--title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

    </article>

  <?php endwhile; ?>
      
  <?php endif; ?>

<?php get_footer(); ?>
