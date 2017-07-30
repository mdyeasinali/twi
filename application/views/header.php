<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/22/2017
 * Time: 2:14 AM
 */
global $config;
?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/jquery-treetable.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/theme.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<header>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Navbar-->
    <div class="navbar-fixed">

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Settings</a></li>
            <li><a href="#!">Profile</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

        <nav id="me-navbar">
            <div class="nav-wrapper">
                <a id="logo-container" href="#" class="brand-logo">Twitouch</a>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="right hide-on-med-and-down">
                    <li><a class="" href="javascript:">Acc : $87465</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo ($config['logged']) ? $config['logged']->username : ''?> <i class="material-icons right">account_circle</i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!--End navbar-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</header>

<aside id="left-sidebar-nav">
    <div id="slide-out" class="side-nav fixed">
        <ul class="leftside-navigation">
            <li><a href="/admin" class="waves-effect waves-default"><i class="material-icons left-icon">dashboard</i>Member Dashboard</a></li>
            <li>
                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left-icon">group</i><i class="material-icons right-icon right">arrow_drop_down</i>Member</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect waves-default">New Member</a></li>
                        <li><a href="/admin/member_tree" class="waves-effect waves-default">Member Tree</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left-icon">attach_money</i><i class="material-icons right-icon right">arrow_drop_down</i>Transactions</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="/admin/transfer" class="waves-effect waves-default">Transfer</a></li>
                        <li><a href="/admin/withdraw" class="waves-effect waves-default">Withdraw</a></li>
                        <li><a href="/admin/member_report" class="waves-effect waves-default">Ref Earn History</a></li>
                        <li><a href="#" class="waves-effect waves-default">Transfer History</a></li>
                        <li><a href="#" class="waves-effect waves-default">Withdraw History</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left-icon">work</i><i class="material-icons right-icon right">arrow_drop_down</i>Jobs</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect waves-default">New Jobs</a></li>
                        <li><a href="#" class="waves-effect waves-default">Job Earn History</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left-icon">account_circle</i><i class="material-icons right-icon right">arrow_drop_down</i>Account</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect waves-default">Account Inactive</a></li>
                        <li><a href="#" class="waves-effect waves-default">View Profile</a></li>
                        <li><a href="#" class="waves-effect waves-default">Change password</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>

