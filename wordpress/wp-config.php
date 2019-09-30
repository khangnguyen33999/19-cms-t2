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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f?/^-39pZ^9FUs;}ijFx;|v|>L8#Z||55O`|BvS`MU~q`n0DV,%CA;v=^p@J*A @' );
define( 'SECURE_AUTH_KEY',  '3>%dU3])i(LR32dgoDX1aqb{n2~<3N%UbIhCo/W>RW:+eR+[O2>U7>hnV|@n~4io' );
define( 'LOGGED_IN_KEY',    '-5b_=Q-4X/i+i<q3|`p^Q<0(%wO*G)[MRf].qAN pD|fQwQ6b~uA_%#Q6F.bnH<r' );
define( 'NONCE_KEY',        'ASXXcxU@i5<;~(ww#~2dLXol54@*`.!;3}i&s#OoXJ+S mFXWgI=5Y<7@K@LQa4.' );
define( 'AUTH_SALT',        'Lxh(url1@8Yez^=o_Br#ha!msd-<qrMp3_M]UcJ}KkbKx,1HN~Bcxnrr i@bU~uh' );
define( 'SECURE_AUTH_SALT', 'wgSUZh92=b{q/KWY=;NO5T|4RqH,O.m2G;m$xV6l uNVNYiNG}UZRT#y3*jJ3HPh' );
define( 'LOGGED_IN_SALT',   ',%ZBCB#(MA*PwvA2|L9vGwyFn5-h1~yK H.d9(d) 8i/O[6a[vUcS-vJCM{C|-Gp' );
define( 'NONCE_SALT',       'y8)8d;YUp o<p^uS*_B*$1r.h09t`UJ{HZ?fVy<nDPwQ/!Z=VHnE T%:j~|vsw ;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
