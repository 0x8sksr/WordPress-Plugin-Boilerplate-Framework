<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();

//Code Explanation

//This is a basic structure of a WordPress plugin. Let's break it down:

/**1. Plugin Header
php
Copy code
/**
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// This section contains metadata about the plugin. WordPress uses this to show plugin information in the admin area.

/**Plugin Name: Name of the plugin.
Plugin URI: URL to the plugin’s homepage.
Description: A short description of what the plugin does.
Version: The version number of the plugin.
Author and Author URI: The name and URL of the plugin author.
License: The license under which the plugin is released (GPL-2.0+).
License URI: A link to the full text of the license.
Text Domain and Domain Path: For localization, enabling the plugin to be translated into different languages.

2. Security Check:
php
Copy code
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
This is a security measure. If someone tries to access the plugin’s PHP file directly (instead of loading it through WordPress), the code stops executing by using die().

3. Define Plugin Version:
php
Copy code
define( 'PLUGIN_NAME_VERSION', '1.0.0' );
This defines a constant for the plugin version. It's helpful when checking or updating plugin versions in the future.

4. Activation and Deactivation Hooks:
Activation:
php
Copy code
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}
This function is called when the plugin is activated. It includes the class-plugin-name-activator.php file and runs the activate method within it.

Deactivation:
php
Copy code
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}
Similar to the activation, this function is called during deactivation. It includes the class-plugin-name-deactivator.php file and runs the deactivate method within it.

Register Activation and Deactivation Hooks:
php
Copy code
register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
These functions register the activation and deactivation functions. The __FILE__ constant represents the path of the current file, ensuring that the hooks are properly associated with the plugin.

5. Core Plugin Class:
php
Copy code
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';
This line includes the main class of the plugin, where the core functionality resides. The class is expected to define various hooks and actions, and this is where the plugin's functionality is mainly implemented.

6. Plugin Execution:
php
Copy code
function run_plugin_name() {
	$plugin = new Plugin_Name();
	$plugin->run();
}
This function initializes the plugin by creating an instance of the Plugin_Name class and calling its run() method. The run() method is where the main logic of the plugin will be executed.

7. Starting the Plugin:
php
Copy code
run_plugin_name();

Finally, this line calls the run_plugin_name function, starting the execution of the plugin when WordPress loads the plugin file. */

/**Key Changes:
01. Plugin Name and URI were changed to "Litbit Plugin".
02. Text Domain and Class Names were also updated to reflect the new plugin name.
A03. ctivation/Deactivation Function Names: Changed to match the plugin name (litbit_plugin).
04. Version Constant was renamed to LITBIT_PLUGIN_VERSION.
This modified plugin will now work similarly, but for a plugin named "Litbit" instead of the default name used in the boilerplate. The actual logic will still reside in the class files (class-litbit.php, class-litbit-activator.php, and class-litbit-deactivator.php), which you need to implement separately. */