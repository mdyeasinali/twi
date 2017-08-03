<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:32 AM
 */
include 'header.php';
?>
    <main>
        <!--Page body content-->
        <div class="me-page-body">
            <div class="row">
                <h2 class="col s12 header">Withdraw History</h2>
                <div class="col s12 m-t-10">
                    <table id="example1" class="bordered">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                                <th>Amount</th>
                                <th>Message</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($withHis) {
                            foreach ($withHis as $key1) {
                                if ($key1->amount_dr > 0) { ?>
                                    <tr>
                                        <td><?php echo $key1->user_id; ?></td>
                                        <td><?php echo $key1->created_on; ?></td>
                                    <?php if($key1->pay_way == 1){ ?>
                                        <td>admin</td>
                                        <?php }else if($key1->pay_way == 2){?>
                                        <td>payneer</td>
                                    <?php }else if($key1->pay_way == 3){?>
                                        <td>Skrill</td>
                                    <?php }else{?>
                                        <td>Perfect Money</td>
                                        <?php } ?>


                                        <td><?php echo $key1->amount_dr; ?></td>
                                        <td><?php echo $key1->a_notes; ?></td>
                                        <?php if($key1->status == 1){ ?>
                                            <td>approved</td>
                                        <?php }else{ ?>
                                            <td>pending</td>
                                        <?php } ?>
                                    </tr>
                                <?php }
                            }
                        } else {
                            echo "No Jobs Found";
                        } ?>

                        </tbody>


                    </table>
                </div>
            </div>

        </div>
        <!--End page body content-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </main>
    <!--End page body-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
<?php include ('footer.php');?>