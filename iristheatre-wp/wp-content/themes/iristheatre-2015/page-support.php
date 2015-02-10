<?php
/*
Template Name: Supporters Page 
*/

get_header(); 

?>


<div class="people-page__header">
    Support
</div>
<section class="people-section">
    <h2>Supporters</h2>
    <?php the_field('supporters-description'); ?>
    <?php
    if( have_rows('support-member')): ?>
    <ul class="people-list">
        <?php while (have_rows('support-member')) : the_row(); ?>
        <li class="people-single">
            <div class="people-single__image" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
            <div class="people-right">
                <h3><?php the_sub_field('name'); ?></h3>
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php the_sub_field('bio'); ?></p>
                <p><?php the_sub_field('email'); ?></p>
            </div>
        </li>
         <?php endwhile; ?>
    </ul>
    <?php 
    else: 
    endif; 
    ?>
</section>

<?php get_footer(); ?>
