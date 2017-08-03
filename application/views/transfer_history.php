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
                <h2 class="col s12 header">Transfer History</h2>
                <div class="col s12 m-t-10">
                    <table id="example1" class="bordered">
                        <thead>
                        <tr>
                            <th>Member ID</th>
                            <th>Reciever ID</th>
                            <th>Amount</th>
                            <th>Transfer Date</th>
                            <th>Message</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if ($tranHis) {
                            foreach ($tranHis as $key2) {
                                if ($key2->pay_by_to) { ?>

                                    <tr>
                                        <td><?php echo $key2->user_id ?></td>
                                        <td><?php echo $key2->pay_by_to ?></td>
                                        <td><?php echo $key2->amount_dr ?></td>
                                        <td><?php echo $key2->created_on ?></td>
                                        <td><?php echo $key2->a_notes ?></td>
                                    </tr>
                                <?php }
                            }
                        }else {
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
<?php include('footer.php'); ?>