<?php

/**
 * Created by PhpStorm.
 * User: Yeasin
 * Date: 7/31/2017
 * Time: 2:42 AM
 */
class Account extends Model
{

    public function getUserinfo($uid, $opw, $cpw, $npw)
    {
        global $db;
        if ($opw == $cpw) {
            $o_pw = md5(sha1($opw));
            $n_pw = md5(sha1($npw));
            $result = $db->get_row("SELECT * FROM users WHERE id='" . $uid . "' AND status=1");
            $cntpass = $result->password;
            if ($o_pw == $cntpass) {
                $query = $db->query("UPDATE users SET `password`='$n_pw' WHERE id='" . $uid . "' AND status=1");
                if ($query) {
                    return TRUE;
                } else {
                    return FALSE;
                }

            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }

    }

    public function profileUpdate($uid, $mun, $mem, $mphn)
    {
        global $db;
        $result = $db->query("SELECT * FROM users WHERE id='" . $uid . "' AND status=1");
        if ($result) {
            $query2 = $db->query("UPDATE users SET `username`='$mun',`email`='$mem',`phone`='$mphn' WHERE id='" . $uid . "' AND status=1");
            if ($query2) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }

    }

    public function account_inactive($uid, $username, $password)
    {
        global $db;
        $pass = md5(sha1($password));
        $chick = $db->get_row("SELECT * FROM users WHERE username='" . $username . "' AND password='" . $pass . "'");

        if ($chick) {
            return 1;
        } else {
            return 0;

        }

    }


}