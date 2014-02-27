<?php  
  // TEMPLATE NAME: Front page
?>

<?php get_header(); ?>

  <?php  
    $culture_page = new WP_Query( 'pagename=about-symbio' );

    while ( $culture_page->have_posts() ) {
      $culture_page->the_post();
  ?>

    <section class="section">
      <div class="container">
     
        <h2 class="kilo"><?php echo the_field('frontpage_title'); ?></h2>

        <p><?php echo the_field('frontpage_intro') ?> <a href="<?php the_permalink(); ?>">Learn more</a></p>
     
      </div>
    </section>

  <?php } wp_reset_postdata(); ?>

    <section class="section section--grey">

      <?php  
        $culture_page = new WP_Query( 'pagename=culture' );

        while ( $culture_page->have_posts() ) {
          $culture_page->the_post();
      ?>
  
        <div class="container">
          <h2 class="kilo"><?php echo the_field('frontpage_title'); ?></h2>

          <p><?php echo the_field('frontpage_intro'); ?></p>
        </div>

      <?php } wp_reset_postdata(); ?>

      <div class="flush--center nine-tenths">
  
        <ul class="culture-list">

        <?php
          query_posts( array( 'post_type' => 'value', 'showposts' => -1 ) );
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

      <div class="container">
        <p>We get stuff done. We have fun. We test. We learn. We work well together. We think big. We care about the product we are building. We push boundaries.</p>

        <p>We love what we do & we take the time to do it right. <a href="/culture">Wanna know more?</a></p>
      </div>

    </section>

<?php get_footer(); ?>
