<?php get_header(); ?>

<?php 
  // TEMPLATE NAME: Gallery Page
?>

<?php 
  
  $args = array(
    'numberposts' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_mime_types' => 'image',
    'post_parent' => $post->ID,
    'post_status' => null,
    'post_type' => 'attachment'
  );

  $images = get_children( $args );

  if($images) {

?>

  <div class="gallery">
    <?php foreach ($images as $image) { ?>
      <div class="gallery__item">
        <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
      </div>
    <?php } ?>
  </div>

<?php } ?>

<?php get_footer(); ?>
