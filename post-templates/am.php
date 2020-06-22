<?php
/*
 * Template Name: AM
 * description: this is a template for AM Portfolio project
  
 */
get_header(); ?>

<div class="page-container">
  <!--Project Introduction-->
  <section class="detailed-row ">
    <div class="image-container">
      <img class="shadow-effect" src="/wp-content/uploads/2020/04/AM-preview.png"/>
    </div>
    <div class="collective-info">
      <h2>AM Portfolio</h2>
      <h4>My Portfolio Website (this website)</h3>
      <p class="grey">4 Weeks</p>
      <p>This website is created to introduce myself and the work that I have produced over time. 
        It is targeted to employers and small business owners that need web development work done.
        It also includes a blog section to share information that I have discovered along the way,
        covering professional work, personal development and interests.
      </p>
      <p class="beige-link"><a target="_blank" href="http://www.http://amtemp.flywheelsites.com/">VIEW LIVE WEBSITE</a></p>
      <p class="grey">HTML CSS JAVASCRIPT FIGMA PHP WORDPRESS</p>
    </div>
  </section>

    <!--GOAL-->
    <section>
      <h2>GOAL</h2>
      <br>
      <p class="black-rectangle-row">To successfully showcase my work and go through each project in detail to the target audience.</p>
    </section>
    <figure class="separator"></figure>

    <!--FEATURES-->
  <section>
    <h2>FEATURES</h2>
    <p>I have created a custom Wordpress theme to put in place the custom design I have created on Figma.
      Filter feature using Javascript to filter my blog posts per category. And mobile responsive to view on the go.
    </p>
    <div class="rectangle-container">
      <div class="black-rectangle-row">
        <h5>CUSTOM WORDPRESS THEME</h5>
      </div>
      <div class="black-rectangle-row">
        <h5>FILTERED POST CATEGORIES</h5>
      </div>
      <div class="black-rectangle-row">
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
      <div class="beige-rectangle-column">
        <h5><b>DEFINE</b></h5>
        <p>Targetting potential employers and small business owners, the website features pages that communicate who I am, what I do and a touch of my personality through writing.
        </p>
      </div>
      <div class="beige-rectangle-column">
        <h5><b>DESIGN</b></h5>
        <p>The design is simplistic and clean. Colors 60% white, 30% black and 10% tan for accent. 
        </p>
      </div>
      <div class="beige-rectangle-column">
        <h5><b>DEVELOP</b></h5>
        <p>Created with Wordpress as CMS for blogging and tracked insights.
        </p>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--THE WORKS-->
  <section>
    <h2>THE WORKS</h2>
    <p>The sketch is created through Figma as shown below and developed with Wordpress</p>
    <br>
    <!--sketch-->
    <img src="/wp-content/uploads/2020/04/AM-Figma.png"/>
    <br>
    <br>
    <!--code and render-->
    <img class="centered-image" src="/wp-content/uploads/2020/04/AM-vscode.png"/>
  </section>

  <figure class="separator"></figure>

  <!--Project Results-->
  <section class="detailed-column">
    <h2>RESULTS</h2>
    <figure class="separator"></figure>

    <img src="/wp-content/uploads/2020/04/AM-landing-page.png"/>
    <figure class="separator"></figure>
    <p>The portfolio website is currently used for it's purpose and continously being updated with
        new projects and blog posts.
    </p>
    <p class="beige-link"><a target="_blank" href="http://amtemp.flywheelsites.com/">VIEW LIVE WEBSITE</a></p>
  </section>

  <a class="black-rectangle-button" href="/portfolio">BACK TO PROJECTS</a>


<?php get_footer(); ?>
