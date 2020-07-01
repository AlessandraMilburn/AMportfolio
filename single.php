<?php 

get_header(); 
  while(have_posts()) {
    the_post(); 
    
    if(in_category('web-development')) {
      get_template_part('template-parts/post/project-webdev', 'post');
    } elseif (in_category('other-projects')) {
      get_template_part('template-parts/post/project-other', 'post');
   } else {
      get_template_part('template-parts/post/blog-single', 'post');
    }
    ?>   
    
<?php     
    }
  get_footer(); 
?>
