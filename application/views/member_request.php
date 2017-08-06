<?php include('header.php'); ?>
    <main>
        <!--Page body content-->
        <div class="me-page-body">
            <div class="row">
                <h2 class="col s12 header">Basic example</h2>
                <div class="col s12 m-t-10">
                    <table id="example1" class="bordered">
                        <thead>
                        <tr>
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Join Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if ($meminfo) {
                        foreach ($meminfo as $key2) { ?>
                        <tr>
                            <td><?php echo $key2->id ?></td>
                            <td><?php echo $key2->username ?></td>
                            <td><?php echo $key2->email ?></td>
                            <td><?php echo $key2->phone ?></td>
                            <td><?php echo $key2->created_on ?></td>
                            <td>
                                <a class='dropdown-button btn-block waves-effect waves-light m-t-10' href='#'
                                   data-activates='dropdown-large-raised'><i class="material-icons right">arrow_drop_down</i>Select
                                    Option</a>
                                <!-- Dropdown Structure -->
                                <ul id='dropdown-large-raised' class='dropdown-content'>
                                    <li><a href="/admin/member_request/?status=<?php echo $key2->id ?>">Approve</a></li>
                                    <li><a href="/admin/member_request/?status=0">Cancel</a></li>
                                </ul>
                            </td>
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