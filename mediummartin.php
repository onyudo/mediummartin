<?php
/**
 * Plugin Name:       Martin&#39;s Basic Block
 * Description:       A block that displays a simple text message
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Martin Otis
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mediummartin
 *
 * @package MartinBasicblock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function martin_basicblock_mediummartin_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'martin_basicblock_mediummartin_block_init' );
