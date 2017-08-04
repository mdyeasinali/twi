<?php include('header.php'); ?>
    <!--End pre page loader-->

    <main>
        <div class="me-page-title">
            <!--Page Title-->
            <h1>Jobs Information</h1>
        </div>

        <!--Page body content-->
        <div class="me-page-body">
            <div class="row">
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
                                <td><?php echo $key->created_on; ?></td>
                                <td><?php echo $key->amount_cr; ?></td>
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