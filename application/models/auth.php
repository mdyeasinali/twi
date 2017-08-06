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
                $refbal = $db->get_var("SELECT SUM(amount_cr) AS refbalance FROM member_acc WHERE user_id='" . $ref . "'");
                $ref1 = $db->get_row("SELECT * FROM users WHERE id='" . $config['logged']->ref_id . "'");
                if ($refbal > $config['account_settings'][0]->charge){

                    $q = $db->query("INSERT INTO users(ip_address,username,password,phone,email,created_on,ref_id)VALUES('$ip','$username','$pw','$phn','$email',NOW(),'$ref')");

                    if ($this->getFromref($ref1, $db->insert_id, $config['account_settings'][0]->charge)){
                        if ($q) {
                            return 1;
                        } else {
                            return 2;
                        }
                    }
                    else {
                        return 3;
                    }
                }
                else {
                    return 4;
                }

            }
        } else {
            return 0;
        }

    }

    public function getFromref($ref, $toid, $amount) {
        global $db, $config;
        $date = date("Y-m-d H:i:s");
        $data2['user_id'] = $toid;
        $data2['amount_dr'] = $amount;
        $data2['job_id'] = 0;
        $data2['g_email'] = $ref->email;
        $data2['pay_type'] = "2";
        $data2['pay_by_to'] = $ref->id;
        $data2['a_notes'] = "ref eran";
        $data2['created_on'] = $date;
        try {
            $db->insert_update('member_acc', $data2);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function addreferan($ref, $job_id, $amount, $parcent) {
        global $db, $config;
        $amount1 = $amount / 100 * $parcent;
        $date = date("Y-m-d H:i:s");
        $data2['user_id'] = $ref->id;
        $data2['amount_cr'] = $amount1;
        $data2['job_id'] = $job_id;
        $data2['g_email'] = $ref->email;
        $data2['pay_type'] = "2";
        $data2['pay_by_to'] = $config["logged"]->id;
        $data2['a_notes'] = "ref eran";
        $data2['isRef'] = 1;
        $data2['created_on'] = $date;
        try {
            $db->insert_update('member_acc', $data2);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}