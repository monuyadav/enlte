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
define('DB_NAME', 'enlte_blog');

/** MySQL database username */
define('DB_USER', 'phpmyadmin');

/** MySQL database password */
define('DB_PASSWORD', 'Welcome12#');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kDC<,kx#y)%2:1yu};8CYS9;H*I(G9k$Ael?4f:%r<Pa]Bd5gM;je!4c~!gB8yDX');
define('SECURE_AUTH_KEY',  'd?yJ yaWw=?R-?],[%D:mXB:ekbttK O#Cs6x0s6=Hk^=w,SM,f/feaYy57yf?kI');
define('LOGGED_IN_KEY',    'G&l)bT/h=87Fjz*zyJ6P4wGhzr#z$&:Q@BB*YShZ=S,v Ud4A,WNJX)KWmOyA_t.');
define('NONCE_KEY',        '%7gGs!xl&NwA)o~tes>t ]lsRM&:M4RIJ>5ilZ_^tc{+X%^`JY+;u{X7vFN7bUk{');
define('AUTH_SALT',        'R$9PPF|zW|k/1_V73DZ=E8,gkM3r_U;@Q}p.cF2$LHh(5KMlGS|BTk>pGLcxfY][');
define('SECURE_AUTH_SALT', 'J)<^(u=oe+{94$@]0+,3qQw<o6bnI$c_@:e3yTdPl,Nh`%M=IM/scWBnA.1Z~g+U');
define('LOGGED_IN_SALT',   'H_^~NNQwYn,L i2H.+$`<1iibq88uJrJ5r&azlbVNR#< SU8$59kWI1%Ax5N]Ds?');
define('NONCE_SALT',       ']*~;[gRdnvWFd;W7YC`T<@zs0Z}BAu):43/Sbo3HczU~{2/DwvF+9J_]bSeXNz(w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
