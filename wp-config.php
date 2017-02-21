<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tumbas_profile');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'b1qywskbmbr79vucdq2ojalwdjeydbpqzncfyxchjmac4jdgbfqewjrvuwymeczk');
define('SECURE_AUTH_KEY',  'umyxpofzpo4gkw79viaa2cwat8r1jlgfbnpuif1wrclnt3qo26ncmhhh2ry4mizl');
define('LOGGED_IN_KEY',    '7ngdkmou7kvznxb0ga0ssgqsx1avmf0rg9flvf5auc5shboqqy3eovmwytx4hsul');
define('NONCE_KEY',        '0lk293uyrsl9kpqqil1zrjg7hnylwnsgvt5apbf8gcuu5rxkwyoislrisl4rv1u7');
define('AUTH_SALT',        'asa4kaxudyhs4rqpmkofqj8exd0tvghhhvzsbcpj5mxkpfnrhkuhz49xzfrzlo8l');
define('SECURE_AUTH_SALT', 'tflcd77yzydrzy99ojoalza8ipegmhi7lh1ktcs33m8cqkjwqk5el7bjfczqt5vb');
define('LOGGED_IN_SALT',   'avgnjlbrxgv8xkhsxngz9r4bjbjxqodtbiiy7io6aeozavvl2hrjnccudiepclhh');
define('NONCE_SALT',       'g7q04qidb4rkuxw6x0mttnf4nx3fvroqjnkqensjckh132qt3osuggjo4mldgjpa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
