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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naazbazar_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bqEZBUqbr=tcIy-@_t#{%V6ygA^+D%PFW`dS~24 z=yXl.&k*,RY[W*ZXh_(!/a!' );
define( 'SECURE_AUTH_KEY',  'l<2a!bOB!Sgbm`xkKst&&*P-6HfsDGpr?(?ytQ@rtX*gVfh/;$,Q=0LO!g1dWC 3' );
define( 'LOGGED_IN_KEY',    'hf;5e{.--fa+^~2G8{ioUhf4RyQaIWprrW=p>7GW60gp*D#K$hDn,8C~]Q*8-??$' );
define( 'NONCE_KEY',        '6?xiYeC8r-wy=!YlA32c)L{inn`>+|qb+(Tjt!9}TLPplWf?=?(,E[TgZvu.J}`}' );
define( 'AUTH_SALT',        '=#Iiv7E7M]Y~-y}hT;?KNp^`TUP$m>C w{EM?M6753+WBQyAU(Sc9b4(<ZbWUDRy' );
define( 'SECURE_AUTH_SALT', 'O=4Y{h{^ 5MARM+HZ/|fok_`n<h+=s*-J:P%Qh)a7VPWGnV8;QVWf| VFk*MA9&/' );
define( 'LOGGED_IN_SALT',   'm4z`WFviBVW&+xw!Ed2%~!l88d#Eu^lD]&JXWYj!x+ NR{#w,;HDK5O [%Dqc_SK' );
define( 'NONCE_SALT',       'J3sj{(~nKx}|?}wOFSOgM3@pjp)w,YE5?Ph~*J~#zIAm=-*/rnu.7?S921rV (?H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
