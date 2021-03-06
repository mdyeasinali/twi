<?php
error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

$config = [];

$config['base_url'] = 'http://www.twilocal.dev/'; // Base URL including trailing slash (e.g. http://localhost/)

$config['default_controller'] = 'authenticate'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['db_name'] = 'twitouchnew'; // Database name
$config['db_username'] = 'root'; // Database username
$config['db_password'] = ''; // Database password
$db = new ezSQL_mysqli($config['db_username'],$config['db_password'],$config['db_name'],$config['db_host']);

if(isset($_SESSION['user'])){
    $cur_user = $db->get_row("SELECT * FROM users WHERE id='" . $_SESSION['user'] . "'");
    unset($cur_user->password);
    $config['logged'] = $cur_user;
    $cur_user->total =  $db->get_var("SELECT SUM(amount_cr) AS total_credit FROM member_acc WHERE user_id='" .$cur_user->id."'");
}
$config['account_settings'] = $db->get_results("SELECT * FROM account_setting");
