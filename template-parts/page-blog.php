
<?php
/*
 * Template Name: Blog
 * description: this is a template for blogs
  
 */
get_header(); ?>

  <div class="page-container">

    <!--featured post-->
    <h3 class="m-05"><u>FEATURED POST</u></h3>
    <?php get_template_part( 'template-parts/featured-post', 'page'); ?>



    <!--categories-->
    <h3 class="m-05"><u>FILTER BY CATEGORY</u></h3>
    <section class="flex-row" id="myCategories">
      <a class="box bg-black hover-bg-beige transition white filter active" onclick="filterSelection('all')"><h5>ALL POSTS</h5></a>
      <a class="box bg-black hover-bg-beige transition white filter" onclick="filterSelection('designandtechnology')"><h5>DESIGN & TECHNOLOGY</h5></a>
      <a class="box bg-black hover-bg-beige transition white filter" onclick="filterSelection('self-development')"><h5>SELF<br>DEVELOPMENT</h5></a>
      <a class="box bg-black hover-bg-beige transition white filter" onclick="filterSelection('interests')"><h5>INTERESTS</h5></a>
    </section>

    <br>

    <div class="category designandtechnology display-filtered-column">
    <?php get_template_part( 'template-parts/designandtech', 'page'); ?>
    </div>

    <div class="category self-development display-filtered-column">
    <?php get_template_part( 'template-parts/self-development', 'page'); ?>
    </div>

    <div class="category interests display-filtered-column">
    <?php get_template_part( 'template-parts/interests', 'page'); ?>
    </div>
  </div>



    <!-----Filter Script----->    
    <script>

      //filter view
      filterSelection("all")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("category");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
        }
      }

      //adds class

      function AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
      }
      
      //removes class
      function RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
          }
        }
        element.className = arr1.join(" ");
      }
      
      // Add active class to the current button (highlight it)
      var filterContainer = document.getElementById("myCategories");
      var filters = filterContainer.getElementsByClassName("filter");
      for (var i = 0; i < filters.length; i++) {
        filters[i].addEventListener("click", function(){
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
   </script>

<!-- Additional code goes here... -->
<?php get_footer(); ?>
