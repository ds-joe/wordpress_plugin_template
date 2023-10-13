<?php

# Paths
define('PUBLIC_PATH', $paths->rootPath() . "/public");
define('RESOURCES_PATH', $paths->rootPath() . "/resources");
define('BUILD_PATH', PUBLIC_PATH . "/build");
define('IMAGES_PATH', PUBLIC_PATH . "/images");
define('VIEWS_PATH', RESOURCES_PATH . "/views");
define('STYLES_PATH', BUILD_PATH . "/styles");
define('SCRIPTS_PATH', BUILD_PATH . "/scripts");

# Urls
define('PUBLIC_URL', $paths->rootUrl() . "/public");
define('RESOURCES_URL', $paths->rootUrl() . "/resources");
define('BUILD_URL', PUBLIC_URL . "/build");
define('IMAGES_URL', PUBLIC_URL . "/images");
define('VIEWS_URL', RESOURCES_URL . "/views");
define('STYLES_URL', BUILD_URL . "/styles");
define('SCRIPTS_URL', BUILD_URL . "/scripts");