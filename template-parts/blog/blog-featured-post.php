      <?php 
        // FEATURED POST PREVIEW
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'featured',
        'posts_per_page' => 1,
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
          <h5>COMING SOON</h5>
      <?php
        endif;
      ?>
