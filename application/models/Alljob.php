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
        $earn = $db->get_results("SELECT * FROM member_acc WHERE user_id='$userid'");
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

    public function job_question($data, $question, $answer)
    {
        global $db, $config;
        $answerinfo = $db->get_row("SELECT * FROM job_entry WHERE id='$data'");
        if ($question == $answerinfo->question) {
            if ($answer == $answerinfo->answer) {
                $date = date("Y/m/d");
                $query = $db->query("INSERT INTO member_acc(user_id,job_id,amount_cr,created_on)VALUES('" . $config['logged']->id . "','$answerinfo->id','$answerinfo->payment',$date)");

            }
        }


    }

    public function job_click($data)
    {
        global $db, $config;
        $date = date("Y-m-d H:i:s");
        $job = $db->get_row("SELECT * FROM job_entry WHERE id='$data'");
        $jobcat = $db->get_row("SELECT * FROM job_cat WHERE id ='" . $job->cat_id . "'");
        $data1['user_id'] = $config['logged']->id;
        $data1['amount_cr'] = $jobcat->cat_price;
        $data1['job_id'] = $job->id;
        $data1['g_email'] = $config["logged"]->email;
        $data1['pay_type'] = "2";
        $data1['pay_by_to'] = $config["logged"]->ref_id;
        $data1['a_notes'] = "job eran";
        $data1['created_on'] = $date;

//     1st G- 4%
//    2nd G - 3%
//    3rd G - 1%
//    4th G - 1%
//    5th G -.50%
//    6th G -.50 %
        try {
            $db->insert_update('member_acc', $data1);
            $ref1 = $db->get_row("SELECT * FROM users WHERE id='" . $config['logged']->ref_id . "'");
            if ($ref1) {
                $this->addreferan($ref1, $job->id, $jobcat->cat_price, 4);
            }
            $ref2 = $db->get_row("SELECT * FROM users WHERE id='$ref1->ref_id'");
            if ($ref2) {
                $this->addreferan($ref2, $job->id, $jobcat->cat_price, 3);
            }
            $ref3 = $db->get_row("SELECT * FROM users WHERE id='$ref2->ref_id'");
            if ($ref3) {
                $this->addreferan($ref3, $job->id, $jobcat->cat_price, 1);
            }
            $ref4 = $db->get_row("SELECT * FROM users WHERE id='$ref3->ref_id'");
            if ($ref4) {
                $this->addreferan($ref4, $job->id, $jobcat->cat_price, 1);
            }
            $ref5 = $db->get_row("SELECT * FROM users WHERE id='$ref4->ref_id'");
            if ($ref5) {
                $this->addreferan($ref5, $job->id, $jobcat->cat_price, 0.5);
            }
            $ref6 = $db->get_row("SELECT * FROM users WHERE id='$ref5->ref_id'");
            if ($ref6) {
                $this->addreferan($ref6, $job->id, $jobcat->cat_price, 0.5);
            }
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function addreferan($ref, $job_id, $amount, $parcent)
    {
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

?>