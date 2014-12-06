<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

$event_id = get_the_ID();

?>

<section class="show-head">

    <div class="show-head-left">

        <div class="show-title"><?php the_field('show-title'); ?></div>
        
        <h4 class="show-dates">
            <?php echo tribe_get_start_date( $post->ID, false, 'j F'); 
                if (tribe_get_start_date($post->ID, false, 'j F') != tribe_get_end_date($post->ID, false, 'j F')) {
                    echo " - ", tribe_get_end_date( $post->ID, false, 'j F');
                }
            ?>
        </h4>

        <p class="show-stars">
            <?php 
                $stars = get_field('stars');

                echo str_repeat('<i class="fa fa-star stars--show"></i>', $stars);
            ?>
        </p>

        <div class="show-review">
            <?php 
                $reviewText = get_field('review-text');
                if ( !empty($reviewText)) {
                    the_field('review-text');
                }
            ?>
        </div>

    </div>

    <div class="show-head-right">

        <?php 
            $videoUrl = get_field('video-url');
            if( !empty($videoUrl) ){ 
                $videoUrl = apply_filters('the_content', $videoUrl);
                echo $videoUrl;
            } else { ?>
            <img class="show-image" src="<?php the_field('image'); ?>" alt="">
        <?php
            }
         ?>
        
    </div>

    
</section>
    
<section class="show-body">
    <div class="show-body-left">
        <div class="show-text">
            <?php 
                $showText = get_field('show-text');
                if ( !empty($showText)) {
                    the_field('show-text');
                }
            ?>
        </div>
    </div>

    <div class="show-body-right">
        <div class="show-ticketshop-link">
            <?php 
                $ticketshopLink = get_field('ticketshop-link');
                if ( !empty($ticketshopLink)) {
            ?>
                <a href="<?php the_field('ticketshop-link'); ?>">Buy Tickets</a>
            <?php } ?>
        </div>

        <div class="show-thumbnails">
            <?php $numberOfImages = get_field('number_of_show_thumnails'); ?>

            <?php if ($numberOfImages = 1 or 2 or 3){ 
                $imageArray = get_field('show-thumbnail-image-1');
                $imageURL = $imageArray['url'];
                $imageAlt = $imageArray['alt'];
                $imageThumbURL = $imageArray['sizes']['thumbnail'];
            ?>
                <a class="fluidbox-thumbnail" href="<?php echo $imageURL; ?>">
                    <img src="<?php echo $imageThumbURL ?>" alt="<?php echo $imageAlt ?>">
                </a>
            <?php } ?>

            <?php if ($numberOfImages = 2 or 3) {
                $imageArray = get_field('show-thumbnail-image-2');
                $imageURL = $imageArray['url'];
                $imageAlt = $imageArray['alt'];
                $imageThumbURL = $imageArray['sizes']['thumbnail'];
            ?>
                <a class="fluidbox-thumbnail" href="<?php echo $imageURL; ?>">
                    <img src="<?php echo $imageThumbURL ?>" alt="<?php echo $imageAlt ?>">
                </a>
                
            <?php } ?>

            <?php if ($numberOfImages = 3) { 
                $imageArray = get_field('show-thumbnail-image-3');
                $imageURL = $imageArray['url'];
                $imageAlt = $imageArray['alt'];
                $imageThumbURL = $imageArray['sizes']['thumbnail'];
            ?>
                <a class="fluidbox-thumbnail" href="<?php echo $imageURL; ?>">
                    <img src="<?php echo $imageThumbURL ?>" alt="<?php echo $imageAlt ?>">
                </a>
                
                
            <?php } ?>
            
        </div>

        <div class="show-twitter">
            <h4 class="show-twitter-link">
                <a href="https://twitter.com/hashtag/<?php the_field('twitter-link') ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="">
                    &#35;<?php the_field('twitter-link') ?>
                </a>
            </h4>
            <?php 
              $twitter = get_field('twitter-code'); 
              if ( !empty($twitter)) {
                  echo '<a data-chrome="nofooter noheader noborders transparent"',substr($twitter, 3); 
              }
            ?>
        </div>
    </div>
</section>