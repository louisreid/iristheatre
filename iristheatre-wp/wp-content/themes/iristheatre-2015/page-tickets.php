<?php
/*
Template Name: Tickets 
*/

get_header(); 

?>

<h1 class="tickets__title"><?php wp_title(''); ?></h1>
<p>
    Our ticketing system is provided by ticket script, for any help needed please use the following <a href="http://company.ticketscript.com/uk/support/ticket-buyers/most-frequently-asked/i-can-t-find-my-ticket-confirmation-email/368/">support page.</a>
</p>

<div class="tickets__ticketshop-iframe">
  <?php the_field('ticketshop-embed') ?>
</div>

<?php get_footer(); ?>