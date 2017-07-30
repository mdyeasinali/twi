<?php

/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:54 AM
 */
class Auth extends Model {

    public function login($username, $password) {
        global $db, $config;
        $pass = md5(sha1($password));
        $validUser = $db->get_row("SELECT id,username,password FROM users WHERE username='". $_POST['user'] ."' AND password='". $pass ."'");
        if(!$validUser){
            return false;
        }
        else {
            $_SESSION['user'] = $validUser->id;
            return true;
        }
    }
}