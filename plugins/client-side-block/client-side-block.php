<?php
/**
 * Plugin Name:       Client-side block
 * Description:       Example client-side block
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            WPVIP
 */

add_action('enqueue_block_editor_assets', function() {
	wp_enqueue_script(
		'wpvip-client-side-block',
		plugins_url('client-side-block.js', __FILE__),
		['wp-blocks', 'wp-element', 'wp-block-editor', 'wp-i18n' ]
	);
});
