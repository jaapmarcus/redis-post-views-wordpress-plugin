<?php
/*
Plugin Name: Redis Post Views
Plugin URI: http://wordpress.org/extend/plugins/optimize-redis-post-views/
Description: Highly optimized post views using Redis
Version: 1.7.1
Author: Razvan Stanga, Jaap Marcus
Author URI: http://git.razvi.ro/
License: http://www.apache.org/licenses/LICENSE-2.0
Text Domain: redis-post-views
Network: true

Copyright 2017: Razvan Stanga (email: redis-post-views@razvi.ro)
*/
define('RPV_VERSION', '1.7.1');
define('RPV_PATH', dirname( __FILE__ ));

$config_file = WP_CONTENT_DIR  . '/wp-config-rpv.php';
if (file_exists($config_file)) {
    include($config_file);
}
include(RPV_PATH . '/classes/redis_post_views.php');

$redis_post_views = new Redis_Post_Views();

// WP-CLI
if (defined('WP_CLI') && WP_CLI) {
    include('wp-cli.php');
}
