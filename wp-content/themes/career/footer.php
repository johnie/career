  </main><!-- /.main -->
  
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

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url' ); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/js/master.js"></script>
</body>
</html>
