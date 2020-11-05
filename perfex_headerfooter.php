<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Perfex Header & Footer
Description: Allow you to enter custom css/javascript into the header and footer of the Perfex Admin & Client Frontend
Version: 1.0.1
Author: Granulr Ltd
Author URI: https://granulr.uk
Requires at least: 2.3.*
*/

define('PERFEX_HEADERFOOTER', 'perfex_headerfooter');

// Setup our hooks
hooks()->add_action('admin_init', 'perfex_headerfooter_setup_init_menu_items');

/**
* Register activation module hook
*/
register_activation_hook(PERFEX_HEADERFOOTER, 'pushover_module_activation_hook');

function perfex_headerfooter_module_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
* Register language files, must be registered if the module is using languages
*/
register_language_files(PERFEX_HEADERFOOTER, [PERFEX_HEADERFOOTER]);

/**
 * Init menu setup module menu items in setup in admin_init hook
 * @return null
 */
function perfex_headerfooter_setup_init_menu_items()
{
    /**
    * If the logged in user is administrator, add custom menu in Setup
    */
    if (is_admin()) {
        $CI = &get_instance();
        // Add JS Menu
        $CI->app_tabs->add_settings_tab('headerfooter_js', [
            'name'     => _l('headerfooter_javascript'),
            'view'     => PERFEX_HEADERFOOTER.'/admin/settings/headerfooter_js_settings',
            'position' => 90,
        ]);

        // Add CSS Menu
        $CI->app_tabs->add_settings_tab('headerfooter_css', [
            'name'     => _l('headerfooter_css'),
            'view'     => PERFEX_HEADERFOOTER.'/admin/settings/headerfooter_css_settings',
            'position' => 91,
        ]);
    }
}
