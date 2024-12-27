<?php

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @link       https://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Handles the registration of all plugin actions and filters.
 *
 * This class maintains and registers hooks (actions and filters)
 * with WordPress and executes them at runtime.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Loader {

    /**
     * The array of actions registered with WordPress.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array $actions List of actions to register with WordPress.
     */
    protected $actions;

    /**
     * The array of filters registered with WordPress.
     *
     * @since    1.0.0
     * @access   protected
     * @var      array $filters List of filters to register with WordPress.
     */
    protected $filters;

    /**
     * Initialize the collections for actions and filters.
     *
     * @since    1.0.0
     */
    public function __construct() {
        $this->actions = [];
        $this->filters = [];
    }

    /**
     * Add a new action to the collection.
     *
     * @since    1.0.0
     * @param    string  $hook          The WordPress action to register.
     * @param    object  $component     Reference to the object where the action is defined.
     * @param    string  $callback      The method to call on the component.
     * @param    int     $priority      Priority of the action. Default is 10.
     * @param    int     $accepted_args Number of accepted arguments. Default is 1.
     */
    public function add_action( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
        $this->actions = $this->add_hook( $this->actions, $hook, $component, $callback, $priority, $accepted_args );
    }

    /**
     * Add a new filter to the collection.
     *
     * @since    1.0.0
     * @param    string  $hook          The WordPress filter to register.
     * @param    object  $component     Reference to the object where the filter is defined.
     * @param    string  $callback      The method to call on the component.
     * @param    int     $priority      Priority of the filter. Default is 10.
     * @param    int     $accepted_args Number of accepted arguments. Default is 1.
     */
    public function add_filter( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
        $this->filters = $this->add_hook( $this->filters, $hook, $component, $callback, $priority, $accepted_args );
    }

    /**
     * Utility function to add hooks (actions/filters) to the collection.
     *
     * @since    1.0.0
     * @access   private
     * @param    array   $hooks         The collection of hooks.
     * @param    string  $hook          The WordPress hook to register.
     * @param    object  $component     Reference to the object where the hook is defined.
     * @param    string  $callback      The method to call on the component.
     * @param    int     $priority      Priority of the hook.
     * @param    int     $accepted_args Number of accepted arguments.
     * @return   array                  The updated collection of hooks.
     */
    private function add_hook( $hooks, $hook, $component, $callback, $priority, $accepted_args ) {
        $hooks[] = [
            'hook'          => $hook,
            'component'     => $component,
            'callback'      => $callback,
            'priority'      => $priority,
            'accepted_args' => $accepted_args,
        ];

        return $hooks;
    }

    /**
     * Register all actions and filters with WordPress.
     *
     * @since    1.0.0
     */
    public function run() {
        foreach ( $this->filters as $hook ) {
            add_filter( $hook['hook'], [ $hook['component'], $hook['callback'] ], $hook['priority'], $hook['accepted_args'] );
        }

        foreach ( $this->actions as $hook ) {
            add_action( $hook['hook'], [ $hook['component'], $hook['callback'] ], $hook['priority'], $hook['accepted_args'] );
        }
    }
}

/**Key Improvements
Replaced Repetitive Code:

Introduced a utility function add_hook for both add_action and add_filter to reduce redundancy.
Code Readability:

Enhanced readability by using array shorthand ([]) and consistent alignment.
Better Documentation:

Improved comments for better understanding of each method and parameter.
WordPress Standards:

Ensured naming conventions and array structures align with WordPress coding practices.
Descriptive Variable Names:

Renamed add method to add_hook for clarity.
This version is optimized for clarity, maintainability, and adherence to best practices in WordPress development. Let me know if you'd like further refinements! */