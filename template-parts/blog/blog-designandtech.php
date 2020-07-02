
  <!--DESIGN AND TECHNOLOGY-->
  <?php 
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'designandtechnology',
        );
                
        $arr_posts = new WP_Query( $args );        
        if ( $arr_posts->have_posts() ) :        
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
      ?>
                                   
      <?php get_template_part('template-parts/blog/blog-preview', 'post'); ?>

      <?php
        endwhile;
        else: ?>
      <?php
        endif;
      ?>
  
