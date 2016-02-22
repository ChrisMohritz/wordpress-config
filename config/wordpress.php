<?php


/**
  * Custom WordPress configuration
  *
  * "wp-config.php" file.
  *
  */


/* ============================================================================================== */
// CONFIG
/* ============================================================================================== */

$db_name = '';
$db_user = '';
$db_password = '';
$db_host = '';
$table_prefix = '';

$ftp_user = '';
$ftp_pass = '';
$ftp_host = '';
$ftp_ssl = '';

$wp_siteurl = '';
$wp_home = '';

/* ============================================================================================== */


/* ============================================================================================== */
// DATABASE
/* ============================================================================================== */
define('DB_NAME', $db_name);
define('DB_USER', $db_user);
define('DB_PASSWORD', $db_password);
define('DB_HOST', $db_host);
define('DB_CHARSET', 'utf8');
/* ============================================================================================== */


/* ============================================================================================== */
// AUTHENTICATION (copy/paste from https://api.wordpress.org/secret-key/1.1/salt/)
/* ============================================================================================== */
define('AUTH_KEY', '');
define('SECURE_AUTH_KEY', '');
define('LOGGED_IN_KEY', '');
define('NONCE_KEY', '');
define('AUTH_SALT', '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT', '');
define('NONCE_SALT', '');
/* ============================================================================================== */


/* ============================================================================================== */
// REQUIRE SSL
/* ============================================================================================== */
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
/* ============================================================================================== */


/* ============================================================================================== */
// REMOVE WORDPRESS VERSION FROM HEAD
/* ============================================================================================== */
add_filter('the_generator', '__return_null');
/* ============================================================================================== */


/* ============================================================================================== */
// BLOCK OUTGOING TRAFFIC
/* ============================================================================================== */
define('WP_HTTP_BLOCK_EXTERNAL', true);
define('WP_ACCESSIBLE_HOSTS', '*.wordpress.org,wordpress.org');
/* ============================================================================================== */


/* ============================================================================================== */
// LOCALIZATION
/* ============================================================================================== */
define('WPLANG', 'en_EN');
/* ============================================================================================== */


/* ============================================================================================== */
// BASE URL
/* ============================================================================================== */
define('WP_SITEURL', $wp_siteurl);
define('WP_HOME', $wp_home);
/* ============================================================================================== */


/* ============================================================================================== */
// POSTS
/* ============================================================================================== */
define('WP_POST_REVISIONS', '5');
/* ============================================================================================== */


/* ============================================================================================== */
/* MEDIA TRASH
/* ============================================================================================== */
define('MEDIA_TRASH', true);
/* ============================================================================================== */


/* ============================================================================================== */
// AUTO EMPTY TRASH
/* ============================================================================================== */
define('EMPTY_TRASH_DAYS', 15);
/* ============================================================================================== */


/* ============================================================================================== */
// MEMORY LIMIT
/* ============================================================================================== */
define('WP_MEMORY_LIMIT', '64');
/* ============================================================================================== */


/* ============================================================================================== */
// FTP
/* ============================================================================================== */
define('FTP_USER', $ftp_user);
define('FTP_PASS', $ftp_pass);
define('FTP_HOST', $ftp_host);
define('FTP_SSL', $ftp_ssl);
/* ============================================================================================== */


/* ============================================================================================== */
// Updates
/* ============================================================================================== */
define('WP_AUTO_UPDATE_CORE', true);
/* ============================================================================================== */


/* ============================================================================================== */
// FILE EDITING
/* ============================================================================================== */
define('DISALLOW_FILE_EDIT', true);
/* ============================================================================================== */


/* ============================================================================================== */
// MULTISITE
/* ============================================================================================== */
define('WP_ALLOW_MULTISITE', false);
/* ============================================================================================== */


/* ============================================================================================== */
// DEBUG
/* ============================================================================================== */
define('WP_DEBUG', false);
/* ============================================================================================== */


/* Absolute path to the WordPress directory. */
if(!defined('ABSPATH')) {define('ABSPATH', dirname(__FILE__) . '/');}

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
