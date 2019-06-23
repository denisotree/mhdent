<?php

/**
 * @param $query
 */

function order_filter( $query )
{
    if ( is_admin() || !$query->is_main_query() ) return;
    if ( is_tag() ) {
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
        return;
    }
}
add_action( 'pre_get_posts', 'order_filter' );
