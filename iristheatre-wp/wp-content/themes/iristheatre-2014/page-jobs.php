<?php
/*
Template Name: Jobs 
*/

get_header(); 

?>

<div class="jobs-page__header">
  <h1>Jobs at Iris</h1>
</div>

<div class="jobs-page__intro">
  <?php the_field('jobs-description'); ?>
</div>



<?php
if( have_rows('jobs')):
?>

<section class="jobs-list">

<?php
    while (have_rows('jobs')) : the_row();
?>
  <div class="jobs-list__single">

    <h2 class="jobs__title"><?php the_sub_field('jobs-title'); ?></h2> 

    <div class="jobs__details">
      <h3>
        <span class="jobs__rate"><?php the_sub_field('rate'); ?></span>
        <span class="jobs__dates"><?php the_sub_field('dates'); ?></span>
      </h3>

      <div class="jobs__description"><?php the_sub_field('description'); ?></div>

      <h3 class="jobs__application-deadline"><?php the_sub_field('application-deadline'); ?></h3>
    </div>

  </div>

<?php endwhile; ?>

</section>

<?php else: ?>
<h4>Sorry, there are no positions available at the moment, check back soon. </h4>
<?php

endif;

?>


<?php get_footer(); ?>