<?php 

// Default option values
$symbio_options = array(
  'header-background-image' => '',
  'header-background-color' => ''
);

if ( is_admin() ) :

function symbio_register_settings() {
  register_setting( 'symbio_theme_options', 'symbio_options', 'symbio_validate_options' );
}

add_action( 'admin_init', 'symbio_register_settings' );

function symbio_theme_options() {
  add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'symbio_theme_options_page' );
}

add_action( 'admin_menu', 'symbio_theme_options' );

function symbio_theme_options_page() {
  global $symbio_options, $symbio_categories, $symbio_layouts;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; ?>

  <div class="wrap">
    
    <?php echo "<h2>" . "Symbio" . __( ' Theme Options ' ) . "</h2>"; ?>

    <?php if ( false !== $_REQUEST['updated'] ) : ?>
      <div class="updated fade">
        <p><strong><?php _e( 'Options saved' ); ?></strong></p>
      </div>
    <?php endif; ?>

    <form action="options.php" method="post">
      
      <?php $settings = get_option( 'symbio_options', $symbio_options ); ?>

      <?php settings_fields( 'symbio_theme_options' ); ?>

      <table class="form-table">
        
          <tr valign="top">

            <th scope="row"><label for="header-background-color">Header background color:</label>

          </th>
          
          <td>
          
            <input id="header-background-color" name="symbio_options[header-background-color]" type="text" value="<?php  esc_attr_e($settings['header-background-color']); ?>" />
          
          </td>
          
        </tr>
          
        <tr valign="top">

          <th scope="row">
          
            <label for="header-background-image">Header background image:</label>
          
          </th>
          
          <td>
            
            <input id="header-background-image" name="symbio_options[header-background-image]" type="text" value="<?php  esc_attr_e($settings['header-background-image']); ?>" />
            
            <p>1200px x 1200px<br>Upload logo via <a href="<?php echo get_option('home'); ?>/wp-admin/media-new.php">Add new media</p>
          
          </td>

        </tr>

      </table>

      <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

    </form>

  </div>

  <?php
}

function symbio_validate_options( $input ) {

  global $symbio_options, $symbio_categories, $symbio_layouts;

  $settings = get_option( 'symbio_options', $symbio_options );

  return $input;

}

endif; // Endif is_admin()
