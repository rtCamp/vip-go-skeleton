<?php
/**
 *  Various custom functionality.
 *
 * @package project-name
 */

// Non-production environment functionality.
if ( 'production' !== wp_get_environment_type() ) {

	// Disable two factor authentication.
	add_filter( 'wpcom_vip_enable_two_factor', '__return_false' );

	// Block crawling.
	add_filter( 'robots_txt', 'project_name_block_crawling', 999, 2 );

	// Enable "Discourage search engines from indexing this site" option.
	add_filter( 'pre_option_blog_public', '__return_zero', 999 );

}

/**
 * Filters the robots.txt output to block crawling on non-production environment.
 *
 * @param string $output The robots.txt output.
 * @param bool   $public Whether the site is considered "public".
 */
function project_name_block_crawling( $output, $public ) {

	$output = '# Crawling is blocked for non-production environment' . PHP_EOL;
	$output .= 'User-agent: *' . PHP_EOL;
	$output .= 'Disallow: /';

	return $output;

}
