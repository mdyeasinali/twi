<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/22/2017
 * Time: 3:12 AM
 */
include 'config.php';
$_SESSION["user"] = '';
$_SESSION["login"] = false;
header("Location: /ui");