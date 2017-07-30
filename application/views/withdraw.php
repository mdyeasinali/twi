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
            <h1>Withdraw</h1>
        </div>

        <div class="me-page-body">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title">Withdraw Blance</span>
                            <div class="row">
                                <form class="col s12 no-padding" method="POST" action="/admin/request_withdraw">
                                    <div class="row no-margin">
                                        <div class="input-field col s12">
                                            <input id="username" name="username" type="text">
                                            <label for="username" class="">Username</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password" name="password" type="password">
                                            <label for="password" class="">Password</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <select name="payment_method" id="payment_method">
                                                <option>Payment Method</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Payoneer</option>
                                                <option value="3">Skrill</option>
                                                <option value="4">Perfect Money</option>
                                            </select>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="amount" name="amount" type="number">
                                            <label for="amount">Amount</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="g_email" name="g_email" type="text">
                                            <label for="g_email" class="">Gateway Email/ID</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right default" type="submit">Submit <i class="material-icons right">send</i></button>
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