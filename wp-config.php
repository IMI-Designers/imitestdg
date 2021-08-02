<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digititral' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']{zl.$fCVmdRziEA|rtj$Eqb>`r7Eomg_dx4!$foCQsRDl(_|pK(!1nJlyH@/{`+' );
define( 'SECURE_AUTH_KEY',  'UI7YKFIzx?qxbNnE#ywU0h`c[/rztSP=fhrH8g:Scz,lN6/!PSpyXb,H,TkM *B|' );
define( 'LOGGED_IN_KEY',    'smqE)6fv~i$da`#3x#WZ5N0 nfygcd22z-_d0]ac6ozRcz5@+31n$VUl4COh8FAd' );
define( 'NONCE_KEY',        'UK#EfG![EH+Q 16)XD05c|QrU}{vOD}LVEs3Db{}p,xPcj5;QTTWe> _cI jR vG' );
define( 'AUTH_SALT',        'JqB#bdgea2!s/W|zUjhQ$h.,WON/#=6Ul+Npr{RDw9RqCB5wUxK~d@!)ew.li8)v' );
define( 'SECURE_AUTH_SALT', 'lyD_r:+;cG*[csQy-0.@D$2[GO$,7,M@_@yos?;pRhRzgA`6E7V&p:bOHg-GN`pK' );
define( 'LOGGED_IN_SALT',   '/Wib1]PKwbL~l^rd!t<hD6BKE|&2Yy3ni7Ac)[>:1:Mk=]7+O5qlpV&T8HA@~)1u' );
define( 'NONCE_SALT',       '28@guTp62x<~,IOE}bPk`?U9#(H%#>S*2$&W9KB.pb+Nc=PPUd-iuXY>(0`uk7#P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
