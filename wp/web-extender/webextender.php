<?php
/**
 * This is the main WebExtender plugin file, here we declare and call the important things.
 *
 * @package           WebExtender
 * @author            AFLAH ZAMAN
 * @copyright         2025 AFLAH ZAMAN
 * @license           GPL-2.0-or-later
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       WebExtender
 * Plugin URI:        https://aflahzaman.com/webextender
 * Description:       WebExtender - Website Custom Functionality Plugin for WordPress.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Tested up to:      6.7
 * Requires PHP:      7.2
 * Author:            AFLAH ZAMAN
 * Author URI:        https://aflahzaman.com
 * Text Domain:       webextender
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://aflahzaman.com/webextender/
 * Requires Plugins:  insert-headers-and-footers, jetpack
 */ 
function afz_year_shortcode () {
$year = date ('Y');
return $year;
}
add_shortcode ('year', 'afz_year_shortcode');
