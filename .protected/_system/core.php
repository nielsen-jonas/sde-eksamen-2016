<?php

//Abstract away website location for portability
$directory = rtrim($_SERVER['PHP_SELF'], '/index.php');
$request = $_SERVER['REQUEST_URI'];
$protocol = explode('/', $_SERVER['SERVER_PROTOCOL']);
$protocol = strtolower($protocol[0]);
define('WEBSITE_DIRECTORY', $directory);
define('WEBSITE_REQUEST', $request);
define('WEBSITE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . WEBSITE_DIRECTORY);

// Routes
require_once(DIR . 'route.php');

// Script functions
require_once('scrf/scr_is.php');
require_once('scrf/scr_url.php');

// Preliminary
require_once(DIR . 'init.php');

// Handle website request
require_once('gogogadget.php');