<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://louisnovick.com
 * @since             1.0.0
 * @package           Pet_Adoption_Orlando
 *
 * @wordpress-plugin
 * Plugin Name:       Pet Adoption Orlando
 * Plugin URI:        https://github.com/cforlando
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Louis
 * Author URI:        http://louisnovick.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pet-adoption-orlando
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pet-adoption-orlando-activator.php
 */
function activate_pet_adoption_orlando() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pet-adoption-orlando-activator.php';
	Pet_Adoption_Orlando_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pet-adoption-orlando-deactivator.php
 */
function deactivate_pet_adoption_orlando() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pet-adoption-orlando-deactivator.php';
	Pet_Adoption_Orlando_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pet_adoption_orlando' );
register_deactivation_hook( __FILE__, 'deactivate_pet_adoption_orlando' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pet-adoption-orlando.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pet_adoption_orlando() {

	$plugin = new Pet_Adoption_Orlando();
	$plugin->run();

}
run_pet_adoption_orlando();
