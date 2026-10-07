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
define( 'DB_NAME', 'db_cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'BWQD ![:rE?*{tm=~qq6K#kK x4,ARaIb+B=s@hR>@Vmv6R[57 vvipG5wh))_fF' );
define( 'SECURE_AUTH_KEY',  '!^Q9S_J+7s. 8DL/XXO9^RE:-},+5z,85Ba!O`e5tW1-1VTKt3;P-_5 qsoh$~mv' );
define( 'LOGGED_IN_KEY',    '3(.Sg%ytDP[F5Z4%Gyj@W{Ba,sym0 ery8i/pd27p_)`fB~zyX09GB-YG%Gv30j7' );
define( 'NONCE_KEY',        '_IK9)Q#z7e,4/G9s4&Jm7]B_9~D <.QJL/#PyTfz/4<5)#Tb8gt2~7/{Ke4#k>Dd' );
define( 'AUTH_SALT',        '1K74D9U)Ob0V?u6b8sGQD%efj&=?u1|3$Zy<.5AWm@x4#}eN/./=V`0vqadr|4/a' );
define( 'SECURE_AUTH_SALT', 'cJ(1AMGdy/X+-K2H81F-VHS8m&TPI!v|`94Hth}ga`@)A!ZwqCU%t+mlLw46/!ki' );
define( 'LOGGED_IN_SALT',   '(QW VTx;.l+!Kjz(cZ7H_vR`/B {V?pIGLCZPyesA^LQyNbipBQrw}$6]k-_zj}3' );
define( 'NONCE_SALT',       '+^?6=Ryloe{1s+)$)mBlN]/2{2pnegSb NcHG.?0763w$Z8X~7HRn]eM_-[$J<s|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
