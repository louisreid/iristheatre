<?php
/*
Template Name: Home 
*/

get_header(); 

?>

<section class="hero">
  <?php
    global $post;

    $events = tribe_get_events( array(
      'posts_per_page' => 1,
      'meta_query' => array(
        array(
          'key' => 'select_for_homepage_hero',
          'value' => 'yes',
          'compare' => '='
          )
        )
    ) );

    foreach ( $events as $post ) {
      setup_postdata( $post );
      ?>
      <a href="<?php echo get_permalink() ?>">
      <div class="hero__image">
        <img src="<?php the_field('image'); ?>" alt="">
      </div>
      <h2 class="hero__caption">now showing: <?php
      the_title(); ?>      |     <?php echo tribe_get_start_date( $post->ID, false, 'M j'); 
                  if (tribe_get_start_date($post->ID, false, 'M j') != tribe_get_end_date($post->ID, false, 'M j')) {
                    echo " - ", tribe_get_end_date( $post->ID, false, 'M j');
                  }
                ?>
      </h2>
    </a>
      <?php  }  ?>
</section>
  
<ul class="more-shows">

  <?php
    global $post;

    $events = tribe_get_events( array(
      'posts_per_page' => 3,
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'key' => 'select_for_homepage_hero',
          'value' => 'no',
          'compare' => '='
          )
        )
    ) );

    foreach ( $events as $post ) {
      setup_postdata( $post );
  ?>
        <a href="<?php echo get_permalink(); ?>">
          <li class="tile">

          <?php
          $image = get_field('image');
          if( !empty($image) ): ?>
            <!-- <div class="tile__image" style="background-image:url('<?php the_field('image'); ?>');"></div> -->
            <img class="tile__image" src="<?php the_field('image'); ?>" alt="">

          <?php endif; ?>

            <h2 class="tile__caption">
              <?php the_title(); ?>
              <div class="tile__hidden">
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
              </div>
            </h2>
          </li>
        </a>
      <?php }  ?>
</ul>

<?php // include 'whats-on-widget.php' ?>

<div class="column-left">
  <section class="news-flash"><h3 class="news-flash__header">News</h3>
    <?php 
      $args = array( 'posts_per_page' => 1 );
      $news_posts = get_posts( $args ); 

      foreach ( $news_posts as $post ) : setup_postdata ( $post ); 

      ?>
      <a class="news-item__title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
      <?php the_excerpt(); ?>
      <a class="news-item__read-more" href="<?php echo get_permalink(); ?>">Read more</a>

      <?php endforeach;
      wp_reset_postdata();

    ?>
  </section>
  <section class="twitter">
    <h4 class="twitter-link">
        <a href="https://twitter.com/hashtag/<?php the_field('twitter-link') ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="">
            &#64;<?php the_field('twitter-link') ?>
        </a>
    </h4>
    <?php 
      $twitter = get_field('twitter-code'); 
      echo '<a data-theme="light" data-chrome="nofooter noheader noborders transparent"',substr($twitter, 3);
    ?>
  </section>
</div>

<div class="column-right">
  <section class="photo-grid">
    <?php 
    $flickr = get_field('flickr-gallery-shortcode');
    $flickr = apply_filters('the_content', $flickr);
    echo $flickr;
     ?>
  </section>
</div>

<?php get_footer(); ?>

