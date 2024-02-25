<?php

/**
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://conedevelopment.com/
 * Description:       Plugin Description
 * Version:           1.0.0
 * Author:            Cone Development
 * Author URI:        https://conedevelopment.com
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       plugin-slug
 * Domain Path:       /languages/
 * Requires at least: 6.0
 * Tested up to:      6.4.3
 * Requires PHP:      7.4
 */

// Pull in the autoloader
if (! class_exists(Cone\Plugin::class)) {
    require_once __DIR__.'/autoload.php';
}

// Register the activation and the deactivation hooks
register_activation_hook(__FILE__, [Cone\Plugin::class, 'activate']);
register_deactivation_hook(__FILE__, [Cone\Plugin::class, 'deactivate']);

// Boot the plugin
add_action('plugins_loaded', [Cone\Plugin::class, 'boot'], 10, 0);

// Load translations
add_action('init', [Cone\Plugin::class, 'loadTextDomain'], 10, 0);
