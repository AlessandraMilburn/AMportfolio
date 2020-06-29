
<?php
/*
 * Template Name: Portfolio V2
 * description: this is a template for projects
  
 */
get_header(); ?>

<div class="page-container">

  <!--WEB DEVELOPMENT PROJECTS-->

  <h3 class="m-05"><u>WEB DEVELOPMENT PROJECTS</u></h3>
  <?php 
        $args = array(
        'post_type' => 'post',
        'post_status' => 'private',
        'category_name' => 'web-development',
        );
                
        $arr_posts = new WP_Query( $args );        
        if ( $arr_posts->have_posts() ) :        
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
      ?>
                                   
      <!--Project Preview-->

      <article id="post-<?php the_ID(); ?>" class="my-02 w-100 flex-row">
        <a href="<?php the_permalink(); ?>" class="w-60">
          <div class="opacity-70 transition  md-w-100">
            <img class="shadow-effect" src="<?php the_post_thumbnail_url(); ?>" />
          </div>
          <div class="w-30 a-self-center p-05 md-w-100">  
            <h3 class="uppercase"><?php the_title(); ?></h3>
            <br>
            <div class="w-100">
              <?php the_tags('<ul><li><p>', '</p></li><li><p>', '</p></li></ul>'); ?>
            </div>
          </div>
        </a>      
      </article>

      <?php
        endwhile;
        else: ?>
      <?php
        endif;
      ?>

  <!--OTHER PROJECTS-->

  <h3 class="m-05"><u>OTHER PROJECTS</u></h3>
  <?php 
        $args = array(
        'post_type' => 'post',
        'post_status' => 'private',
        'category_name' => 'web-development',
        );
                
        $arr_posts = new WP_Query( $args );        
        if ( $arr_posts->have_posts() ) :        
        while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
      ?>
                                   
      <!--Project Preview-->

      <article id="post-<?php the_ID(); ?>" class="my-02 w-100 flex-row">
        <a href="<?php the_permalink(); ?>" class="w-60">
          <div class="opacity-70 transition  md-w-100">
            <img class="shadow-effect" src="<?php the_post_thumbnail_url(); ?>" />
          </div>
          <div class="w-30 a-self-center p-05 md-w-100">  
            <h3 class="uppercase"><?php the_title(); ?></h3>
            <br>
            <div class="w-100">
              <?php the_tags('<ul><li><p>', '</p></li><li><p>', '</p></li></ul>'); ?>
            </div>
          </div>
        </a>      
      </article>

      <?php
        endwhile;
        else: ?>
      <?php
        endif;
      ?>

</div><!--.page-container-->    

<?php get_footer(); ?>
