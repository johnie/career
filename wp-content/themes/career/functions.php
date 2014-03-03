<?php if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
function remove_head_links() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
}
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');
add_theme_support('menus');
// ADD THEME OPTIONS
require_once ( TEMPLATEPATH . '/theme-options.php' );
// ADD CUSTOM META BOX
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add() {
  add_meta_box( 'my-meta-box-id', 'Custom Page Styles', 'cd_meta_box_cb', 'post', 'normal', 'high' );
  add_meta_box( 'my-meta-box-id', 'Custom Page Styles', 'cd_meta_box_cb', 'position', 'normal', 'high' );
  add_meta_box( 'my-meta-box-id', 'Custom Page Styles', 'cd_meta_box_cb', 'page', 'normal', 'high' );
}
function cd_meta_box_cb( $post ) {
  $values         = get_post_custom( $post->ID );
  $header_image   = isset( $values['header_image'] ) ? esc_attr( $values['header_image'][0] ) : '';
  $header_color   = isset( $values['header_color'] ) ? esc_attr( $values['header_color'][0] ) : '';
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
  ?>

  <p>
    <label for="header_image">Header Image</label>
    <input type="text" name="header_image" id="header_image" placeholder="http://" class="widefat" value="<?php echo $header_image; ?>">
  </p>

  <p>
    <label for="header_color">Header Color</label>
    <input type="text" name="header_color" id="header_color" placeholder="#BADA55" class="widefat" value="<?php echo $header_color; ?>">
  </p>

  <?php
}
add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id ) {
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
  if( !current_user_can( 'edit_post' ) ) return;

  $allowed = array(
    'a' => array(
      'href' => array()
    )
  );

  if( isset( $_POST['header_image'] ) )
    update_post_meta( $post_id, 'header_image', wp_kses( $_POST['header_image'], $allowed ) );
  if( isset( $_POST['header_color'] ) )
    update_post_meta( $post_id, 'header_color', wp_kses( $_POST['header_color'], $allowed ) );
}
