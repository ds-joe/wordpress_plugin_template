<?php
/**
 * @package WooCommerceLocations
 */


define("ROUTE_SLUG", 'settings');

define(
  'MAIN_ROUTE',
  [
    'page-title' => "Woo Commerce Locations Settings",
    'menu-title' => "WCL Settings",
    'capability' => "manage_options",
    'file' => "settings.php",
    'style_files' => ["main"],
    'script_files' => []
  ],
);

define(
  "ROUTES",
  array(
    [
      'page-title' => "test1",
      'menu-title' => "test1",
      'capability' => "manage_options",
      'page-domain' => "test1",
      'file' => "settings.php",
    ]
  )
);