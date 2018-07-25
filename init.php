<?php
/*
Plugin Name: Redis Post Views
Plugin URI: http://wordpress.org/extend/plugins/post-views-redis/
Description: Highly optimized post views using Redis
Version: 1.5
Author: Razvan Stanga
Author URI: http://git.razvi.ro/
License: http://www.apache.org/licenses/LICENSE-2.0
Text Domain: redis-post-views
Network: true

Copyright 2017: Razvan Stanga (email: redis-post-views@razvi.ro)
*/
define('RPV_VERSION', 1.5);
define('RPV_PATH', dirname( __FILE__ ));

include(WP_CONTENT_DIR  . '/wp-config-rpv.php');
include(RPV_PATH . '/classes/redis_post_views.php');

$redis_post_views = new Redis_Post_Views();

// WP-CLI
if (defined('WP_CLI') && WP_CLI) {
    include('wp-cli.php');
}