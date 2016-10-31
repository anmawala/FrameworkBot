<?php

// Expect Boz-PHP loaded
defined('BOZ_PHP') || die("Uh?");

// Expect a working database connection from Boz-PHP
expect('db');

define('INCLUDES', 'includes');

// On demand requests classes
spl_autoload_register( function($c) {
	$path = ABSPATH . _ . INCLUDES . _ . "class-$c.php";
	if( is_file( $path ) ) {
		require $path;
        }
} );

// General functions
require ABSPATH . _ . INCLUDES . _ . 'request_handler.php';
