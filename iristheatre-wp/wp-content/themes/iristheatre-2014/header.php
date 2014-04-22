<?php ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Iris Theatre 2014</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
      <!--[if lt IE 8]>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-ie7.css" />
      <![endif]-->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.7.1.js"></script>
    </head>
    <body>
      <div class="wrapper--site-header">
        <header class="site-header">
          <img class="logo--header" src="<?php echo get_template_directory_uri(); ?>/img/logo-tan.png" alt="">
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
