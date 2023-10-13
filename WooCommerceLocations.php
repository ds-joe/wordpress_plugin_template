<?php
/*
  Plugin Name: WooCommerce Locations
  Plugin URI:
  Description: A modern WordPress plugin template using PHP, TypeScript, and Sass to help you build powerful and scalable plugins
  Version: 1.0.0
  Author: Joe
  Author URI:
  Text Domain: WooCommerceLocations
  Domain Path: /languages
  License:
*/

/**
 * @package WooCommerceLocations
 */

defined('ABSPATH') or die;

/**
 * Dependencies 
 */
require plugin_dir_path(__FILE__) . "/" . "app/Helpers/Paths.php";
$paths = new Paths(plugin_dir_path(__FILE__), plugin_dir_url(__FILE__));

/** 
 * Config
 */
require $paths->rootPath() . '/' . "config/routes.php";
require $paths->rootPath() . '/' . "config/file_system.php";

/**
 * Traits
 */
require $paths->rootPath() . '/' . "app/Traits/Routes.php";

/**
 * Helpers
 */
require $paths->rootPath() . '/' . "app/Helpers/Scripts.php";


class WooCommerceLocations
{
  use Routes;

  public function __construct()
  {
    add_action('init', array($this, 'activation'));
  }

  public function activation(): void
  {
    $this->createRoutes();
  }
}

if (class_exists(WooCommerceLocations::class)) {
  $wooCommerceLocations = new WooCommerceLocations();
}