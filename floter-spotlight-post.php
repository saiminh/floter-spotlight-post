<?php
/**
 * Plugin Name:       Floter Spotlight Post
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       floter-spotlight-post
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_floter_spotlight_post_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_floter_spotlight_post_block_init' );

function enqueue_floter_spotlight_post_frontend_assets() {

    wp_enqueue_style(
        'floter-spotlight-post-frontend-styles',
        plugins_url('/build/style-index.css', __FILE__)        
    );
}
add_action( 'enqueue_block_assets', 'enqueue_floter_spotlight_post_frontend_assets' );

function enqueue_floter_spotlight_post_editor_assets() {

    wp_enqueue_style(
        'floter-spotlight-post-frontend-styles',
        plugins_url('/build/index.css', __FILE__)        
    );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_floter_spotlight_post_editor_assets' );