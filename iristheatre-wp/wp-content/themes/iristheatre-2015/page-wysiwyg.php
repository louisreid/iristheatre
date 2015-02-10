<?php
/*
Template Name: Wysiwyg Page 
*/

get_header(); 

?>

<h1 class="page-title"><?php the_title(); ?></h1>

<section class="wysiwyg-content">
  
  <?php 

      $pageContent = get_field('page-content'); 

      if ( !empty($pageContent) ) {
          the_field('page-content');
      } else {
          echo 'Sorry there is no content on this page';
      }

  ?>

</section>

<?php get_footer(); ?>