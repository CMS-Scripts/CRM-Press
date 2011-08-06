<?php
/**
 *
 * This file removes unnecessary dashboard widgets and adds in some of our own.
 *
 * @package CRM Press
 *
 */

add_action( 'admin_menu', 'crmpress_remove_dashboard_boxes' );
/**
 *
 * This function removes the unnecessary default dashboard widgets.
 *
 * @since 1.0
 *
 */
function crmpress_remove_dashboard_boxes() {

	remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );
	
}


add_action( 'wp_dashboard_setup', 'crmpress_custom_dashboard_widgets' );
/**
 *
 * This function adds a dashboard widget in place of all the removed ones.
 *
 * @todo figure out what to do with this
 *
 * @since 1.0
 *
 */
function crmpress_custom_dashboard_widgets() {

	wp_add_dashboard_widget( 'custom_help_widget', 'CRM Press', 'crmpress_dashboard_help' );
	
}

/**
 *
 * This is the callback function for the 'CRM Press' dashboard widget.
 *
 * @since 1.0
 *
 */
function crmpress_dashboard_help() {

    echo '<p>Welcome to the ' .get_bloginfo( 'name' ). ' dashboard panel</p>';
    
}