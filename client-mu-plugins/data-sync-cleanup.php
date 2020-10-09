<?php
/**
 * Functionality to update settings after data sync on vip-go environment.
 */

/**
 * Update site visibility from public to private on data sync.
 */
function update_site_visibility_on_data_sync() {

	// Safety first: Don't do anything in the production environment.
	if ( ! defined( 'VIP_GO_APP_ENVIRONMENT' ) || 'production' === VIP_GO_APP_ENVIRONMENT ) {
		return;
	}

	// Public blogs have a setting of 1, private blogs are 0.
	if ( is_multisite() ) {
		update_blog_public( 1, 0 );
	}

	// Update site reading option.
	update_option( 'blog_public', 0 );

}

add_action( 'vip_go_migration_cleanup', 'dt_update_site_visibility_on_data_sync' );
