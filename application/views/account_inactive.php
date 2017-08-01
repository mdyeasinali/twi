<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:32 AM
 */
include 'header.php';
?>

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Page Body-->
    <main>

        <div class="me-page-title">
            <!--Page Title-->
            <h1>Membership Inactive <?php echo $msg; ?></h1>
        </div>

        <div class="me-page-body">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title">Membership Inactive</span>
                            <div class="row">
                                <form class="col s12 no-padding" method="POST" action="/admin/account_inactive">
                                    <div class="row no-margin">

                                        <div class="input-field col s12">
                                            <input id="username" name="username" type="text">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password" type="password" name="password">
                                            <label for="password">Password</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right default" type="submit"
                                                    name="action">Submit <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card form-box">
                        <div class="card-content">
                            <div class="col-md-6">
                                <div class="tbl-cell">
                                    <h3>Rules</h3>
                                </div>
                                <label class="form-label">Please Read Carefully</label>
                                <ol>
                                    <li>You can inactive your account after 90 days of membership.</li>
                                    <li>If you inactive your account, your security deposit will be paid.</li>
                                    <li>25% will be deducted from your security deposit.</li>
                                    <li>You will be paid your security deposit within 48 hours.</li>
                                    <li>You have to withdraw all your balance before Inactive your account</li>
                                    <li>Your remaining balance, if you have, will not be paid after inactive your
                                        account.
                                    </li>
                                    <li>To reactive you’re account you have to pay $15 as security money and $5 as
                                        fine.
                                    </li>
                                </ol>
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