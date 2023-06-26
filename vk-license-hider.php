<?php
/**
 * Plugin Name:     VK License Hider
 * Plugin URI:      https://github.com/vektor-inc/vk-license-hider
 * Description:
 * Author:
 * Author URI:
 * Text Domain:     vk-license-hider
 * Domain Path:     /languages
 * Version:         0.0.2
 * License:         GNU General Public License v2 or later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         vk-license-hider
 */

// Do not load directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Plugin Update Checker.
 */
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$my_update_checker = PucFactory::buildUpdateChecker(
	'https://github.com/vektor-inc/vk-license-hider',
	__FILE__,
	'vk-license-hider'
);

$my_update_checker->getVcsApi()->enableReleaseAssets();

/**
 * VK Blocks Pro Hide license key field.
 *
 * @param bool $display : Display or not.
 * @return bool
 */
function vklh_vk_blocks_hide_license_key( $display ) {
	$display = false;
	return $display;
}
add_filter( 'vk_blocks_license_key_display_setting', 'vklh_vk_blocks_hide_license_key', 11 );


/**
 * G3 Pro Hide license key field.
 *
 * @param bool $display : Display or not.
 * @return bool
 */
function vklh_g3_pro_hide_license_key( $display ) {
	$display = false;
	return $display;
}
add_filter( 'ltg3pro_license_key_display_setting', 'vklh_g3_pro_hide_license_key', 11 );





