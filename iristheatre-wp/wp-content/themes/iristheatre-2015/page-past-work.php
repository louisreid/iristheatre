<?php
/*
Template Name: Past Work 
*/

get_header(); 

?>

<h1 class="past-work__title"><?php wp_title(''); ?></h1>

<ul class="tabs">
<?php

  global $post;

  for($n = 0; $n <= 10; $n++) { /* For loop to span the last ten years */
    $minus_years = -$n;

    $start_of_the_year = mktime(0, 0, 0, 1, 1);
    
    $start_date = strtotime("{$minus_years} year",$start_of_the_year);
    $current_year = $start_date;
    $start_date = date('Y-m-d',$start_date);

    $minus_years++;

    $end_date = strtotime("{$minus_years} year",$start_of_the_year);
    $end_date = date('Y-m-d',$end_date);


    $all_events = tribe_get_events(
      array(
        'start_date'=>$start_date,
        'end_date'=>$end_date,
        'posts_per_page'=>10,
      )
    );

    if(sizeof($all_events) > 0) {
?>
  
  <li class="tab-header-and-content past-work-year">
    <a href="javascript:void(0)" class="tab-link">
      <h1 class="past-work-year__title"><?php echo date('Y',$current_year) ?></h1>
    </a>
    <ul class="tab-content past-work-shows"> 
<?php
    foreach($all_events as $post) {
    setup_postdata($post);
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
              <?php 
                echo tribe_get_start_date( $post->ID, false, 'M'); 
                if (tribe_get_start_date($post->ID, false, 'M') != tribe_get_end_date($post->ID, false, 'M')) {
                  echo " - ", tribe_get_end_date( $post->ID, false, 'M');
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
<?php
      }
?>
    </ul>
  </li>

<?php
    }
  }
?>


<?php get_footer(); ?>