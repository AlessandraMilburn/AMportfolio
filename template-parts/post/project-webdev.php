
<?php
/*
 * Template Name: Web Dev projects
 * description: this is a template for Web Development projects
 * 
 */
get_header(); ?>

<div class="page-container">
  <!--Project Introduction-->
  <section class="flex-row my-05 ">
    <div class="w-60 md-w-100">
      <img class="shadow-effect" src="<?php the_field('main_image'); ?>" />
    </div>
    <div class="md-m-0 md-w-100">
      <h2><?php the_title()?></h2>
      <p class="grey"><?php the_field('project_type'); ?></p>
      <p><?php the_field('summary'); ?></p>
      <p class="beige uppercase"><u><a target="_blank" href="<?php the_field('link'); ?>"><?php the_field('link_title'); ?></a></u></p>
      <p class="grey uppercase"><?php the_field('technologies'); ?></p>
    </div>
  </section>

    <!--GOAL-->
    <section>
      <h2>GOAL</h2>
      <br>
      <p class="strip bg-black white"><?php the_field('goal_description'); ?></p>
    </section>
    <figure class="separator"></figure>

    <!--FEATURES-->
  <section>
    <h2>FEATURES</h2>
    <p><?php the_field('features_description'); ?></p>
    <div class="flex-row">
      <div class="strip bg-black white">
        <h5><?php the_field('feature_1'); ?></h5>
      </div>
      <div class="strip bg-black white">
        <h5><?php the_field('feature_2'); ?></h5>
      </div>
      <?php if(get_field('feature_3')): ?> 
      <div class="strip bg-black white">
        <h5><?php the_field('feature_3'); ?></h5>
      </div>
      <?php endif; ?>
      <?php if(get_field('feature_4')): ?> 
      <div class="strip bg-black white">
        <h5><?php the_field('feature_4'); ?></h5>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--DEVELOPMENT STAGES-->
  <section>
    <h2>DEVELOPMENT STAGE</h2>
    <p>Summary information of my development process</p>
    <div class="flex-row">
      <div class="strip w-100 bg-beige white md-my-2">
        <h5><b>DEFINE</b></h5>
        <p><?php the_field('define'); ?></p>
      </div>
      <div class="strip w-100 bg-beige white md-my-2">
        <h5><b>DESIGN</b></h5>
        <p><?php the_field('design'); ?></p>
      </div>
      <div class="strip w-100 bg-beige white md-my-2">
        <h5><b>DEVELOP</b></h5>
        <p><?php the_field('develop'); ?></p>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--THE WORKS-->
  <section>
    <h2>THE WORKS</h2>
    <p><?php the_field('the_works'); ?></p>
    <span>
      <!--sketch-->
      <img class="w-40 md-w-100" src="<?php the_field('image_1'); ?>"/>
      <!--code-->
      <?php if(get_field('image_2')): ?> 
      <img class="w-40 md-w-100" src="<?php the_field('image_2'); ?>"/>
      <?php endif; ?>
    </span>
  </section>

  <figure class="separator"></figure>

  <!--Project Results-->
  <section class="flex-column">
    <h2>RESULTS</h2>

    <!--render-->
    <?php if(get_field('image_3')): ?> 
    <img class="w-50 md-w-100 a-self-center" src="<?php the_field('image_3'); ?>"/>
    <?php endif; ?>
    <?php if(get_field('video_link')): ?> 
    <iframe class="centered-video" src="<?php the_field('video_link'); ?>" width="640" height="480"></iframe>
    <?php endif; ?>
    <figure class="separator"></figure>
    <p class="my-05"><?php the_field('results_summary'); ?></p>
    <p class="beige uppercase"><u><a target="_blank" href="<?php the_field('link'); ?>"><?php the_field('link_title'); ?></a></u></p>
  </section>

  <button class="strip bg-black white w-50 a-self-center letter-space-1 hover-bg-beige transition">
    <a class="" href="/portfolio"><h4>BACK TO PROJECTS</h4></a>
  </button>

</div>

<?php get_footer(); ?>
