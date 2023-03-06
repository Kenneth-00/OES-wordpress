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
define( 'DB_NAME', 'WEB_3323_OES' );

/** MySQL database username */
define( 'DB_USER', 'admin_oes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin_oes_pass1' );

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
define( 'AUTH_KEY',         'bFJS>F+)2=E.B,JY`G;-OBxSFP8z<8%CP(j<!<[in+E>B19Xyzi)SbO4KNMSYZ6z' );
define( 'SECURE_AUTH_KEY',  '/ln3Fy#ic)@*<4~zvp!ks6/h ;UsuCMgX<W6+s0^#LG7B bOnAaO*_;vq1@p$qWq' );
define( 'LOGGED_IN_KEY',    'Rc!ByqzZSo8!Fjk;@R&E1Ijf[%lgoJYt!Q1$;g.}>),*0<t!j+/|a,Ij~=+gFQn<' );
define( 'NONCE_KEY',        'j$p_E8[,`.YmviuP8i(-{xZ{cOby8s ^dMM[CxL8Vr#E <AFq$%/{=@-uL6FI4k9' );
define( 'AUTH_SALT',        'Cm6M%@r35M|4W#rl1K:|*Q9F5uiaB&vxf}[J?j&5E>s(A4vV?3vn=Z[+bo,L}aAq' );
define( 'SECURE_AUTH_SALT', 'm|1Geo|e~G?T{:)ywHP)c-2as!CG/J^tdSqd;y>82k&>Q:#kMYq fn@D}g_dL?+G' );
define( 'LOGGED_IN_SALT',   '`SVDrEq~GP}I7[<Y?SCaq>a0wN]14b /N4$-s^.5(7%MfxmY08HGq^B*}t|o+pKZ' );
define( 'NONCE_SALT',       'Vyg5d@|Eqy;{+/cOw)g`5y9g18s|%>RXE9<=Z4`_K:39g6Y,[u^Uz{D#gHm9c#2G' );

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
