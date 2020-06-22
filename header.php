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
        <meta property="og:image" content="https://www.alessandramilburn.com/wp-content/uploads/2020/03/Logo.png" />
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e777baefac6be0012fa5e91&product=inline-share-buttons" async="async"></script>
  </head>

  <body>
    
    <!-------------header and nav-------------->

    <header>
      <div>
        <h1>
          <a href="/">
            ALESSANDRA MILBURN
          </a>
        </h1>
        <h2 id="tagline"> define. design. develop. </h2>
      </div>
      <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
      </nav>
    </header>
<main>