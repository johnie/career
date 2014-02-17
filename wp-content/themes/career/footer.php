  </main><!-- /.main -->
  
</div><!--/.page -->

<div class="nav-overlay">

  <nav class="navigation">
    
    <?php

      $defaults = array(
        'container'       => 'div',
        'container_class' => 'menu-wrap',
        'container_id'    => '',
        'menu_class'      => 'nav nav--stacked main-menu',
      );

      wp_nav_menu( $defaults );

    ?>  

  </nav>

</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url' ); ?>/js/master.js"></script>
</body>
</html>
