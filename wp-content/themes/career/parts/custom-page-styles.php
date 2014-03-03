<style>
<?php # Custom Page Styles ?>
<?php if ( get_post_meta(get_the_ID(), 'header_color', true) ) : ?>
  .header {background-color:<?php echo get_post_meta($post->ID, 'header_color', true); ?> !important;}
<?php endif; ?>
<?php if ( get_post_meta(get_the_ID(), 'header_image', true) ) : ?>
  .header { background-image: url('<?php echo get_post_meta($post->ID, 'header_image', true); ?>') !important;}
<?php endif; ?>
</style>
