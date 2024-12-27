<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 */

/**
 * Handles the public-facing functionality of the plugin.
 *
 * This class defines the plugin name, version, and methods to enqueue
 * the public-facing styles and scripts.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Public {

    /**
     * The unique identifier of the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The unique identifier of the plugin.
     */
    private $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of the plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param    string    $plugin_name    The name of the plugin.
     * @param    string    $version        The current version of the plugin.
     */
    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register and enqueue the styles for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style(
            $this->plugin_name, // Handle for the style.
            plugin_dir_url(__FILE__) . 'css/plugin-name-public.css', // Path to the stylesheet.
            array(), // Dependencies (empty array means no dependencies).
            $this->version, // Version number for cache-busting.
            'all' // Media type (e.g., 'all', 'screen', 'print').
        );
    }

    /**
     * Register and enqueue the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script(
            $this->plugin_name, // Handle for the script.
            plugin_dir_url(__FILE__) . 'js/plugin-name-public.js', // Path to the script file.
            array('jquery'), // Dependencies (jQuery in this case).
            $this->version, // Version number for cache-busting.
            true // Load the script in the footer for better performance.
        );
    }
}

/**Explanation of the Code
Purpose
T* his class manages the public-facing functionality of the plugin, such as enqueuing stylesheets and scripts that will be loaded on the front end of a WordPress site.

Key Methods
* __construct($plugin_name, $version)
* Purpose: Initializes the class with the plugin's name and version.

Parameters:
* $plugin_name: A unique identifier for the plugin (used as a handle in WordPress functions).
* $version: The current version of the plugin (used for cache-busting assets).

enqueue_styles()
* Purpose: Enqueues the stylesheet (plugin-name-public.css) for the public-facing side of the site.

Key Details:

* wp_enqueue_style Parameters:
* $this->plugin_name: A unique handle for the stylesheet.
* plugin_dir_url(__FILE__) . 'css/plugin-name-public.css': The URL of the stylesheet file.
* array(): Indicates no dependencies for the stylesheet.
* $this->version: Appends the version number to the file for cache control.
* 'all': Specifies that the stylesheet is applicable to all media types.

enqueue_scripts()
* Purpose: Enqueues the JavaScript file (plugin-name-public.js) for the public-facing side of the site.

Key Details:

* wp_enqueue_script Parameters:
* $this->plugin_name: A unique handle for the script.
* plugin_dir_url(__FILE__) . 'js/plugin-name-public.js': The URL of the JavaScript file.
* array('jquery'): Indicates that the script depends on jQuery.
* $this->version: Appends the version number to the file for cache control.
* true: Loads the script in the footer instead of the header for better performance.

Best Practices Followed

* Encapsulation: The class uses private properties ($plugin_name and $version) to store data securely.
* Cache-Busting: Version numbers are appended to asset URLs to prevent caching issues when updates are deployed.
* Performance: Scripts are loaded in the footer (true in wp_enqueue_script) for faster page load times.
 */