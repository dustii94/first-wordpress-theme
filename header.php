<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="My opinions on stuff" />
    <meta name="author" content="Dustin" />
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="container" id="header-container">
        <div id="logo">
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div id="main-nav">
          <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </nav>
        </div>
      </div>
    </header>
