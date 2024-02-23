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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'IO `W}`AT[Ji[ zNC# S@X9RsW!ihfHceVWAMLXKJ^*v5KRu~!nVamtNQH$d)-:K' );
define( 'SECURE_AUTH_KEY',   '#BnQkAt,^?%I17r3#pSOnj{3FRD0XU*6_!O|nn2q Ij3bw>tW`bbL7f.y>}l,X.t' );
define( 'LOGGED_IN_KEY',     'o=fRGZV{J_d8+ySDBE46{:;&z28`;5nYy-R~0)nN/fQ8L(_bj*__iV~sLz%c{T2=' );
define( 'NONCE_KEY',         'ZB{9LI2a*m7IIQpG.E;I((j]}b1Vm|HF;$euQZ>S}Nx1ZxdlyQMFQ;MujY*G7SW3' );
define( 'AUTH_SALT',         '>`9VJTj?BC5Xc>TkMe_>>aCd`-~zS5EjS_lOPyJI.S~N8X[M,;5kEb/6z0Ca/#d(' );
define( 'SECURE_AUTH_SALT',  'y=-DUoY DSH3mR3nxb!h{dy$vUz-[:.Jnj~Wms~yUN/p~}Kf{6=o`f[e4@g7Alqh' );
define( 'LOGGED_IN_SALT',    '$>Rd(Y4`&29+r2/0alPsl*71L;c*`KRQ;kXk2~LoBtafT8w>NsO FJsJ9ZUhMo2P' );
define( 'NONCE_SALT',        'mCtX0?Oa/8&MHrUgDp`VKWA/YK<:n3wJ>MQ6==q>uwH.Jk,YKW9dPI?jgUxRJV6E' );
define( 'WP_CACHE_KEY_SALT', '=aWhY:!DPN]0-#`Q@S?VeE~SNCq9k]VYV?)qGfpx[OY[arxHu+T1XTU0cWlwbV/,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
