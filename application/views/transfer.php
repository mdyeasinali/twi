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
            <h1>Transfer</h1>
        </div>

        <div class="me-page-body">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title">Transfer Blance</span>
                            <div class="row">
                                <form class="col s12 no-padding" method="POST" action="/admin/transfer_balance">
                                    <div class="row no-margin">
                                        <div class="input-field col s12">
                                            <input id="recvr" name="recvr" type="text">
                                            <label for="recvr" class="">Member ID</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="amount" name="amount" type="number">
                                            <label for="amount">Amount</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="message" class="materialize-textarea" name="msg"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right default" type="submit" name="action">Submit <i class="material-icons right">send</i></button>
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