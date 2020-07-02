
<?php
/*
 * Template Name: Andra 
 * description: this is a template for the Andra UAE project
  
 */
get_header(); ?>
<!--Progress bar-->
<?php get_template_part('template-parts/components/scroll-indicator', 'post'); ?>

<div class="page-container">
  <!--Project Introduction-->
  <section class="flex-row my-05">
      <div class="w-60 md-w-100">
        <img class="shadow-effect" src="<?php the_field('main_image'); ?>"/>
      </div>
      <div class="md-m-0 md-w-100 ">
      <h2><?php the_title()?></h2>
        <p class="grey"><?php the_field('project_type'); ?></p>
        <p class="grey"><?php the_field('duration'); ?></p>
        <p><?php the_field('summary'); ?></p>
        <p class="beige uppercase"><u><a target="_blank" href="<?php the_field('link'); ?>"><?php the_field('link_title'); ?></a></u></p>
        <p class="grey uppercase"><?php the_field('technologies'); ?></p>
      </div>
  </section>

  <!--Project Details-->
  <section class="flex-column ">
    <!--GOAL-->
    <div>
      <h2>GOAL</h2>
      <br>
      <p class="strip bg-black white"><?php the_field('goal_description'); ?></p>
    </div>
    <figure class="separator"></figure>

  <!--Specific Project Details-->
  <?php the_content(); ?>

  <button class="strip bg-black white w-50 a-self-center letter-space-1 hover-bg-beige transition">
    <a class="" href="/portfolio"><h4>BACK TO PROJECTS</h4></a>
  </button>
</div>




<!-- Additional code goes here... -->
<?php get_footer(); ?>
