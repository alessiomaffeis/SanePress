<?php
/*
Plugin Name: Custom Post Types
Description: Register your custom post types here
*/
/* Start Adding Functions Below this Line */

// CUSTOM POST TYPES:
/*

// Example: movies

function create_posttype() {

  register_post_type( 'movies',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Movies' ),
        'singular_name' => __( 'Movie' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'movies'),
    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

*/


/* Stop Adding Functions Below this Line */
?>