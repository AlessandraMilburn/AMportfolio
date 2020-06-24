<?php
/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1.0 Theme Files
2.0 Admin Features
3.0 Meta Tags
--------------------------------------------------------------*/


/*--------------------------------------------------------------
1.0 Theme Files
--------------------------------------------------------------*/
function am_files() {

  // FONTS
  wp_enqueue_style('Fjalla One-font', '//fonts.googleapis.com/css?family=Fjalla+One&display=swap');
  wp_enqueue_style('Caveat-font', '//fonts.googleapis.com/css?family=Caveat&display=swap');
  wp_enqueue_style('Lato-font', '//fonts.googleapis.com/css?family=Lato:300,400&display=swap'); 

    //CSS
  wp_enqueue_style('am_main_styles', get_stylesheet_uri());
    
}
add_action('wp_enqueue_scripts', 'am_files');

/*--------------------------------------------------------------
2.0 Admin Features
--------------------------------------------------------------*/

function am_features() {

  //HEADER
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo');

  //NAVIGATION
  function register_my_menus() {
  //registers the menus
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  //page
  add_theme_support( 'post-thumbnails' );  
}
add_action('after_setup_theme', 'am_features');

/*--------------------------------------------------------------
3.0 Meta Tags
--------------------------------------------------------------*/

function add_meta_tags() {
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php }
  add_action('wp_head', 'add_meta_tags');
?>

