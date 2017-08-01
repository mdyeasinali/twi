<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/25/2017
 * Time: 1:32 AM
 */
include 'header.php';
?>
<?php
?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Page Body-->
    <main>

        <div class="me-page-title">
            <!--Page Title-->
            <h1>Change Password</h1>
        </div>

        <div class="me-page-body">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card form-box">
                        <div class="card-content">
                            <div class="row">
                                <form class="formValidate" id="formValidate" method="POST"
                                      action="/admin/change_password" novalidate="novalidate">
                                    <div class="row">

                                        <div class="input-field col s12">
                                            <label for="password">Current Password *</label>
                                            <input id="password" type="password" name="password"
                                                   data-error=".errorTxt3">
                                            <div class="errorTxt3"></div>
                                        </div>

                                        <div class="input-field col s12">
                                            <label for="cpassword">Confirm Password *</label>
                                            <input id="cpassword" type="password" name="cpassword"
                                                   data-error=".errorTxt4">
                                            <div class="errorTxt4"></div>

                                            <div class="input-field col s12">
                                                <label for="npassword">New Password *</label>
                                                <input id="npassword" type="password" name="npassword"
                                                       data-error=".errorTxt2">
                                                <div class="errorTxt2"></div>
                                            </div>

                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right submit default"
                                                    type="submit" name="action">Update <i
                                                        class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>


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