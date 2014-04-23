<?php get_header(); ?>

<section class="slider">
  <img src="<?php echo get_template_directory_uri(); ?>/img/slider-alice.jpg" class="slider__image" alt="">
  <h2 class="slider__caption">now showing: Alice in Wonderland      |      August 1ST - 25TH</h2>
</section>

<ul class="more-shows">
  <?php 
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'tribe_events',
    'meta_key' => '_EventStartDate',
    'orderby' => 'meta_value_num',
    'order' => 'ASC', 
    'meta_query' => array(
      array(
        'key' => 'select_for_homepage_hero',
        'value' => 'no',
        'compare' => '='
        )
      )
  );
  $the_query = new WP_Query( $args ); 
  ?>

  <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="tile">
    <?php
    $image = get_field('image');
    if( !empty($image) ): ?>
      <div class="tile__image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
    <?php endif; ?>
      <h2 class="tile__caption"><?php the_title(); ?></h2>
    </li>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</ul>

<section class="whats-on">
  <h3 class="whats-on__header">Whats On</h4> 
  <ul class="cal-bar">
    <li class="cal-bar__month">JUNE:</li>
    <li class="cal-bar__date">1</li>
    <li class="cal-bar__date">2</li>
    <li class="cal-bar__date">3</li>
    <li class="cal-bar__date">4</li>
    <li class="cal-bar__date">5</li>
    <li class="cal-bar__date">6</li>
    <li class="cal-bar__date">7</li>
    <li class="cal-bar__date">8</li>
    <li class="cal-bar__date">9</li>
    <li class="cal-bar__date">10</li>
    <li class="cal-bar__date">11</li>
    <li class="cal-bar__date">12</li>
    <li class="cal-bar__date">13</li>
    <li class="cal-bar__date">14</li>
    <li class="cal-bar__date">15</li>
    <li class="cal-bar__date">16</li>
    <li class="cal-bar__date">17</li>
    <li class="cal-bar__date">18</li>
    <li class="cal-bar__date">19</li>
    <li class="cal-bar__date">20</li>
    <li class="cal-bar__date">21</li>
  </ul>
</section> 

<div class="column-left">
  <section class="news-flash"><h3 class="news-flash__header">News</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, tempora doloribus culpa itaque. Blanditiis, quibusdam architecto esse soluta minus pariatur natus iste consequuntur rerum cum iusto debitis magnam maxime! Fuga.</section>
  <section class="twitter"><h3>Twitter</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, et, alias exercitationem blanditiis aliquam delectus dolor eius provident culpa veritatis illo non tempora magni perspiciatis doloribus reprehenderit eaque quam placeat.</section>
</div>

<div class="column-right">
  <section class="photo-grid"><h3>Flickr</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, adipisci, placeat, quidem error voluptate quo excepturi exercitationem autem tenetur reiciendis sequi cumque tempore praesentium eligendi eius eaque alias! Optio, recusandae.</section>
</div>

<?php get_footer(); ?>