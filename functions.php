<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

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
  wp_enqueue_style( 'prefix-font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', array(), '5.0.6' );  

  //JAVASCRIPT
  wp_enqueue_script('scroll-indicator', get_template_directory_uri() . '/assets/js/scroll-indicator.js', null, null); 
  wp_enqueue_script('filter', get_template_directory_uri() . '/assets/js/filter.js', null, true); 
}
add_action('wp_enqueue_scripts', 'am_files');

/*--------------------------------------------------------------
2.0 Admin Features
Header - site title, Logo
Navigation - registration
Post - thumbnails
--------------------------------------------------------------*/

function am_features() {

  /* Header */

  //Site title  
  add_theme_support('title-tag');

  //Logo 
  add_theme_support( 'custom-logo');

  /* NAVIGATION */ 

  //Registration  
  function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  /* Post */ 

  //Thumblnails  
  add_theme_support( 'post-thumbnails' );  
}
add_action('after_setup_theme', 'am_features');

/*--------------------------------------------------------------
3.0 Meta Tags
--------------------------------------------------------------*/

function add_meta_tags() {
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="https://www.alessandramilburn.com/wp-content/uploads/2020/03/Logo.png" />
  <meta name="p:domain_verify" content="61eae8efaa5ec066ea42a394ab4b7e54"/>
  <?php }
  add_action('wp_head', 'add_meta_tags');