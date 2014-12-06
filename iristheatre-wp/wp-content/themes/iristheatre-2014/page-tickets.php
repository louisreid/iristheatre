<?php
/*
Template Name: Tickets 
*/

get_header(); 

?>

<h1 class="tickets__title"><?php wp_title(''); ?></h1>

<?php the_field('ticketshop-embed') ?>

<?php get_footer(); ?>