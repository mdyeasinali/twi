<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 12:09 AM
 */

include '../config.php';

function transferBalance($user_id,$receiverid,$amount,$comment){
    global $db;
    $ret = [];
    $tran1 = $db->query("INSERT INTO `member_acc`(`id`, `user_id`, `pay_type`, `pay_by_to`, `job_id`, `amount_dr`, `amount_cr`, `created_on`,`status`,`pay_way`,`a_notes`) VALUES ('',$receiverid,6,$user_id,'',$amount,'',now(),'','','$comment')");
    $tran2 = $db->query("INSERT INTO `member_acc`(`id`, `user_id`, `pay_type`, `pay_by_to`, `job_id`, `amount_dr`, `amount_cr`, `created_on`,`status`,`pay_way`,`a_notes`) VALUES ('',$user_id,6,$receiverid,'','',$amount,now(),'','','$comment')");
    if ($tran1 && $tran2){
        $ret['status'] = 'success';
        $ret['msg'] = 'Transfer Complete';
    }
    else {
        $ret['status'] = 'error';
        $ret['msg'] = 'Cannot transfer now';
    }
}