<article id="post-<?php the_ID(); ?>">
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
      
      <!--display-->
      <a href="<?php the_permalink(); ?>" class="preview-container">
        <div class="image-container">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="description">  
          <h3><?php the_title(); ?></h3>    
          <p class="grey"><?php the_date();?></p>
          <?php the_excerpt(); ?>  
        </div>
      </a>

      <?php
        endwhile;
        else: ?>
          <h5>COMING SOON</h5>
      <?php
        endif;
      ?>
</article>