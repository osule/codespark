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
define('DB_NAME', 'YOUR_DATABASE_NAME');

/** MySQL database username */
define('DB_USER', 'YOUR_DATABASE_USER');

/** MySQL database password */
define('DB_PASSWORD', 'YOUR_DATABASE_USER');

/** MySQL hostname */
define('DB_HOST', 'YOUR_DATABASE_HOST');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'awvbw0lzo3pp019xpbgioygwf5uamb3xtsc1ezkuhgmgc8g4fadveo3zraadpbn9');
define('SECURE_AUTH_KEY', 'tntvhxmhy3skhwcu3ixn5yxpiafoskxwzr7cj2cip2irnvhq4g34m01rbuocpfvt');
define('LOGGED_IN_KEY', 'izde6w4kzkrlptuf09nhtijk8o5mgilwryqrfu7ittldlkxco73esorilfymq4md');
define('NONCE_KEY', '4vxvp2kznk5nd7zupcblm4gjle5fvotml6sggftfvt6mkykfs4p1adkkkgmuolbu');
define('AUTH_SALT', 'dum9jowjn1zu7urjv0hyfevzudwzgjdb1plmcnbzovqaqmp1tqrbd8sbgbhkq1ws');
define('SECURE_AUTH_SALT', 'dkig6txvbfuvqqppe74axso3tajqh4nzgg7bmrrrhktnpil7xer9f9gzoot9epn3');
define('LOGGED_IN_SALT', 'ml6lvtlri73unifevocg5pmdou7tvwhacvwpmaoagnca5jdcviwiiidsdk9kwtl3');
define('NONCE_SALT', 'gkzxc2ipzzooqtbhfltgrlnynvvv1jfx5cvrir6ylhpqumvxu5o34mkdzlmcu4jq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkx_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
