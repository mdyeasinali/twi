<?php
/*
 * PIP v0.5.3
 */

//Start the Session
session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');

// Includes
require(ROOT_DIR .'system/ez_sql_core.php');
require(ROOT_DIR .'system/ez_sql_mysqli.php');
require(ROOT_DIR .'system/functions.php');
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/ess.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/pip.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);

pip();

?>
