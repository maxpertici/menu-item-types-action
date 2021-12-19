<?php

$action_slug = get_field( 'mitypes_action_slug', $item->ID );

do_action( 'mitypes_action_' . esc_html( $action_slug ), $args, $item );