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
        <h1>Dashboard</h1>

    </div>

    <div class="container">
        <div class="row">

            <div class="col s12 m6 l4 me-sl">
                <div class="card">
                    <div class="card-content dash-nav-box"  style="margin: 0px 60px;">
                        <span class="card-title dash-nav-title">Security Amount</span>
                        <p class="dash-nav-footer">$15.00</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 me-sl">
                <div class="card" >
                    <div class="card-content dash-nav-box"  style="margin: 0px 60px;">
                        <span class="card-title dash-nav-title">Today Ref Earn</span>
                        <p class="dash-nav-footer">$<?php echo $refamount ?></p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 me-sl">
                <div class="card">
                    <div class="card-content dash-nav-box"  style="margin: 0px 60px;">
                        <span class="card-title dash-nav-title">Today Job Earn</span>
                        <p class="dash-nav-footer">$<?php echo $totaljobEran ?></p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 me-sl">
                <div style="margin: auto" class="card">
                    <div class="card-content dash-nav-box" style="margin: 0px 40px;">
                        <span class="card-title dash-nav-title">Today Withdrawal</span>
                        <p class="dash-nav-footer">$<?php echo $withdrawalamount ?></p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 me-sl">
                <div class="card">
                    <div class="card-content dash-nav-box"  style="margin: 0px 60px;">
                        <span class="card-title dash-nav-title">Today Transfer</span>
                        <p class="dash-nav-footer">$0.0000</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4 me-sl">
                <div class="card">
                    <div class="card-content dash-nav-box"  style="margin: 0px 60px;">
                        <span class="card-title dash-nav-title">Account Balance</span>
                        <p class="dash-nav-footer">$<?= $config["logged"]->total ?></p>
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