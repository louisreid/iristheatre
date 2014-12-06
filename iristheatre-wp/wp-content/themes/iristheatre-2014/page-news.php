<?php
/*
Template Name: News 
*/

get_header(); 

?>


<?php 
  $args = array( 'posts_per_page' => 5 );
  $news_posts = get_posts( $args ); 

  foreach ( $news_posts as $post ) : setup_postdata ( $post ); 

  ?>
  <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
  <?php the_content(); ?>

  <?php endforeach;
  wp_reset_postdata();

?>


<?php get_footer(); ?>