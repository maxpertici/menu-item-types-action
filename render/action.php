<?php

$action_slug = get_field( 'mitypes_action_slug', $item->ID );
$action_slug = str_replace( '-', '_', sanitize_title( $action_slug ) );

if( '' != trim( $action_slug ) ){
    do_action( 'mitypes_action_' . esc_html( $action_slug ), $args, $item );
}
