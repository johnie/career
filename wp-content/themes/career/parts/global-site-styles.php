<?php 
  global $symbio_options;
  $symbio_settings = get_option( 'symbio_options', $symbio_options );
?>

<style>
<?php #Theme Option Settings ?>
<?php if ( $symbio_settings['header-background-color'] != '' ) : ?>
  .header { background-color: <?php echo $symbio_settings['header-background-color']; ?>; }
<?php endif; ?>
<?php if ( $symbio_settings['header-background-image'] != '' ) : ?>
  .header { background-image: url('<?php echo $symbio_settings["header-background-image"]; ?>'); }
<?php endif; ?>
</style>
