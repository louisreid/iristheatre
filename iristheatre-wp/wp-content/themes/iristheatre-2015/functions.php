<?php

    function register_my_menu() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
      register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    function arphabet_widgets_init() {

        register_sidebar( array(
            'name' => 'Email Signup',
            'id' => 'email-signup',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ) );

    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );



    function customize_meta_boxes() {
         remove_meta_box('tribe_events_event_details','events','normal');
    }
    add_action('admin_init','customize_meta_boxes');

    /** THE EVENTS CAL SHORTCODE **/

    /* set the [ckhp-tribe-events] shortcode */
    function ckhp_get_tribe_events($atts) {

        if ( !function_exists( 'tribe_get_events' ) ) { 
            return;
        }

        global $wp_query, $tribe_ecp, $post;
        $output='';
        $ckhp_event_tax = '';
        
        extract( shortcode_atts( array( 
            'cat' => '', 
            'number' => 5,
            'error' => 'y' 
        ), $atts, 'ckhp-tribe-events' ), EXTR_PREFIX_ALL, 'ckhp' );

        if ( $ckhp_cat ) {
            $ckhp_event_tax = array( 
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                    'terms' => $ckhp_cat
                ) 
            );
        }

        $posts = tribe_get_events(apply_filters('tribe_events_list_widget_query_args', array(
                'eventDisplay' => 'upcoming',
                'posts_per_page' => $ckhp_number,
                'tax_query'=> $ckhp_event_tax
        )));

        if ( $posts && !$no_upcoming_events) {

            $output .= '<ul class="hfeed vcalendar ckhp-small ckhp-event-list">';
            foreach( $posts as $post ) :
                setup_postdata( $post );
                $output .= '<li class="">';
                $output .= '<h4 class="entry-title summary">' . '<a href="' . tribe_get_event_link() . '" rel="bookmark">' . get_the_title() . '</a>' . '</h4>';
                $output .= '<div class="duration venue">' . tribe_events_event_schedule_details() . ' ' . tribe_get_venue() . '</div>';
                $output .= '</li>';
            endforeach;
            $output .= '</ul><!-- .hfeed -->';
            $output .= '<p class="tribe-events-widget-link"><a href="' . tribe_get_events_link() . '" rel="bookmark">' . translate( 'View All Events', 'tribe-events-calendar' ) . '</a></p>';

        } else { //No Events were Found
            $output .= ( $ckhp_error == 'y' ? '<p>' . translate( 'There are no upcoming events at this time.', 'tribe-events-calendar' ) . '</p>' : '' ) ;
        } // endif

        wp_reset_query();
        return $output;
    }
    add_shortcode('ckhp-tribe-events', 'ckhp_get_tribe_events'); // link new function to shortcode name

?>
