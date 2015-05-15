<?php
/*
Plugin Name: SanePress plugin
Description: SanePress functions go here
*/

// One plugin to activate them all!

function auto_activate_plugins() {

  $sanepress_init = get_option("sanepress_init");
  $installed = get_option("blogname");

  if(!$sanepress_init && $installed !== false)
  { 
    // Retrieve WordPress' home_path:
    $home = set_url_scheme( get_option( 'home' ), 'http' );
    $siteurl = set_url_scheme( get_option( 'siteurl' ), 'http' );
    if ( ! empty( $home ) && 0 !== strcasecmp( $home, $siteurl ) ) {
      $wp_path_rel_to_home = str_ireplace( $home, '', $siteurl );
      $pos = strripos( str_replace( '\\', '/', $_SERVER['SCRIPT_FILENAME'] ), trailingslashit( $wp_path_rel_to_home ) );
      $home_path = substr( $_SERVER['SCRIPT_FILENAME'], 0, $pos );
      $home_path = trailingslashit( $home_path );
    } else {
      $home_path = ABSPATH;
    }
    $home_path = str_replace( '\\', '/', $home_path );

    require_once($home_path . "wp-admin/includes/plugin.php");

    // Activate required plugins:
    $required_plugins = array(
      "timber-library/timber.php",
      // "wp-scss/wp-scss.php",
      "advanced-custom-fields/acf.php",
      // "rocket-galleries/rocketgalleries.php"
    );

    foreach ($required_plugins as $plugin) {
      
      $result = activate_plugin($plugin, NULL);

      if ( is_wp_error( $result ) ) {
        error_log($result->get_error_message());
      }
    }
    
    // Activate the default theme
    switch_theme("sanepress");

    // OKAY, I give up, for now.
    // Set default options:
    // $wpscss_options = get_option('wpscss_options');
    // $wpscss_options['scss_dir'] = '/scss/';
    // $wpscss_options['css_dir'] = '/css/';
    // update_option('wpscss_options', $wpscss_options);

    add_option( 'sanepress_init', 'TRUE', '', 'yes' );
  }
}

add_action( 'init', 'auto_activate_plugins' );

?>
