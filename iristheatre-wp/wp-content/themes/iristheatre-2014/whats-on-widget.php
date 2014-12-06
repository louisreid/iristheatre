<section class="whats-on-widget">
  <?php

    //   // Ensure the global $post variable is in scope
    // global $post;
    // // Retrieve the next 5 upcoming events
    // $events = tribe_get_events( array(
    //   'posts_per_page' => 5,
    //   'meta_query' => array(
    //     array(
    //       'key' => 'select_for_homepage_hero',
    //       'value' => 'no',
    //       'compare' => '='
    //       )
    //     )
    // ) );
    // foreach ( $events as $post ) {
    //   setup_postdata( $post );
    //   the_title();
    // }

  ?>


  <!-- Main Events Content -->
  <?php // tribe_get_template_part( 'month/content' ); ?>

  <div style="display: none;"> 
    <?php tribe_calendar_grid(); ?>
  </div>
  <?php
    $days_of_week = tribe_events_get_days_of_week();
    $week = 0;
    global $wp_locale;
  ?>
  <h3 class="whats-on-widget__header">Whats On - <?php echo tribe_get_current_month_text(); ?></h4> 
  <h3></h3>
  <table class="month-view">
    <thead>
    <tr>
      <?php foreach ( $days_of_week as $day ) : ?>

        <th id="tribe-events-<?php echo strtolower( $day ) ?>" title="<?php echo $day ?>" data-day-abbr="<?php echo $wp_locale->get_weekday_abbrev( $day ); ?>"><?php echo $day ?></th>
      <?php endforeach; ?>
    </tr>

    <tr>
      <?php while (tribe_events_have_month_days()) : tribe_events_the_month_day(); ?>
        <?php if ( $week != tribe_events_get_current_week() ) : $week ++; ?>
    </tr>
    <tr>
        <?php endif;
        $daydata = tribe_events_get_current_month_day(); ?>
      <td class="<?php tribe_events_the_month_day_classes() ?>"
          <?php if ( isset( $daydata['daynum'] ) ) { ?>
            data-day="<?php echo $daydata['daynum'] ?>"
            <?php
            //Add Day Name Option for Responsive Header
            if ( $daydata['total_events'] > 0 ) {
              $day_name = tribe_event_format_date( $daydata['date'], false );
              ?>
              data-date-name="<?php echo $day_name ?>"
            <?php
            }
            ?>

          <?php } ?>
        >
          <?php tribe_get_template_part( 'month/single', 'day' ) ?>
        </td>
        <?php endwhile; ?>
    </tr>
  </table>

</section>
