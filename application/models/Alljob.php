<?php

/**
 * Created by PhpStorm.
 * User: Yeasin
 * Date: 8/2/2017
 * Time: 3:02 AM
 */
class Alljob extends Model {

    public function jobs($userid)  {
        global $db, $config;
        $qq = $db->get_results("SELECT * FROM `job` ");
        return $qq;
    }


    public function jobshestory($userid) {
        global $db, $config;
        $earn = $db->get_results("SELECT * FROM member_jobs WHERE member_id='10004'");
        return $earn;
    }


}

?>