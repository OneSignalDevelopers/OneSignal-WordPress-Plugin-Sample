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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J,xb5-$1q70Nmy=.k9jnFN]u^7H9`8}Y<BLY&Ku%JJvfBaglJIE[.p$yvbMWki0H' );
define( 'SECURE_AUTH_KEY',  '$I7)HLkA%XnV{GMziYC>SkzUubJdFciZVM{O>K[|],48uX@*:2zn]HF[+]i-n6gC' );
define( 'LOGGED_IN_KEY',    'Bz/A!t16#kK,g$c%xv970qfv>8UGk~RVqF@<B*R!{0+S&>]:Qn<iMm$4pMVM%GNw' );
define( 'NONCE_KEY',        'RC[@;HD{=THiBKxDH_Hmuxldyva]@3jhPfU$P_rVgX<B0|5hCInd6hRje-SM GvS' );
define( 'AUTH_SALT',        'z{|e-_q9 q3a{yA7jy(*TVA{xg|60>YqVJ,Ohpu!ra;M.=+)m5r;P1w|u L|yWcy' );
define( 'SECURE_AUTH_SALT', 'DEOBaOAWz_;dR5q^7$=CXt%l4vK<>haTFp8i2qLLdiX4~ZxBSw}_r(r*Zl7UK9<q' );
define( 'LOGGED_IN_SALT',   'D3Ue.=)fD(<c.[oA|G1 Ifju0hu R-&yxntTU8cq5]*O!ko?L-dXa8zm!Fff.-$%' );
define( 'NONCE_SALT',       'a&uBC*$OfM==?}PebJ2vJTBm@5qhOX*+*+ZvAS,i$54f@$ndu@~m4}l]pqBHT`cR' );

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
