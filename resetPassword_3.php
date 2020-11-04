<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Reset Password</h2>
           <!-- <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li><a href="./signIn">Sign In</a></li>
                <li><a href="./resetPassword_1">Send Token To Email</a></li>
                <li class="active">Reset Password</li>
            </ol>-->
        </div>
        <?php require_once ("downloadAppHold.php")?>
    </div>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <h5 class="text-uppercase">Create A New Password</h5>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input  id="password_" class="form-control password" type="password" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon Password" onclick="NeededModules.togglePassword('password_', 'Password')"></span>
                                <div class="err_password error_displayer"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input  id="password" class="form-control password_confirmation" type="password" placeholder="Confirm Password">
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon CPassword" onclick="NeededModules.togglePassword('password', 'CPassword')"></span>
                                <div class="err_password_confirmation error_displayer"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="guoBtn" id="guoBtn" type="submit" onclick="resetUsersPassword()">Create New Password</button>
                            </div>
                        </div>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    <!--NEWSLETTER START-->
<?php require_once ("footer.php")?>
    </div>
    <!--WRAPPER END-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php require_once ("e_script.php")?>