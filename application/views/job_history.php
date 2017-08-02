<?php include('header.php'); ?>
    <!--End pre page loader-->

    <main>
        <!--Page body content-->
        <div class="me-page-body">
            <div class="row">
                <h2 class="col s12 header">New Jobs</h2>
                <div class="col s12 m-t-10">
                    <table id="example1" class="bordered">
                        <thead>
                        <tr>
                            <th>Sl#</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $i = 1;
                        foreach ($jobhes as $key) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $key->job_date; ?></td>
                                <td><?php echo $key->amount; ?></td>
                            </tr>

                            <?php $i++;
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
<?php include('footer.php'); ?>