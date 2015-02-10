<?php
/*
Template Name: News 
*/

get_header(); 

?>

<div class="news-page__header">
  News
</div>

<ul class="news-list">
  
<?php 
  $args = array( 'posts_per_page' => 5 );
  $news_posts = get_posts( $args ); 

  foreach ( $news_posts as $post ) : setup_postdata ( $post ); 

  ?>

  <li class="news-item">
    <a class="news-item__header" href="<?php echo get_permalink(); ?>">
      <?php the_title(); ?>
    </a>
    <h3 class="news-item-meta"><?php the_date('j M'); ?></h3>
    <?php the_excerpt(); ?>
  </li>

  <?php endforeach;
    wp_reset_postdata();
  ?>

</ul>


<?php get_footer(); ?>