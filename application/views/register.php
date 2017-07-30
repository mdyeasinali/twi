<?php

?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/theme.css"  media="screen,projection"/>
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
                            <span class="card-title login-title">Create your MaterialMe account.</span>
                            <div class="row">
                                <form>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="email" type="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="confirm-password" type="password">
                                        <label for="confirm-password">Confirm Password</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <button class="col s12 btn waves-effect waves-light default" type="submit" name="action">Create your account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 center">
                    <div class="refer-form-page">
                        <a href="/">Already have an account? <span>Sign in</span></a>
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
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/materialize.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>