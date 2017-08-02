<?php

/**
 * Created by PhpStorm.
 * User: Yeasin
 * Date: 8/2/2017
 * Time: 3:02 AM
 */
class Alljob extends Model
{

    public function jobs($userid)
    {
        global $db, $config;
        $term = $db->get_row("SELECT * FROM member_cat WHERE cat_id ='" . $config['logged']->m_cat . "'");

        if ($term) {
            $qq = $db->get_results("SELECT  job_entry.*,job_cat.cat_name,job_cat.cat_price FROM job_entry,job_cat WHERE job_entry.cat_id =  job_cat.id AND job_entry.cat_id ='" . $term->cat_id . "' LIMIT $term->cat_term");
            return $qq;
        } else {
            echo "Error";
        }

    }


    public function jobshestory($userid)
    {
        global $db, $config;
        $earn = $db->get_results("SELECT * FROM member_jobs WHERE member_id='10004'");
        return $earn;
    }

    public function job_ares($data)
    {
        global $db, $config;
        $job = $db->get_row("SELECT * FROM job_entry WHERE id='$data'");
        $qurey = $db->get_row("SELECT * FROM job_cat WHERE id='" . $job->cat_id . "'");
        $job->cat = $qurey;
        return $job;
    }


}

?>