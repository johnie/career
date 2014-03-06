<?php  
  // TEMPLATE NAME: Team
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

  <section>
    <div class="nine-tenths  flush--center">
      <div class="grid  team">

        <?php
          query_posts( array( 'post_type' => 'team', 'showposts' => -1 ) );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

          <div class="grid__item  one-third  employee">
            <figure class="employee__figure">
              <a href="<?php the_permalink(); ?>" class="employee__readmore"><div class="readmore__wrap">More about <span><?php $title = current(explode(' ', get_the_title())); echo $title; ?><span></div></a>
              <?php $employeeImage = get_field('employee_image');?>
              <img class="employee__image" src="<?php echo $employeeImage["sizes"]["medium"]; ?>" alt="<?php echo $employeeImage["alt"]; ?>">
            </figure>

            <hgroup class="employee__tag">
              <h4 class="employee__name"><?php the_title(); ?> <small class="employee__title"><?php the_field('employee_title'); ?></small></h4>
            </hgroup>

            <small class="employee__excerpt">
              <?php the_excerpt(); ?>
            </small>
          </div>

        <?php endwhile; endif; wp_reset_query(); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
