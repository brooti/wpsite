<?php
/**
 * @package Custom Meat Carousel
 */
/*
Plugin Name: Custom Meat Carousel
Description: Provide carousel type
Version: 1.0
Author: Grand
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

add_action( 'init', 'carousel_register_post_carousel' );

function carousel_register_post_carousel()
{
	$labels = array(
		'name'               => _x( 'Carousel', 'post type general name', 'carousel' ),
		'singular_name'      => _x( 'Carousel', 'post type singular name', 'carousel' ),
		'menu_name'          => _x( 'Carousel', 'admin menu', 'boat' ),
		'name_admin_bar'     => _x( 'Carousel', 'add new on admin bar', 'carousel' ),
		'add_new'            => _x( 'Add New', 'carousel', 'carousel' ),
		'add_new_item'       => __( 'Add New Carousel', 'carousel' ),
		'new_item'           => __( 'New Carousel', 'carousel' ),
		'edit_item'          => __( 'Edit Carousel', 'carousel' ),
		'view_item'          => __( 'View Carousel', 'carousel' ),
		'all_items'          => __( 'All Carousel', 'carousel' ),
		'search_items'       => __( 'Search Carousel', 'carousel' ),
		'parent_item_colon'  => __( 'Parent Carousel:', 'carousel' ),
		'not_found'          => __( 'No carousel found.', 'carousel' ),
		'not_found_in_trash' => __( 'No carousel found in Trash.', 'carousel' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'carousel' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'carousel', $args );
}
