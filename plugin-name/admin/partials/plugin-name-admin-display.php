<?php
/**
 * Provide an admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<!-- Admin Area View for Plugin_Name -->

<div class="wrap">
    <h1><?php esc_html_e( 'Plugin Name Settings', 'plugin-name' ); ?></h1>

    <form method="post" action="options.php">
        <?php
            // Output security fields for the registered setting "plugin_name_settings"
            settings_fields( 'plugin_name_settings_group' )
            // Output setting sections and their fields for the "plugin_name_settings" page
            do_settings_sections( 'plugin_name_settings_page' );

            // Output save settings button
            submit_button( __( 'Save Changes', 'plugin-name' ) );
        ?>
    </form>
</div>