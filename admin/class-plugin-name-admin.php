<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action('init', array($this, 'custom_post_type'));
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/plugin-name-admin.js', array('jquery'), $this->version, false);
	}

	/**
	 * Registers a custom post type for Books.
	 *
	 * This function defines a custom post type named 'wporg_product' with specific
	 * labels, visibility, and rewrite rules. It is intended to be used within the
	 * WordPress initialization process to add a new post type for managing products.
	 *
	 * @since 1.0.0
	 */
	public function custom_post_tyoe() {
		function wporg_custom_post_type() {
			/**
			 * Registers the 'wporg_product' custom post type.
			 *
			 * This function is called to register a new post type with WordPress, allowing
			 * for the creation and management of 'Product' posts. The post type is public,
			 * has an archive, and uses a custom slug for URLs.
			 *
			 * @since 1.0.0
			 */
			register_post_type(
				'wporg_product',
				array(
					'labels'      => array(
						'name'          => __('Books', 'textdomains'),
						'singular_name' => __('Book', 'textdomains'),
					),
					'public'      => true,
					'has_archive' => true,
					'rewrite'     => array('slug' => 'Books'), // my custom slug
				)
			);
		}
	}
}
