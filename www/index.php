<?php

//Start the Session
session_start();

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');
define('STATIC_DIR', ROOT_DIR .'static/');

// Includes
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/pip.php');

// Define base URL
global $config;

define('BASE_URL', $config['base_url']);
define('DEBUG', $config['debug']);

pip();

?>
