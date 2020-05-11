<?php
/*
Plugin Name: Philosophy-Companion
Plugin URI:
Author: Tasikul Islam
Author URI: https://iamtasikul.github.io
Description: Philosophy Companion Plugin
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: philosophy_companion
*/

function philosophy_companion_register_my_cpts_book()
{

	/**
	 * Post Type: Books.
	 */

	$labels = [
		"name" => __("Books", "philosophy"),
		"singular_name" => __("Book", "philosophy"),
		"featured_image" => __("Book Cover", "philosophy"),
		"set_featured_image" => __("Set Book Cover Image", "philosophy"),
	];

	$args = [
		"label" => __("Books", "philosophy"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "book", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail"],
	];

	register_post_type("book", $args);
}

add_action('init', 'philosophy_companion_register_my_cpts_book');

function philosophy_button($attributes)
{
	return sprintf(
		'<a class="btn btn--%s fullwidth" href="%s">%s</a>',
		$attributes['type'],
		$attributes['url'],
		$attributes['title']
	);
}
add_shortcode('button', 'philosophy_button');

function philosophy_button2($attributes, $content)
{
	return sprintf(
		'<a class="btn btn--%s fullwidth" href="%s">%s</a>',
		$attributes['type'],
		$attributes['url'],
		$content,
	);
}
add_shortcode('button2', 'philosophy_button2');
