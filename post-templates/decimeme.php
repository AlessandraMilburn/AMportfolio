<?php
/*
 * Template Name: Decimeme
 * description: this is a template for The Decimeme project
  
 */
get_header(); ?>

<div class="page-container">
  <!--Project Introduction-->
  <section class="flex-row my-05 ">
    <div class="w-60 md-w-100">
      <img class="shadow-effect" style="height: 100%;" src="/wp-content/uploads/2020/04/decimeme-preview.png"/>
    </div>
    <div class="md-m-0 md-w-100">
      <h2>DECIMEME</h2>
      <h4>Q&A App for fun</h3>
      <p class="grey">1 Day</p>
      <p>Decimeme is a simple app that provides answers to dichotomous questions in the form of a meme.
      </p>
      <p class="beige"><u><a target="_blank" href="https://alessandramilburn.github.io/decimeme/">VIEW LIVE WEBSITE</a></u></p>

      <p class="grey">HTML CSS JAVASCRIPT</p>
    </div>
  </section>

    <!--GOAL-->
    <section>
      <h2>GOAL</h2>
      <br>
      <p class="strip bg-black white">To create a modern version of the <a href="https://en.wikipedia.org/wiki/Magic_8-Ball">Magic 8-ball</a></p>
    </section>
    <figure class="separator"></figure>

    <!--FEATURES-->
  <section>
    <h2>FEATURES</h2>
    <p>Decimeme is a 2-page website; the first is where the user inputs and submits a question 
        and the second page is where the randomly generated answer is rendered.
    </p>
    <div class="flex-row">
      <div class="strip bg-black white">
        <h5>INPUT FORM</h5>
      </div>
      <div class="strip bg-black white">
        <h5>GIF RENDERING</h5>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--DEVELOPMENT STAGES-->
  <section>
    <h2>DEVELOPMENT STAGE</h2>
    <p>Summary information of my development process</p>
    <div class="flex-row">
      <div class="strip bg-beige white w-100">
        <h5><b>DEFINE</b></h5>
        <p>This project is created for fun and to be shared with friends
        </p>
      </div>
      <div class="strip bg-beige white w-100">
        <h5><b>DESIGN</b></h5>
        <p>Simple and straightforward
        </p>
      </div>
      <div class="strip bg-beige white w-100">
        <h5><b>DEVELOP</b></h5>
        <p>Published on github
        </p>
      </div>
    </div>
  </section>

  <figure class="separator"></figure>

  <!--THE WORKS-->
  <section>
    <h2>THE WORKS</h2>
    <p>Simple sketch of the elements required to be rendered.</p>
  <!--sketch-->
    <img src="/wp-content/uploads/2020/04/decimeme-sketch.jpg"/>
  </section>

  <figure class="separator"></figure>

  <!--Project Results-->
  <section class="flex-column">
    <h2>DEMO OF RESULTS</h2>
    <iframe class="centered-video" src="https://drive.google.com/file/d/13uqs8XAyFICFGbawXl9sbJbc-4rUbH-U/preview" width="640" height="480"></iframe>
    <figure class="separator"></figure>
    <p>This website is created for fun and currently being shared for fun amongst friends.
    </p>
    <p class="beige"><a target="_blank" href="https://alessandramilburn.github.io/decimeme/">VIEW LIVE</a></p>
  </section>

  <button class="strip bg-black white w-50 a-self-center letter-space-1 hover-bg-beige transition">
    <a class="" href="/portfolio"><h4>BACK TO PROJECTS</h4></a>
  </button>

<?php get_footer(); ?>
