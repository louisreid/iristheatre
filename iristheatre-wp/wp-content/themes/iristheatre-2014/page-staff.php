<?php
/*
Template Name: Staff Page 
*/

get_header(); 

?>

<div class="people-page__header">
    Staff
    <p>
        <a href="#staff-founders">Founders</a>
        <a href="#staff-management">Management</a>
        <a href="#staff-associate-artists">Associate Artists</a>
        <a href="#staff-board-of-trustees">Board of Trustees</a>
        <a href="#staff-honorary-life-members">Honorary Life Members</a>
        <a href="#staff-associate-organisations">Associate Organisations</a>
    </p>
</div>

<section id="staff-founders" class="people-section">
    <h2>Founders</h2>
    <?php the_field('founders-description'); ?>

    <?php
    if( have_rows('founder')): ?>
    <ul class="people-list">
        <?php while (have_rows('founder')) : the_row(); ?>
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

<section id="staff-management" class="people-section">
    <h2>Management</h2>
    <?php the_field('management-description'); ?>

    <?php
    if( have_rows('management')): ?>
    <ul class="people-list">
        <?php while (have_rows('management')) : the_row(); ?>
        <li class="people-single">
            <div class="people-single__image" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
            <div class="people-right">
                <h3><?php the_sub_field('name'); ?></h3>
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php the_sub_field('bio'); ?></p>
                <p><a href="mailto:<?php the_sub_field('email'); ?>"></a><?php the_sub_field('email'); ?></a></p>
            </div>
        </li>
         <?php endwhile; ?>
    </ul>
    <?php 
    else: 
    endif; 
    ?>
</section>

<section id="staff-associate-artists" class="people-section">
    <h2>Associate Artists</h2>
    <?php the_field('associate-artists-description'); ?>

    <?php
    if( have_rows('associate-artists')): ?>
    <ul class="people-list">
        <?php while (have_rows('associate-artists')) : the_row(); ?>
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

<section id="staff-board-of-trustees" class="people-section">
    <h2>Board of Trustees</h2>
    <?php the_field('board-of-trustees-description'); ?>

    <?php
    if( have_rows('board-of-trustees')): ?>
    <ul class="people-list">
        <?php while (have_rows('board-of-trustees')) : the_row(); ?>
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

<section id="staff-honorary-life-members" class="people-section">
    <h2>Honorary Life Members</h2>
    <?php the_field('honorary-life-members-description'); ?>

    <?php
    if( have_rows('honorary-life-members')): ?>
    <ul class="people-list">
        <?php while (have_rows('honorary-life-members')) : the_row(); ?>
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

<section id="staff-associate-organisations" class="people-section">
    <h2>Associate Organisations</h2>
    <?php the_field('associate-organisations-description'); ?>

    <?php
    if( have_rows('associate-organisations')): ?>
    <ul class="people-list">
        <?php while (have_rows('associate-organisations')) : the_row(); ?>
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
