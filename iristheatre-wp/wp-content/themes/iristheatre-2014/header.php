<?php ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Iris Theatre 2014</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
      <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-ie8.css" />
      <![endif]-->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.7.1.js"></script>
    </head>
    <body>
      <div class="wrapper--site-header">
        <header class="site-header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="logo-header" src="<?php echo get_template_directory_uri(); ?>/img/logo-tan.png" alt="">
          </a>
          <span class="nav-main--hamburger">
            <i class="fa fa-bars"></i>
          </span>
          
          <?php wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'nav-main--menu',
            'menu_id' => 'header-menu',
            'menu_class' => '',
            'theme_location' => 'header-menu'
            ));
          ?>
        </header>
      </div>
      <div class="wrapper--site-body">
        <main class="site-content">
