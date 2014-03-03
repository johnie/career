  </main><!-- /.main -->

<footer class="section  footer">
  <div class="eight-tenths  flush--center text--center">
    <div class="grid">
      <div class="grid__item  one-whole">
        <a href="#contact" class="btn btn--small btn--orange">Work with us?</a>
      </div>
      <div class="grid__item  one-whole">
        <ul class="footer-list  nav nav--banner">
          <li>&copy; <?php echo bloginfo( 'name' ); ?></li>
          <li><a href="mailto:carolina.emanuelson@symbio.com">carolina.emanuelson@symbio.com</a></li>
          <li>+46 72-302 49 14</li>
          <li>Klarabergsviadukten 63, Stockholm</li>
        </ul>
      </div>
    </div>
  </div>
</footer>
  
</div><!--/.page -->

<div class="nav-overlay">

  <nav class="navigation">

    <div class="nav-inner">
      <small class="nav-desc">
        Learn more
      </small>
      
      <?php

        $defaults = array(
          'container'       => 'div',
          'container_class' => 'menu-wrap',
          'container_id'    => '',
          'menu_class'      => 'nav nav--stacked main-menu',
        );

        wp_nav_menu( $defaults );

      ?>

      <small class="nav-desc">
        Connect with us
      </small>

      <ul class="social-menu  flexbox">
        <li class="flexbox__item"><a href="#">Facebook</a></li>
        <li class="flexbox__item"><a href="#">Twitter</a></li>
        <li class="flexbox__item"><a href="#">LinkedIn</a></li>
      </ul>
    </div>

  </nav>

</div>

<div class="form-overlay">
  <div class="contact-form__wrap">
    <div class="contact-form">
      <h3 class="c-title">Register your interest in a job interview with Symbio <div class="crosshair">Close</div></h3>
      <?php echo do_shortcode( '[contact-form-7 id="151" title="Apply"]' ); ?>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url' ); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/js/master.js"></script>
</body>
</html>
