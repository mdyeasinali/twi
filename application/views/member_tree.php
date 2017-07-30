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
            <h1>Member Tree</h1>
        </div>

        <div class="me-page-body">
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
<!--                            <div id="memberTree"></div>-->
                            <?php
                            //pre(array_filter($tree));
                            ?>
                            <table id="memberTree" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th style="width:400px">Tree</th>
                                    <th>Reference ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($tree as $use){
                                    ?>
                                    <tr>
                                        <td><?=$use['id']?></td>
                                        <td><?=$use['username']?></td>
                                        <td>
                                            <div class="tt" data-tt-id="<?=$use['id']?>" data-tt-parent="<?=$use['ref_id']?>"><?=$use['username']?></div>
                                        </td>
                                        <td><?=$use['ref_id']?></td>
                                    </tr>
                                    <?php
                                    $child = array_filter($use['children']);
                                    if ($child && !empty($child)){
                                        foreach ($child as $che){
                                            ?>
                                            <tr>
                                                <td><?=$che['id']?></td>
                                                <td><?=$che['username']?></td>
                                                <td>
                                                    <div class="tt" data-tt-id="<?=$che['id']?>" data-tt-parent="<?=$che['ref_id']?>"><?=$che['username']?></div>
                                                </td>
                                                <td><?=$che['ref_id']?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                ?>


                                </tbody>
                            </table>
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