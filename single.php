<?php 

get_header(); 
  while(have_posts()) {
    the_post(); ?>
    
      <!--The Post-->
  <div class="page-container">
    <article class="heavy-content">
      <?php the_post_thumbnail(); ?>
      <br>
      <h1><?php the_title(); ?></h1>
      <br>
      <br>
      <?php the_content();?>

       <!--Author and Share-->
      <div class="detailed-row space-between">
        <div class="detailed-row width-adjust">
          <div class="detailed-column" id="align-left">
            <h4>Written By:</h4>
            <h4><?php the_author() ?></h4>
            <h5 class="grey"><?php the_date();?></h5>
          </div>      
        </div>
        <div class="sharethis-inline-share-buttons share-links"></div>
      </div>

      <a class="black-rectangle-button" href="/blog">BACK TO BLOG PAGE</a>
    </article>
  </div>

<?php     
    }
  get_footer(); 
?>
