
<?php
/*
 * Template Name: Portfolio
 * description: this is a template for projects
  
 */
get_header(); ?>

<div class="page-container">

  <h3 class="m-05"><u>WEB DEVELOPMENT PROJECTS</u></h3>

  <!--LIFE OF MONTY-->
      <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
        <a  href="/portfolio/lifeofmonty" class="flex-row">
          <div class="opacity-70 transition w-60 md-w-100">
            <img class="shadow-effect " src="/wp-content/uploads/2020/03/LOM.png" />
          </div>
          <div class="w-30 a-self-center p-05 md-w-100">  
            <h3>LIFE OF MONTY</h3>
            <br>
            <ul class="">
              <li><p>Web Development</p></li>
              <li><p>Social Media</p></li>
              <li><p>Content Creation</p></li>
            </ul>
          </div>    
      </a>
    </article>

  <!--AM WEBSITE PORTFOLIO-->
    <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
      <a href="/portfolio/am-portfolio" class="flex-row">
       <div class="opacity-70 transition w-60 md-w-100">
          <img class="shadow-effect" src="/wp-content/uploads/2020/04/AM-preview.png" />
        </div>
        <div class="w-30 a-self-center p-05 md-w-100">  
          <h3>AM PORTFOLIO</h3>
          <br>
          <ul>
            <li><p>Web Development</p></li>
            <li><p>Content Creation</p></li>
          </ul>
        </div>    
      </a>
    </article>


    <!--DECIMEME-->
    <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
      <a  href="/portfolio/decimeme" class="flex-row">
        <div class="opacity-70 transition w-60 md-w-100">
          <img class="shadow-effect opacity-70 transition" src="/wp-content/uploads/2020/04/decimeme-preview.png" />
        </div>
        <div class="w-30 a-self-center p-05 md-w-100">  
          <h3>DECIMEME</h3>
          <br>
          <ul>
            <li><p>Web Development</p></li>
          </ul>
        </div>    
      </a>
    </article>

    <!--JAMMMING APP FEATURE
    <a  href="/portfolio/jammming">
      <div class="flex-row my-02 w-100">
        <div class="w-60 md-w-100">
          <img src="/wp-content/uploads/2020/03/LOM.png" />
        </div>
        <div class="p-05 a-self-center w-25 md-w-80">
          <h3>JAMMMING</h3>
          <p>December 2019</p>
          <br>
          <ul>
            <li><p>Web Development</p></li>
            <li><p>Social Media Marketing</p></li>
          </ul>
        </div>    
      </div>
    </a>
    <figure class="separator"></figure>

    -->
    <h3 class="m-05"><u>OTHER PROJECTS</u></h3>

    <!--ANDRA-->
    <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
      <a  href="/portfolio/andra" class="flex-row">
        <div class="opacity-70 transition w-60 md-w-100">
          <img class="shadow-effect opacity-70 transition" src="/wp-content/uploads/2020/03/Andra-adpost-scaled.jpg" />
        </div>
        <div class="w-30 a-self-center p-05 md-w-100">  
          <h3>ANDRA FASHION</h3>
          <br>
          <ul>
            <li><p>E-commerce Operations</p></li>
            <li><p>Product Management</p></li>
            <li><p>Branding</p></li>
            <li><p>Social Media</p></li>
          </ul>
        </div> 
      </a>
    </article>

    <!--MY NEXT DRESS-->
  <article id="post-<?php the_ID(); ?>" class="my-02 w-100">
    <a  href="/portfolio/mynextdress" class="flex-row">
      <div class="opacity-70 transition w-60 md-w-100">
          <img class="shadow-effect" src="/wp-content/uploads/2020/03/mynextdress-preview.png" />
        </div>
        <div class="w-30 a-self-center p-05 md-w-100">  
          <h3>MY NEXT DRESS</h3>
          <br>
          <ul>
            <li><p>Web Re-Design (UX/UI)</p></li>
            <li><p>E-commerce Operations</p></li>
            <li><p>Social Media</p></li>
            </ul>
        </div> 
      </a>
    </article>



      <!--NEXT GENERATION
    <a  href="/portfolio/nextgenerationmarketing">
      <div class="flex-row my-02 w-100">
        <div class="w-60 md-w-100">          
          <img src="/wp-content/uploads/2020/03/nextgeneration.png" />
        </div>
        <div class="p-05 a-self-center w-25 md-w-80">
          <h3>NEXT GENERATION</h3>
          <p>2018-2019</p>
          <br>
          <ul>
            <li><p>Head of Operations</p></li>
            <li><p>Print Marketing</p></li>
            <li><p>Team Leader</p></li>
          </ul>
        </div>    
      </div>
    </a>
    -->

  </div>    

<?php get_footer(); ?>
