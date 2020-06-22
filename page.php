<?php

  get_header(); 
    
// Blog posts 

if (is_page('designandtech')) {
    get_template_part( 'template-parts/designandtech', 'page' );
  } else if (is_page('self-development')) {
    get_template_part( 'template-parts/self-development', 'page' );
  } else if (is_page( 'interests')) {
    get_template_part( 'template-parts/interests', 'page' );
  } else {
    get_template_part( 'template-parts/all', 'page');
  }

?>

  </main>

  <?php get_footer(); ?>

