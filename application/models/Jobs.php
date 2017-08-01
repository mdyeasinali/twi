<?php

/**
 * Created by PhpStorm.
 * User: Yeasin
 * Date: 8/2/2017
 * Time: 3:02 AM
 */
class Jobs extends Model
{

    public function jobs($member_id)
    {
        global $db, $config;
        $cat = "";
        $time = date("Y/m/d");

        if ($cat == "Primary") {
            $step = 2;
            $query = $db->query("select * from job WHERE job_id NOT IN (SELECT job_id FROM member_jobs WHERE member_id='$member_id') LIMIT $step");
        } else if ($cat == "Standard") {
            $step = 3;
            $query = $db->query("select * from job WHERE job_id NOT IN (SELECT job_id FROM member_jobs WHERE member_id='$member_id') AND(catagory='Youtube' or catagory='Facebook') LIMIT $step");
        } else if ($cat == "Advanced") {
            $step = 4;
            $query = $db->query("select * from job WHERE job_id NOT IN (SELECT job_id FROM member_jobs WHERE member_id='$member_id') LIMIT $step");
        }


        if ($query) {
            $qq = $db->query("SELECT * FROM member_jobs WHERE member_id='$member_id' AND job_date='$time'");
            $count = $qq->num_rows;
            if ($count < $step) {
                foreach ($query as $take) {
                    ?>
                    <tr>
                        <td><?php echo $take['catagory']; ?></td>
                        <td><?php echo $take['question']; ?></td>
                        <td><?php echo $take['payment']; ?></td>
                        <td><a href="job_area.php?job_id=<?php echo $take['job_id'] ?>&member_id= <?php $member_id ?>"
                               ;?>"><input
                                        type="button" class="btn btn-rounded btn-inline" value="Do This Job"/></a></td>
                    </tr>

                    <?php
                }
            }
        }
    }


}

?>