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
define( 'DB_NAME', 'db_retro' );

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
define( 'AUTH_KEY',         '5e<h,EoKB9_wPyjkF_mYy;qcKQXF%Dz-EO;uPADlM +az0!F}83]g*TFCF[ekqL$' );
define( 'SECURE_AUTH_KEY',  'ah(.j*Eh-5`P#_f_*0[vQG..[t%tX,&3Dj !wuyPW@e8x45p^HaNJ-`9B(OQ.gx`' );
define( 'LOGGED_IN_KEY',    '7g+;Jo}L-xdAOJ*f8q$A#qF4ywa[Z_}C@hXlXQ<IzDj8n|^B9~bCPP?C/ik7!*t:' );
define( 'NONCE_KEY',        'tozF-ePns]j}=ESe?./M;}:/Vl7>-_N<+|@Skt2p_O)j1Ma^l4I)AC^zyf#?`LzT' );
define( 'AUTH_SALT',        '_4jtC7~~`=jR8SVFXY!lNouA9M3=<)hejd.@l7EX=t.f_IHq`:ph*a~{/nC8hg5G' );
define( 'SECURE_AUTH_SALT', 'TS1OH+L)@FJ]%[(}5E)Wahhf=UzPFyn8]rT<Vu$ud(2e?P/uRVp0yADpmi7k4-D)' );
define( 'LOGGED_IN_SALT',   '~kiq<l6|B(&<I*V5kz1^{~@md`c=GGy>UhlZ[l4b:%H$Z;NcSQsVDzbG#.60<=(#' );
define( 'NONCE_SALT',       'bz]D4|U_Nl|x`Pl^19t1G:36{}k#9qGV}Y]q5PfXR/{Vc59~ y6G,@2bX^A^Ff_#' );

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
