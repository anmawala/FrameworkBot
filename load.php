<?php
/*
 * Require this file to start the framework.
 */

// Database info. You know them!
$username = 'insert-here-user';
$password = 'insert-here-password';
$database = 'insert-here-database-name';
$location = 'localhost';

// Database table prefix, if any.
// E.g. 'asd_'
// Anyway in this example you don't need tables
$prefix = '';

// Specify the folder of your site after the domain name.
// NO TRAILING SLASH
// E.g. '/blog/01'
define('ROOT', '');

// It enables extra verbose framework errors like wrong database password
define('DEBUG', true);

// In the example I don't use this
define('REQUIRE_LOAD_POST', true);

// The boz-php-another-php-framework path
define('BOZ_FRAMEWORK', 'boz-php-another-php-framework');

define('ABSPATH', __DIR__);

// Where is the framework load.php?
require ABSPATH . _ . BOZ_FRAMEWORK . _ . 'load.php';
