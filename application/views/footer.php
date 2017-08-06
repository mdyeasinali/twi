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
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/jquery-treetable.js"></script>
<!--jQuery Validation-->
<script  src="<?php echo BASE_URL; ?>static/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/init.js"></script>
<script type="text/javascript">
    <?php
        if ($_SESSION['ret']){
            $color = '';
            if ($_SESSION['ret']['status']  == 'success'){
                $color = 'green';
            }
            elseif ($_SESSION['ret']['status']  == 'error'){
                $color = 'red';
            }
            else{
                $color = 'black';
            }

            toast($_SESSION['ret']['status'], $_SESSION['ret']['msg'], $color);
        }
    ?>
</script>

<!--data tables example-->
<script type="text/javascript">
    /*Basic data table example*/
    $(document).ready(function() {
        $('#example1').DataTable();
        $('select').material_select();
    });

    /*row grouping example*/
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;

                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                        );

                        last = group;
                    }
                });
            }
        });

        // Order by the grouping
        $('#example2 tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        $('select').material_select();
    });


    /*hide data table select entity programmatically*/
    $(document).ready(function() {
        $(".dataTables_wrapper .dropdown-content.select-dropdown li").on("click", function() {
            var that = this;
            setTimeout(function() {
                if ($(that).parent().hasClass('active')) {
                    $(that).parent().removeClass('active');
                    $(that).parent().prev().removeClass('active');
                    $(that).parent().hide();
                    $(that).removeClass('selected');
                }
            }, 40);
        });
    });
</script>


<script>
    $("#formValidate").validate({
        rules: {
            uname: {
                required: true,
                minlength: 4
            },
            cemail: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 4
            },
            cpassword: {
                required: true,
                minlength: 4,
                equalTo: "#password"
            },
            npassword: {
                required: true,
                minlength: 4
            },
            curl: {
                required: true,
                url: true
            },
            crole: "required",
            ccomment: {
                required: true,
                minlength: 15
            },
            cgender: "required",
            cagree: "required",
        },
        //For custom messages
        messages: {
            uname: {
                required: "Enter a username",
                minlength: "Enter at least 4 characters"
            },
            curl: "Enter your website URL",
            cpassword: "Your enter password is different",
            npassword: "Enter New  password",
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
</script>

</body>
</html>
