<?php

defined( 'ABSPATH' ) or	die();

if( function_exists('acf_add_local_field_group') ){



    acf_add_local_field_group(array(
        'key' => 'group_mitypes_action_61bf934442109',
        'title' => 'action',
        'fields' => array(
            array(
                'key' => 'field_mitypes_action_61bf9352a82ce',
                'label' => 'Action slug',
                'name' => 'mitypes_action_slug',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'mitypes',
                    'operator' => '==',
                    'value' => 'action',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    

}