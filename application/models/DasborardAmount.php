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
        $date = new DateTime();
        $date->getTimestamp();
        $beginOfDay = strtotime("midnight", $date->getTimestamp());
        $endOfDay = strtotime("tomorrow", $beginOfDay) - 1;
        $referan = $db->get_var("SELECT SUM(created_by) AS total_credit FROM member_ref_earn WHERE member_id='" . $config["logged"]->id . "' AND created_on  BETWEEN '" . date('Y-m-d H:i:s', $beginOfDay) . "' AND '" . date('Y-m-d H:i:s', $endOfDay) . "'");
        return $referan;

    }

    public function toDayjobEran()
    {
        global $db, $config;
        $date = new DateTime();
        $date->getTimestamp();
        $beginOfDay = strtotime("midnight", $date->getTimestamp());
        $endOfDay = strtotime("tomorrow", $beginOfDay) - 1;
        $joberan = $db->get_var("SELECT SUM(amount_cr) AS total_credit FROM member_acc WHERE user_id='" . $config["logged"]->id . "' AND created_on  BETWEEN '" . date('Y-m-d H:i:s', $beginOfDay) . "' AND '" . date('Y-m-d H:i:s', $endOfDay) . "'");
        return $joberan;

    }

    public function toDayWithdrawal()
    {
        global $db, $config;
        $date = new DateTime();
        $date->getTimestamp();
        $beginOfDay = strtotime("midnight", $date->getTimestamp());
        $endOfDay = strtotime("tomorrow", $beginOfDay) - 1;
        $withdrawal = $db->get_var("SELECT SUM(amount_dr) AS total_credit FROM member_acc WHERE 	user_id='" . $config["logged"]->id . "' AND created_on  BETWEEN '" . date('Y-m-d H:i:s', $beginOfDay) . "' AND '" . date('Y-m-d H:i:s', $endOfDay) . "'");
        return $withdrawal;

    }

}