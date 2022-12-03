=== Menu Item Types — Action ===
Contributors: maxpertici
Donate link: 
Tags: Menu, Custom, Nav item, Action, Hook
Requires at least: 5.8
Tested up to: 6.1
Stable tag: 1.2
Requires PHP: 7.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==
This Menu Item Types Add-on adds the possibility of adding action in your navigation menus.
This plugin extend [Menu Item Types](https://wordpress.org/plugins/menu-item-types/).

== Use your custom action ==

`
/**
 * The executed hook will be prefixed with : mitypes_action_ .
 * To run my_custom_action_name, you need write :
 */

add_action( 'mitypes_action_my_custom_action_name', 'my_callable_function', 10, 2 );

function my_callable_function( $args, $item ){
    echo 'hello world' ;
}
`

== Installation ==
1. If you don't have the Menu Item Types plugin, please install and activate it first. 
2. Install the plugin and activate.
3. Go to Apparence > Menu
4. If the metaboxes Menu Item Types is not visible, use screen options


== Frequently Asked Questions ==

= Is this extension stand-alone? =
No, there are two dependencies:

* [ACF](https://wordpress.org/plugins/advanced-custom-fields/)
* [Menu Item Types](https://wordpress.org/plugins/menu-item-types/)

== Changelog ==

= 1.2 =
* Version bump
* WP 6.1 ready

= 1.1 =
* added some checks on the slug of the action that will be executed in the renders

= 1.0 =
* Init