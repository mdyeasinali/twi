<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/22/2017
 * Time: 2:31 AM
 */
session_start();
$config = [];
global $config;
include 'includes/ez_sql_core.php';
include 'includes/ez_sql_mysqli.php';

$db = new ezSQL_mysqli('root','','twitouchnew','localhost');

global $db;