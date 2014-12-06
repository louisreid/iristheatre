<?php
/*
Template Name: Wysiwyg Page 
*/

get_header(); 

?>

<?php 

    $pageContent = get_field('page-content'); 

    if ( !empty($pageContent) ) {
        the_field('page-content');
    } else {
        echo 'Sorry there is no content on this page';
    }

?>

<?php get_footer(); ?>