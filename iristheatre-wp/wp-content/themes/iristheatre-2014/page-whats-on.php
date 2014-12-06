<?php
/*
Template Name: What's On 
*/

get_header(); 

?>

<h1 class="whats-on-title">What's On</h1>

<ul class="whats-on-list">
<?php

    $numberOfEvents = get_field('number-of-events'); 
    if ( empty($numberOfEvents)) {
       $numberOfEvents = '-1'; 
    }


    global $post;
    $events = tribe_get_events( array(
      'posts_per_page' => $numberOfEvents,
      'eventDisplay' => 'upcoming'
    ) );

    foreach ( $events as $post ) {
      setup_postdata( $post );
?>
  <li class="whats-on-single">
    <a href="<?php echo get_permalink(); ?>">
      <img class="whats-on-image" src="<?php the_field('image'); ?>" alt="">
      <div class="whats-on-detail">
        <h2><?php the_title(); ?></h2>
        <h3>
        <?php echo tribe_get_start_date( $post->ID, false, 'M j'); 
          if (tribe_get_start_date($post->ID, false, 'M j') != tribe_get_end_date($post->ID, false, 'M j')) {
            echo " - ", tribe_get_end_date( $post->ID, false, 'M j');
          }
        ?>

        <?php 
          $stars = get_field('stars');

          if($stars != 0){
            echo '&nbsp;&#124;&nbsp;';
          }
          echo str_repeat('<i class="fa fa-star stars--show"></i>', $stars);
        ?>
        </h3>
        <?php the_excerpt(); ?>

      </div>
    </a>
  </li>
<?php  }  ?>


<?php wp_reset_query(); ?>
</ul>


<?php get_footer(); ?>