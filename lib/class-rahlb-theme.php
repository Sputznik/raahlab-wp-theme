<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class RAHLB_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('gtc-core-css', RAHLB_THEME_URI.'/assets/css/main.css', array('sp-core-style'), RAHLB_THEME_VERSION );

  }

}

new RAHLB_THEME;
