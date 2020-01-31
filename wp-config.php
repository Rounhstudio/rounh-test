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
define( 'DB_NAME', 'rounh-test_dp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^CtsTUA>VRD]_sF.T5jc^|sr:8nb-p<iFYSYlbjn~<rz_rj;6=:z$bG]Dm~.0xM0' );
define( 'SECURE_AUTH_KEY',  '0aGe/W;92A3O]2XSk$gjuNQi%xb361?k`Mz^%rd jt@2$U!L7<6;@%Kys<}.rKEh' );
define( 'LOGGED_IN_KEY',    '-#C+^;vAJd+r<FcoBSz}kkzz<PFWuKK7f~ltCV70.9}n~}:,mT$+*WG<vS.H0JAN' );
define( 'NONCE_KEY',        'gDO6jI@byd9<Q|C.OGN/;#=yA[5:h^7lEc5^l}u~2L/3)ijJ2?F9 e #.V*%5Pw?' );
define( 'AUTH_SALT',        '$Jb$YflD}n0O{FR*O }y#1q1WSk7+vJ(r`_6Ki1%UfcAGslRLp( 2mjXn1jHVvm2' );
define( 'SECURE_AUTH_SALT', 'uI<2JGFF#r=mHb{w1D[I3$M8m (hiYq.fMaN<b?hI4Z2%YmfN8b/`m!R?#6_%^7w' );
define( 'LOGGED_IN_SALT',   'Fi8p8*IPVsqBk2pEx4P,xcSI]5!<a0iW|^n8y+>~Fg#P(9~5cMPVt>%@k)dmdY`k' );
define( 'NONCE_SALT',       'i4e?XBM:1I~9A*%.h`IE3K1d5d/y$Dl?`ms5 :Xr9TzLNXEatLVSE8_9XwNbXI!g' );

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
