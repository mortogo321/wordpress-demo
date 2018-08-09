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
define('DB_NAME', 'dev_wordpress');

/** MySQL database username */
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', 'Dev@Localhost');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'B!h{~78|Cr03:G#7UzQ~R4R?|%y]%$]y-19N!G|6!nAkFHxpS+P<ak2tI9SHk6B`');
define('SECURE_AUTH_KEY',  '&:N2B~Q&?+[lQejuwrC5FA2bT#G*O^g;o?DwjK2s*r<@fFvvnfh=1/,?jYGhwaLQ');
define('LOGGED_IN_KEY',    'eKSbVp1jf~2s(>8=Kf$L<2LECA}&c0{g7NA.o=ec2jKQW;z,/1)9H[oG>30ub&{5');
define('NONCE_KEY',        'qhzN3Z9Y|yf|7CW3mOPbCB<jthP0aM+A4%<[1e udY3AS~*Q}C<V,>zEYL>*COJG');
define('AUTH_SALT',        '$wx!]|!vSg9[TfKjhz~NG7K9=)p]u8Uy24L)u3XCAzD$EeR9K&b-y$5Aomr+M8r}');
define('SECURE_AUTH_SALT', '`rMTaSi8vWjoX784fL<<Y-M!*V4pU>yr!Q%1![<KQ7_:(weDaYPYCbDjhP35!0@^');
define('LOGGED_IN_SALT',   'ca<f/?a;KD{POw,AxV3=8&qzt0udMJig`eVO.${j8wzJ[sW#MCc>>*p,Rzr+*W1%');
define('NONCE_SALT',       'A1D2l):T#wyCw4HY`{E:Q_ 8P61g@mobIOuuMR.Wc~@m!^0a7^:dG_%;LxO:ADm+');

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
