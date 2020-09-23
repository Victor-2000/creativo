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
define( 'DB_NAME', 'creativo' );

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
define( 'AUTH_KEY',         'pW*GmD,rJQwahB3&;ug1RA,z$@ME-c>-7Ic:BQtbTRCT4s]~@hFQIS7]eulX-+]I' );
define( 'SECURE_AUTH_KEY',  '</*}CA&<k|6@DGgyt@y%a~c25+>u)*g%_mdp5`j4AP8wlVvP2!}rt;pr&`t4c97>' );
define( 'LOGGED_IN_KEY',    'gAt9!caW`y^w@sjwI&VeXV*LKcTqL^-MYq/bV3]2G7&ELB{DTXom8X<1)p`@x;dJ' );
define( 'NONCE_KEY',        '^!cL:x,(GH=c!VDmbzxJ )7`g-bBjoXl^YUo/HgiX<?J#7zxE#P!KO?F?B#S<F%s' );
define( 'AUTH_SALT',        'P]p*V0ous}F*#sop6sC29W :]:7PysVnF19*k*|2R}F0rkw*wKKQ;/Ny.BS} +Hg' );
define( 'SECURE_AUTH_SALT', '2sml1,?z XKhd pnKhw$`tD@VfKcIttAa@rffLW3u;~SR4L735;uNoR:y^d9&`ye' );
define( 'LOGGED_IN_SALT',   ']_$;A}Olo^[tzS[z6G5+FsnPj9I3~*(eOL+%R|I4|1},%ta|AAa3L05>mEUaW,Ra' );
define( 'NONCE_SALT',       'YNz@#3^HUTsZ|%*-oqh{t+^;5B=uPJu%)v5Qdm42P_q6BM$8 5H7K$igI1@O-(Ds' );

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
