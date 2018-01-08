<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/icons-touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="CHANGE_THIS_TO_SITE_NAME"> <!-- change this -->
    <link rel="apple-touch-icon" href="images/icons-touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/icons-touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
  <link href="https://fonts.googleapis.com/css?family=Slabo+13px" rel="stylesheet">

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Add your site content here -->

    <header>
      <h1 id='name'>Alex Summer</h1>
     <nav class='nav'>
         <label for='toggle'>&#9776;</label>
         <input type='checkbox' id='toggle'/>
         <?php wp_nav_menu( array( 'top' => 'main-menu'  )  );?>
        </nav>
    </header>
