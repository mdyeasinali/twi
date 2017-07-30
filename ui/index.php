<?php
include 'config.php';
$errorMsg = "";
if(isset($_POST["action"])) {
    $pass = md5(sha1($_POST['password']));
    $validUser = $db->get_row("SELECT id,username,password FROM users WHERE username='". $_POST['user'] ."' AND password='". $pass ."'");
    if(!$validUser){
        $errorMsg = "Invalid username or password.";
    }
    else {
        $_SESSION["user"] = $validUser->id;
        $_SESSION["login"] = true;
        $_SESSION["username"] = $validUser->username;
    }
}
if($_SESSION["user"]) {
    header("Location: /ui/admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Page Body-->
<div class="container">
    <div id="brand-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <a href="#" class="brand">Twitouch</a>
                </div>
            </div>
        </div>
    </div>

    <div id="form-banner">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card form-box">
                        <div class="card-content">
                            <span class="card-title login-title">Welcome back&#33;</span>
                            <div class="row">
                                <form method="POST" action="">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="user" type="text" name="user">
                                        <label for="user">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col s12 extra-info-link">
                                        <span class="rem-pass">
                                            <input type="checkbox" id="checkbox1" class="filled-in default">
                                            <label for="checkbox1">Remember me</label>
                                        </span>
                                        <span class="ref-form-link right-float"><a href="reset.html">Forgot your password?</a></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit" name="action">Sign in to your account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="signup.html">Don't have an account? <span>Sign up</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End page body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Footer-->
<footer class="form-footer">

    <div class="row">
        <div class="col s12 center">
            <ul class="footer-list">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">&copy;  MaterialMe</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-->
<!-- //////////////////////////////////////////////////////////////////////////// --

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    <?php
    if($errorMsg != '') {
    ?>
    Materialize.toast('<?php echo $errorMsg?>', 4000);
    <?php
    }
    ?>
</script>
</body>
</html>