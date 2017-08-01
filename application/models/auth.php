<?php

/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:54 AM
 */
class Auth extends Model {

    public function login($username, $password)
    {
        global $db, $config;
        $pass = md5(sha1($password));
        $validUser = $db->get_row("SELECT id,username,password FROM users WHERE username='" . $_POST['user'] . "' AND password='" . $pass . "'");
        if (!$validUser) {
            return false;
        } else {
            $_SESSION['user'] = $validUser->id;
            return true;
        }
    }

    public function registion($username, $password, $cpssword, $email, $phn, $ref)
    {
        global $db, $config;
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($password == $cpssword) {
            $pw = md5(sha1($password));
            $row = $db->get_row("SELECT * FROM users WHERE username = '$username'");
            if ($row > 0) {
                return 0;
            } else {
                $q = $db->query("INSERT INTO users(ip_address,username,password,phone,email,created_on,ref_id)VALUES('$ip','$username','$pw','$phn','$email',NOW(),'$ref')");
                if ($q) {
                    return 1;
                } else {
                    return 0;
                }
            }
        } else {
            return 0;
        }

    }
}