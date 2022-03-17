<?php
/**
 * Plugin Name: Cuttlesoft Headless (SEO)
 * Plugin URI: https://github.com/cuttlesoft/wds-headless-seo
 * Description: Headless extension handling SEO functionality.
 * Author: Cuttlesoft <engineering@cuttlesoft.com>
 * Author URI: https://cuttlesoft.com
 * Version: 1.0.0
 * Requires at least: 5.6
 * Requires PHP: 7.4
 * License: GPL-2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/cuttlesoft/wds-headless-seo
 * Primary Branch: cuttle-main
 *
 * @package WDS_Headless_SEO
 */

namespace WDS_Headless_SEO;

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

// Define constants.
define( 'WDS_HEADLESS_SEO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WDS_HEADLESS_SEO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WDS_HEADLESS_SEO_VERSION', '1.0.0' );

// Register de/activation hooks.
register_activation_hook( __FILE__, __NAMESPACE__ . '\activation_callback' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivation_callback' );

require_once 'inc/links.php';
require_once 'inc/wp-graphql.php';
