<?php
/*
 * Template Name: Project Template
 * description: this is a template for Project templates project
  
 */
get_header(); ?>

<div class="page-container">
  <!--Project Introduction-->
  <section class="flex-row my-05 ">
    <div class="w-60 md-w-100">
      <img style="height: 100%;" src="/wp-content/uploads/2020/03/LOM-preview.png"/>
    </div>
    <div class="md-m-0 md-w-100">
      <h2>Project Title</h2>
      <h4>Project purpose</h3>
      <p class="grey">1-Feb to 3-Mar 2020</p>
      <p>Insert Project description summary
      </p>
      <p class="beige"><a target="_blank" href="http://www.link">VIEW LIVE</a></p>
      <p class="grey">HTML CSS JAVASCRIPT PHP WORDPRESS</p>
    </div>
  </section>

    <!--GOAL-->
    <section>
      <h2>GOAL</h2>
      <br>
      <p class="strip bg-black white">Project Goal</p>
    </section>
    <figure class="separator"></figure>

    <!--FEATURES-->
  <section>
    <h2>FEATURES</h2>
    <p>Summarize each Feature
    </p>
    <div class="rectangle-container">
      <div class="strip bg-black white">
        <h5>CUSTOM WORDPRESS THEME</h5>
      </div>
      <div class="strip bg-black white">
        <h5>FILTERED POST CATEGORIES</h5>
      </div>
      <div class="strip bg-black white">
        <h5>SOCIAL MEDIA CAROUSEL</h5>
      </div>
      <div class="strip bg-black white">
        <h5>MOBILE RESPONSIVE</h5>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--DEVELOPMENT STAGES-->
  <section>
    <h2>DEVELOPMENT STAGE</h2>
    <p>Summary information of my development process</p>
    <div class="box-container">
      <div class="strip bg-beige white">
        <h5><b>DEFINE</b></h5>
        <p>Defining the project aspects
        </p>
      </div>
      <div class="strip bg-beige white">
        <h5><b>DESIGN</b></h5>
        <p>Designing the project details
        </p>
      </div>
      <div class="strip bg-beige white">
        <h5><b>DEVELOP</b></h5>
        <p>Developing the project definition and design
        </p>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--THE WORKS-->
  <section>
    <h2>THE WORKS</h2>
    <p>The works introduction description</p>
    <span class="flex-column">
      <!--sketch-->
      <img class="md-w-100" src="/wp-content/uploads/2020/0?"/>
      <!--code and render-->
      <img class="md-w-100" src="/wp-content/uploads/2020/0?/"/>
    </span>
  </section>

  <figure class="separator"></figure>

  <!--Project Results-->
  <section class="flex-column">
    <h2>RESULTS</h2>

    <img src="/wp-content/uploads/2020/0?"/>
    <figure class="separator"></figure>
    <p>the finished product description
    </p>
    <p class="beige"><a target="_blank" href="http://www.lifeofmonty.net">VIEW LIVE</a></p>
  </section>

  <a class="black-rectangle-button" href="/portfolio">BACK TO PROJECTS</a>


<?php get_footer(); ?>
