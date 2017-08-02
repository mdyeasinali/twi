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
                            <th>Job Category</th>
                            <th>Description</th>
                            <th>Payment</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if ($jobinfo) {
                            foreach ($jobinfo as $key) { ?>
                                <tr>
                                    <td><?php echo $key->cat_name; ?></td>
                                    <td><?php echo $key->question; ?></td>
                                    <td><?php echo $key->cat_price; ?></td>
                                    <td><a href="job_area/<?php echo $key->id; ?>" style="  background: cornflowerblue;   height: 30px; line-height: 30px; padding: 0 .5rem; text-transform: uppercase;
    vertical-align: middle" class="waves-effect waves-light btn ">Do This Job</a></td>
                                </tr>
                            <?php }
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
<?php include('footer.php'); ?>