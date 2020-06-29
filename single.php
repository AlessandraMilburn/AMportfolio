<?php 

get_header(); 
  while(have_posts()) {
    the_post(); 
    
    if(is_category('web-development')) {
      get_template_part('template-parts/content-webdev', 'post');
    } else {
      get_template_part('template-parts/content-single', 'post');
    }
    ?>   
    
<?php     
    }
  get_footer(); 
?>
