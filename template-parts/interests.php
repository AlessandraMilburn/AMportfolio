
  <!--INTERESTS-->
  <?php 
        $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'interests',
        );
                
        $arr_posts = new WP_Query( $args );        
        if ( $arr_posts->have_posts() ) :        
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
      ?>
                                   
      <article id="post-<?php the_ID(); ?>">
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
      </article>

      <?php
        endwhile;
        else: ?>
      <?php
        endif;
      ?>
  
