<?php  
  // TEMPLATE NAME: Front page
?>

<?php get_header(); ?>

  <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <section class="section">
      <div class="container">
     
        <h2 class="kilo"><?php echo the_field('frontpage_title'); ?></h2>

        <p><?php echo the_field('frontpage_intro') ?><a href="<?php the_permalink(); ?>">Learn more</a></p>
     
      </div>
    </section>

  <?php endwhile; ?>
      
  <?php endif; ?>


  <?php  
    $culture_page = new WP_Query( 'pagename=culture' );

    while ( $culture_page->have_posts() ) {
      $culture_page->the_post();
  ?>

    <section class="section section--grey hard--sides">
      <div class="flush--center nine-tenths">


  <?php } wp_reset_postdata(); ?>
  
      <ul class="culture-list">

      <?php
        query_posts( array( 'post_type' => 'value', 'showposts' => 5 ) );
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      ?>

        <li class="cl__item  cl__item--<?php echo $slug = basename(get_permalink()); ?>">
          <div class="cl__item-wrap">
            <h3 class="cl__title"><?php echo the_title(); ?></h3>
            <small class="cl__text"><?php echo the_content(); ?></small>
          </div>
        </li>

      <?php endwhile; endif; wp_reset_query(); ?>

      </ul>

      </div>
    </section>


<?php get_footer(); ?>
