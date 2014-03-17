<?php get_header(); ?>

  <div class="section fourohfour">
    <div class="container  ">
      <h1>You've caught us with our pants down!</h1>
      <div class="grid">
        <div class="grid__item one-half">
          <p>Well, this is embarrassing. We can't find the page you asked for. <br> <strong>Bad link? Mistyped address?</strong> We're not sure.</p>

      <p>Perhaps <a href="<?php echo get_home_url(); ?>">going back</a> to the start page will get you on your way. If you think something is wrong, <a href="<?php echo 'mailto:' . get_option( 'admin_email' ); ?>">contact us</a>.</p>
        </div>
        <div class="grid__item one-half">
          <img src="http://media.giphy.com/media/aKYpYXhR6kH1S/giphy.gif" alt="Oh no!" width="100%" height="auto">
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
