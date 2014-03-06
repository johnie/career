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

    <section class="section hard">
      
      <div class="gallery">
        
        <?php  
          $get_page = get_page_by_title( 'Gallery' );

          $args = array(
            'post_type' => 'attachment',
            'numberposts' => null,
            'post_status' => null,
            'orderby' => 'rand',
            'post_parent' => $get_page->ID,
            'numberposts' => -1,
            'post_status' => 'inherit'
          ); 
          $attachments = get_posts($args);
          if ($attachments) {
            foreach ($attachments as $attachment) {
        ?>
  
          <div class="gallery__item">
            <?php echo wp_get_attachment_image($attachment->ID, 'thumbnail'); ?>
          </div>

        <?php
            }
          }
        ?>

      </div> 
    
    </section>

    <section class="section">
      <?php
        $team_page = new WP_Query( 'pagename=team' );

        while ( $team_page->have_posts() ) {
          $team_page->the_post();
      ?>

        <div class="container">
          <h2 class="kilo"><?php echo the_field('frontpage_title'); ?></h2>
        </div>

      <?php } wp_reset_postdata(); ?>
      
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

            <div class="grid__item one-whole  team__more">
              <a href="/team" class="btn btn--small btn--orange btn--soft">Meet the rest of the team</a>
            </div>

          </div>
        </div>
    </section>

    <section class="section section--grey">
      <div class="nine-tenths flush--center">
        <div class="grid">
          <div class="grid__item two-fifths">
            <h3 class="beta">Are you the next Symbioker?</h3>

            <p class="krymp">We are looking for smart and talented individuals who want to contribute to our team in a big way. We want people who love the idea of chatting with clients and learning how to make our clients successful at what they do. Most of all, we want you to be passionate about working together with us to build something awesome!</p>
          </div>
          <div class="grid__item three-fifths">
            <h3 class="beta">Find your fit!</h3>

            <p>We are actively looking for new teammates in these positions:</p>

            <ul class="jobs-list block-list">

              <?php
                query_posts( array( 'post_type' => 'position', 'showposts' => -1, 'orderby' => 'date', 'order' => 'ASC' ) );
                if ( have_posts() ) : while ( have_posts() ) : the_post();
              ?>

                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

              <?php endwhile; endif; wp_reset_query(); ?>

            </ul>

            <p>If you don't see a perfect fit in our open positions, that's okay! You can still <a href="#contact">tell us</a> about your special talents and why we should make you the next Symbioker.</p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
