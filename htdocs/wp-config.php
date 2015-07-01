<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1be9aca57e');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3777f446c7d9eb3c127ad17b4ab9cf303fae35c1c95e17530f1ea54274416a5a');
define('SECURE_AUTH_KEY',  '09232d9037abbc315bcfc7a7b5a71a6dbd322bf6f16c290eebb8b133cba0be04');
define('LOGGED_IN_KEY',    '590ab5c2e08f5cfb4c9607f1743beae10b558e0996b28ea262a9eb8b3aa13597');
define('NONCE_KEY',        'ee71dc95cb702d82a9214e07bcaf90cd8d88ad25fd8da4f41984b8b060d0a87a');
define('AUTH_SALT',        '1a7880642b9fabb5d26eec53522172d48d586346b150910213ae87f3939c1e70');
define('SECURE_AUTH_SALT', '52b8e288343cb71a88631a9d3553ae53749cac3f60ed3f43ef33a7d760f316db');
define('LOGGED_IN_SALT',   '37a3545bdfa66d20917107fefca863d79b609028b102b63a8e5932e315ee3ea8');
define('NONCE_SALT',       '56fa915491265ca7b9871eedd41c0c7faa48a690ce9d35e8f5d2049ebcc00ee6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Applications/XAMPP/xamppfiles/apps/wordpress/tmp');

