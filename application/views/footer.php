<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/22/2017
 * Time: 2:15 AM
 */

?>


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Footer-->
<footer class="form-footer">

    <div class="row">
        <div class="col s12 center">
            <ul class="footer-list">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">&copy;  Twitouch</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-->
<!-- //////////////////////////////////////////////////////////////////////////// --

<!--Import jQuery before materialize.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.10/d3.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/jquery-treetable.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/init.js"></script>
<script type="text/javascript">
    <?php
        if ($_SESSION['ret']){
            toast($_SESSION['ret']['status'], $_SESSION['ret']['msg'], 'green');
        }
    ?>
</script>

</body>
</html>
