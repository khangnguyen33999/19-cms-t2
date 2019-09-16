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
define( 'AUTH_KEY',         '>!V]zU0C&rp?OEF-?Bn9ZBR}d*(ZBF2:j-f0}1?3#U(Mp[)4?(F08sI (*a4v4mM' );
define( 'SECURE_AUTH_KEY',  'MSM(*laO~?@2B.*):j-SSPbj`WTuku- fU#K[L6n[N^kvL;o(SCsUE).Pv;s<5LO' );
define( 'LOGGED_IN_KEY',    'jgkln6%N=2s%9-5m8~lS:2N9_g|}?kOKr6T0R0XC(06XWUoU%Ksw@V6lrt#gh>e4' );
define( 'NONCE_KEY',        'B7G%3(u_/lz>d?>[^h&V#(.K&,phNL.,*JkiO65F&6_PAKA*Seets|vYjLl_OQ+q' );
define( 'AUTH_SALT',        '2v}kkG`I^</|gb!<jJx+loHDn75Y.q!R%#;>:n^yY4DHyB9[~An7|xfqhqom;D>Z' );
define( 'SECURE_AUTH_SALT', 'favU6}bs5_58(E>-9O1iO:x:,SJ*>U34U)nB[% |JDZUF,%LO~Hn@ v#o_ x=bxa' );
define( 'LOGGED_IN_SALT',   'bJ!8Q{%K=p;#X~t26*x N=8 8srHJ(|niOROmDfL*5%9*&!NJHv&Rs0&X/)?>Ac/' );
define( 'NONCE_SALT',       '^dXRZV2;GB1=S^N*fce7Ybc[Dsse.sGE}?]<khk@`Wy>>~vo5=ZsL3#p!}Cdz]RX' );

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
