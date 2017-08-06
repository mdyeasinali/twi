<?php

/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/29/2017
 * Time: 2:03 AM
 */
class Member extends Model
{

    function balance_transfer($user_id, $ruserid, $amount, $comment)
    {
        global $db, $config;
        $bl1 = $db->query("INSERT INTO `member_acc`(`user_id`, `pay_type`, `pay_by_to`, `job_id`, `amount_dr`, `amount_cr`, `created_on`,`status`,`pay_way`,`a_notes`) VALUES ($ruserid,6,$user_id,0,0,$amount,now(),0,0,'$comment')");
        $bl2 = $db->query("INSERT INTO `member_acc`(`user_id`, `pay_type`, `pay_by_to`, `job_id`, `amount_dr`, `amount_cr`, `created_on`,`status`,`pay_way`,`a_notes`) VALUES ($user_id,6,$ruserid,0,$amount,0,now(),0,0,'$comment')");

        if ($bl1 && $bl2) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function bal_tran_hestory(){
        global $db, $config;
        $tranHis = $db->get_results("SELECT * FROM member_acc WHERE user_id='" . $config['logged']->id . "'");
        return $tranHis;

    }

    function member_balance_withdrawals($params)
    {
        global $db, $config;

        $member_withd_charge = c_con('id', '7', 'account_setting');

        if ($member_withd_charge['affect'] == 'Percent') {
            $withdrawal_commission = $params['amount'] * $member_withd_charge['charge'] / 100;
            $withdrawal_amount = ($params['amount'] - $withdrawal_commission);
        } else {
            $withdrawal_commission = $member_withd_charge['charge'];
            $withdrawal_amount = ($params['amount'] - $withdrawal_commission);
        }

        $getuser = c_con('username', $params['username'], 'users');

        $data['pay_by_to'] = 0;
        $data['user_id'] = $getuser['id'];
        $data['pay_type'] = 7;
        $data['amount_cr'] = $params['amount'];
        $data['created_on'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $data['pay_way'] = 0;
        $data['g_email'] = $params['g_email'];
        $data['a_notes'] = $params['message'];

        $data1['pay_by_to'] = $getuser['id'];
        $data1['pay_type'] = 7;
        $data1['amount_dr'] = $withdrawal_commission;
        $data1['amount_cr'] = $withdrawal_amount;
        $data1['created_on'] = date('Y-m-d H:i:s');
        $data1['status'] = 1;
        $data1['pay_way'] = 0;
        $data1['g_email'] = $params['g_email'];
        $data1['a_notes'] = $params['message'];

        try {
            $db->insert_update('member_acc', $data);
            $data1['job_id'] = $db->insert_id;
            $db->insert_update('admin_acc', $data1);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function bal_with_hestory(){
        global $db, $config;
        $earn = $db->get_results("SELECT * FROM member_acc WHERE user_id='" . $config['logged']->id . "'");
         return $earn;
    }
    function member_request(){
        global $db, $config;
        $memberinfo = $db->get_results("SELECT * FROM users WHERE ref_id='" . $config['logged']->id . "' AND active='0'");
        return $memberinfo;
    }

//1st G - $1
//2nd G - $.50
//3rd G - $.25
//4thG - $.20
//5thG - $.15
//6thG - $.15
//total 15% ($2.25)
    function member_approve(){
        global $db, $config;
        $memberinfo = $db->query("SELECT * FROM users WHERE ref_id='" . $config['logged']->id . "' AND id='" . $_GET['status']. "'");
        if($memberinfo) {


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

    function createTree($uid)
    {
        global $db, $config;
        $ret = [];
        $thecm = $db->get_results("SELECT id, username, ref_id FROM users WHERE ref_id='" . $uid . "' AND status=1", ARRAY_A);
        $sl = 1;
        foreach ($thecm as $cm) {
            $ret[] = [
                'sl' => $sl,
                'id' => $cm['id'],
                'username' => $cm['username'],
                'ref_id' => $cm['ref_id'],
                'children' => $this->createTree($cm['id'])
            ];
            $sl++;
        }
        return $ret;
    }

    function hasCh($root)
    {
        global $db, $config;
        $thecm = $db->get_results("SELECT id, username, ref_id FROM users WHERE ref_id='" . $root . "' AND status=1", ARRAY_A);
        if ($db->rows_affected > 0) {
            return $thecm['id'];
        } else {
            return false;
        }
    }


}