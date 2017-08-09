<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Blog Designer - Post and Widget
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Bdpw_Admin {

	function __construct() {

		add_filter('manage_edit-category_columns', array($this, 'bdpw_manage_category_columns'));

		// Filter to add extra column to post category
		add_filter('manage_category_custom_column', array($this, 'bdpw_cat_columns_data'), 10, 3);

		// Action to register admin menu
		add_action( 'admin_menu', array($this, 'bdpw_register_menu'), 9 );
	}

	/**
	 * Admin Class
	 *
	 * Add extra column to post category
	 *
	 * @package Blog Designer - Post and Widget
	 * @since 1.0
	*/
	function bdpw_manage_category_columns($columns) {

	    $new_columns['wpspw_shortcode'] = __( 'Category Shortcode', 'blog-designer-for-post-and-widget' );
	    
	    $columns = bdpw_add_array( $columns, $new_columns, 2 );
	    
	    return $columns;
	}

	/**
	 * 
	 * Add data to extra column to post category
	 * 
	 * @package Blog Designer - Post and Widget
	 * @since 1.0
	*/
	function bdpw_cat_columns_data($ouput, $column_name, $tax_id) {
	    
	    switch ($column_name) {
	        case 'wpspw_shortcode':
	            echo '[wpspw_post category="' . $tax_id. '"]<br />';
	            echo '[wpspw_recent_post_slider category="' . $tax_id. '"]<br />';
	            break;
	    }
	    return $ouput;
	}

	/**
	 * Function to register admin menus
	 * 
	 * @package WP Stylish Post And Widgets Pro
	 * @since 1.0.4
	 */
	function bdpw_register_menu() {
		add_submenu_page( 'edit.php', __('Blog Designer', 'blog-designer-for-post-and-widget'), __('Blog Designer', 'blog-designer-for-post-and-widget'), 'manage_options', 'wpspw-pro-settings', array($this, 'bdpw_settings_page') );
	}

	/**
	 * Function to handle the setting page html
	 * 
	 * @package WP Stylish Post And Widgets Pro
	 * @since 1.0.4
	 */
	function bdpw_settings_page() {
		include_once( BDPW_DIR . '/includes/admin/complete-shortcode/bdpw-shortcode.php' );
	}
}

$bdpw_admin = new Bdpw_Admin();