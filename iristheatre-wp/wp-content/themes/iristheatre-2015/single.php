<?php get_header(); ?>

<div class="news-item-page__header-small">
  News  
</div>
<a class="news-item-page__header" href="<?php echo get_permalink(); ?>">
  <?php the_title(); ?>
</a>

<div class="news-item-content">
  
    <?php while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end of the loop. ?>

</div>


<?php get_footer(); ?>