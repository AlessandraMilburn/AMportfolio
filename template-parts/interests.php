
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
                                   
      <!--PREVIEW-->
      <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
        <a href="<?php the_permalink(); ?>" class="flex-row">
          <div class="opacity-70 w-50 md-w-100">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="w-40 a-self-center p-02 md-w-100">  
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
  
