<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:32 AM
 */
include 'header.php';
?>

    <!--Page Body-->
    <main>

        <div class="me-page-title">
            <!--Page Title-->
            <h1>Member Information Desk</h1>
        </div>
        <div class="me-page-body">
            <div class="row">
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content">
                            <div class="row">
                                <div class="row">
                                    <div class="col s6">
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Member ID</h5>
                                            <label><h6><?php echo $config["logged"]->id; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Member Name</h5>
                                            <label><h6><?php echo $config["logged"]->username; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Member Username</h5>
                                            <label><h6><?php echo $config["logged"]->username; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Member Email</h5>
                                            <label><h6><?php echo $config["logged"]->email; ?></h6></label>
                                        </div>
                                        <div class="col s3">
                                            <a  href="/admin/update_profile">
                                                <button class="btn waves-effect waves-light right default" type="submit"
                                                        name="action">Update <i class="material-icons right">send</i>
                                                </button>

                                            </a>
                                        </div>

                                    </div>
                                    <div class=" col s6">
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Mobile Number</h5>
                                            <label><h6><?php echo $config["logged"]->phone; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Reference ID</h5>
                                            <label><h6><?php echo $config["logged"]->ref_id; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Approve Date</h5>
                                            <label><h6><?php echo $config["logged"]->activated_on; ?></h6></label>
                                        </div>
                                        <div style="margin: 20px 0 ">
                                            <h5 style="font-size: 1.20rem;">Joining Date</h5>
                                            <label><h6><?php echo $config["logged"]->created_on; ?></h6></label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        </div>

    </main>
    <!--End page body-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

<?php
include 'footer.php';
?>