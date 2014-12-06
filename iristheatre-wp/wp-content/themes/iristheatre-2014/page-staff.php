<?php
/*
Template Name: Staff Page 
*/

get_header(); 

?>

<?php the_field('founders-description'); ?>

<?php

if( have_rows('founder')):

    while (have_rows('founder')) : the_row();
        
?>

    <img src="<?php the_sub_field('image'); ?>" alt="">
    
<?php
        the_sub_field('name');
        the_sub_field('title');
        the_sub_field('bio');
        the_sub_field('email');

    endwhile;

else:

endif;

?>


<?php the_field('honorary-life-members-description'); ?>

<?php

if( have_rows('honorary-life-members')):

    while (have_rows('honorary-life-members')) : the_row();
        
?>

    <img src="<?php the_sub_field('image'); ?>" alt="">
    
<?php
        the_sub_field('name');
        the_sub_field('title');
        the_sub_field('bio');
        the_sub_field('email');

    endwhile;

else:

endif;

?>





<?php get_footer(); ?>
