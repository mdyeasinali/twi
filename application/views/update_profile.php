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
            <h1>Member Information Desk <?php echo $datain;?></h1>
        </div>
        <div class="me-page-body">
            <div class="row">
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content">
                            <div class="row">
                                <div class="row">
                                    <form action="/admin/update_profile" method="post">
                                        <div class="col s6">
                                            <div style="margin: 20px 0 ">
                                                <h5 for="disabled" style="font-size: 1.20rem;">Member ID</h5>
                                                <input disabled value="<?php echo $config["logged"]->ref_id; ?>"
                                                       id="disabled" type="text" class="validate">
                                            </div>
                                            <div style="margin: 20px 0 ">
                                                <h5 style="font-size: 1.20rem;">Member Username</h5>
                                                <input id="name" name="mun" type="text"
                                                       value="<?php echo $config["logged"]->username; ?>">
                                            </div>
                                            <div style="margin: 20px 0 ">
                                                <h5 style="font-size: 1.20rem;">Member Email</h5>
                                                <input id="name" name="mem" type="text"
                                                       value="<?php echo $config["logged"]->email; ?>">
                                            </div>
                                            <div class="col s3">
                                                <button class="btn waves-effect waves-light right default" type="submit"
                                                        name="action">Update <i class="material-icons right">send</i>
                                                </button>

                                            </div>
                                        </div>
                                        <div class=" col s6">
                                            <div style="margin: 20px 0 ">
                                                <h5 style="font-size: 1.20rem;">Mobile Number</h5>
                                                <input id="name" name="mphn" type="text"
                                                       value="<?php echo $config["logged"]->phone; ?>">
                                            </div>
                                            <div style="margin: 20px 0 ">
                                                <h5 for="disabled" style="font-size: 1.20rem;">Reference ID</h5>
                                                <input disabled id="name" type="text"
                                                       value="<?php echo $config["logged"]->ref_id; ?>">
                                            </div>
                                            <div style="margin: 20px 0 ">
                                                <h5 style="font-size: 1.20rem;">Approve Date</h5>
                                                <input disabled id="name" type="text"
                                                       value="<?php echo $config["logged"]->activated_on; ?>">
                                            </div>
                                            <div style="margin: 20px 0 ">
                                                <h5 style="font-size: 1.20rem;">Joining Date</h5>
                                                <input disabled id="name" type="text"
                                                       value="<?php echo $config["logged"]->created_on; ?>">
                                            </div>


                                        </div>

                                    </form>
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