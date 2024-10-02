<?php
/**
 * @package Redbit\SimpleShop\WpPlugin
 * @license MIT
 * @copyright 2016-2022 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

/*
 * Plugin Name: SimpleShop
 * Plugin URI: https://podpora.redbit.cz/stitek/wp-plugin/
 * Description: The SimpleShop WP plugin easily connects your WordPress website with a SimpleShop account and allows you to restrict the access to the web content only for members.
 * Author:  Redbit s.r.o.
 * Author URI: https://www.redbit.cz
 * Version: 2.11.0
 * Text Domain: simpleshop-cz
 * Requires at least: 5.0.0
 * Update URI: https://wordpress.org/plugins/simpleshop-cz/
 */

namespace Redbit\SimpleShop\WpPlugin;

require_once __DIR__ . '/vendor/autoload.php';

define( 'SIMPLESHOP_PLUGIN_VERSION', 'v2.11.0' );
define( 'SIMPLESHOP_PREFIX', '_ssc_' );

/** Start plugin */
SimpleShop::$pluginMainFile = __FILE__;
SimpleShop::getInstance();
