<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sumantra_beliver' );

/** Database username */
define( 'DB_USER', 'sumantra_beliver' );

/** Database password */
define( 'DB_PASSWORD', ')WVMI(QSh4=Z' );

/** Database hostname */
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
define( 'AUTH_KEY',         'U*%kpj:}?S2jjDf&T6~l3-v#lyFqK5Sch .GqzJr/Ib?zVCl+L+T+lYk!_.lob>9' );
define( 'SECURE_AUTH_KEY',  '8}|YWNK$Pn!^m]1 Z,S7{TP+7N9LM.Sj&vS@/B)rIa&J %KzKMr_>x11 qX.IhKj' );
define( 'LOGGED_IN_KEY',    ',!<93)c&Yk=J)sp=<I=ZYH*4o`Y.JZ|5u(l%1<f*7V6yov$)B=mWeiUO+,}F9u4]' );
define( 'NONCE_KEY',        'F}BX-.VvTjoo@*084kI.A4gqXhQb+?UnxYJ(EpMOC5SC!b_P.XiVV-lp(XOS?;Qc' );
define( 'AUTH_SALT',        '*~;lTi3?QUx8<sXXxbA4yi[]8$#Qb3WSry005VOEi8(C~x=k~3=B,#0JO^|+uwaw' );
define( 'SECURE_AUTH_SALT', 's3wI#ihRXTu.6}Y94LJ44y!$uAL5X/U,G4]bSSP#/$6SM`]5Th=LL!a#)FKz1{PJ' );
define( 'LOGGED_IN_SALT',   '<w~7J`:[9SEjZ|N49<n.qX4BlH#.:=^(=:lK3@-i8$SD J*m<fBg=J[&bVu<I?*O' );
define( 'NONCE_SALT',       'G`?&+46>-VRW]io3!H~Zh9Y%L/NI$SA23$hl/5+@)6ba>>%:V+.[;78mk@dm|3#4' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
