<?php
/**
 * The Header for our theme.
 *
 *
 * @package AM
 */
?>

<!DOCTYPE html>

<html>
  <head>
        <?php wp_head(); ?> 
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119129309-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-119129309-2');
        </script>
        <meta property="og:image" content="https://www.alessandramilburn.com/wp-content/uploads/2020/03/Logo.png" />
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e777baefac6be0012fa5e91&product=inline-share-buttons" async="async"></script>
        <meta name="p:domain_verify" content="61eae8efaa5ec066ea42a394ab4b7e54"/>
  </head>

  <body>
    
    <!-------------header and nav-------------->

    <header class="pt-02">
      <div>
        <h1>
          <a href="/">
            ALESSANDRA MILBURN
          </a>
        </h1>
        <h2 class="p-0 m-0 caveat"> define. design. develop. </h2>
      </div>
      <nav class="p-0 w-100">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
      </nav>
    </header>
<main>