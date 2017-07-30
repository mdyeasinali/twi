<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/30/2017
 * Time: 12:45 AM
 */

function c_con($ccid, $ccvalue, $table){
    global $db, $config;
    return $db->get_row("SELECT * FROM $table WHERE $ccid='".$ccvalue."'", ARRAY_A);
}

//function doTree($uid){
//    global $db, $config;
//    $ret = [];
//    $thecm = $db->get_results("SELECT id, username, ref_id FROM users WHERE ref_id='".$uid."' AND status=1", ARRAY_A);
//
//    foreach ($thecm as $cm){
//        $ret[] = [
//            'id' => $cm['id'],
//            'username' => $cm['username'],
//            'ref_id' => $cm['ref_id'],
//            'childs' => doTree($cm['id'])
//        ];
//    }
//    return $ret;
//}
