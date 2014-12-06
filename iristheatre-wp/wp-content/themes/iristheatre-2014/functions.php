<?php

    function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
      register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    function arphabet_widgets_init() {

        register_sidebar( array(
            'name' => 'Email Signup',
            'id' => 'email-signup',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ) );

    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );



    function customize_meta_boxes() {
         remove_meta_box('tribe_events_event_details','events','normal');
    }
    add_action('admin_init','customize_meta_boxes');


?>
