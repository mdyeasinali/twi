<?php

/**
 * Created by PhpStorm.
 * User: Yeasin
 * Date: 8/3/2017
 * Time: 7:23 PM
 */
class DasborardAmount extends Model
{
    public function toDayrefEarn()
    {
        global $db, $config;
        $today = date("Y/m/d");
        echo $today;
        $total = $db->get_var("SELECT SUM(created_by) AS total_credit FROM member_ref_earn WHERE member_id='" . $config["logged"]->id . "' AND created_on='$today'");
        return $total;

    }

    public function toDayjobEran()
    {
        global $db, $config;
        $today = date("Y/m/d");
        echo $today;
        $total = $db->get_var("SELECT SUM(created_by) AS total_credit FROM member_ref_earn WHERE member_id='" . $config["logged"]->id . "' AND created_on='$today'");
        return $total;

    }

    public function toDayWithdrawal()
    {
        global $db, $config;
        $today = date("Y/m/d");
        $total = $db->get_var("SELECT SUM(amount_dr) AS total_credit FROM member_acc WHERE 	user_id='" . $config["logged"]->id . "' AND created_on ='$today'");
        return $total;

    }

}