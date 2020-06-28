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
      <div class="flex-row space-between">
        <div class="flex-row width-adjust">
          <div class="flex-column" id="align-left">
            <h4>Written By:</h4>
            <h4><?php the_author() ?></h4>
            <h5 class="grey"><?php the_date();?></h5>
          </div>      
        </div>
        <div class="sharethis-inline-share-buttons share-links"></div>
      </div>

      <button class="strip bg-black white w-50 a-self-center letter-space-1 hover-bg-beige transition">
        <a class="" href="/blog"><h4>BACK TO BLOG PAGE</h4></a>
      </button>    
    </article>
  </div>

<?php     
    }
  get_footer(); 
?>
