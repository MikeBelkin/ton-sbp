
<?php
/**
 * Plugin Name:       TON QR SPB
 * Description:       Toncoin via blockchain TON (The Open Network, Toncoin) for SBP QR
 * Plugin URI:        https://github.com/MikeBelkin/ton-sbp
 * Author:            MikeBelkin
 * Author URI:        https://github.com/MikeBelkin
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       ton-sbp
 * Domain Path:       /languages
 * Version:           0.1
 */

namespace TonSBP_QR;

// If this file is called directly, abort.
defined('ABSPATH') || die;

$files = glob(__DIR__ . '/includes/*.php');
foreach ($files as $file) {
	require_once $file;
}

add_action('plugins_loaded', function () {
	load_plugin_textdomain( 'ton-sbp', false, __DIR__ . '/languages/' );
});
