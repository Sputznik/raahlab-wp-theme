<?php

/*  CONSTANTS */
if( !defined( 'RAHLB_THEME_VERSION' ) ) {
  define( 'RAHLB_THEME_VERSION', time() );
}

if( !defined( 'RAHLB_THEME_URI' ) ) {
  define( 'RAHLB_THEME_URI', get_stylesheet_directory_uri() );
}

if( !defined( 'RAHLB_THEME_PATH' ) ) {
  define( 'RAHLB_THEME_PATH', get_stylesheet_directory() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-rahlb-theme.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
