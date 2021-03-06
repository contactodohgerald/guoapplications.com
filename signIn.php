<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <?php   foreach ($response_array->return_data as $responses){?>
            <img src="<?php echo $response_array->image_path.$responses->signIn_page?>" alt="banner">
        <?php } ?>
        <div class="kode-page-heading">
            <h2>Sign In</h2>
           <!--
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Sign In</li>
            </ol>-->
        </div>
    </div>
<?php require_once ("downloadAppHold.php")?>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <div class="row container-fluid">
                            <h5 class="text-uppercase">Sign In</h5>
                            <?php if(isset($_GET['error'])){ ?>
                                <div class="row">
                                    <div id="go" class=" col-lg-12">
                                        <p>
                                        <div id="go" class="alert alert-danger" style="text-align: left; color:#61B831;">
                                            Please Login or Create an Account
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input  id="email" class="form-control email" type="email" placeholder="Email">
                                <div class="err_email error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <input  id="password" class="form-control password" type="password" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon Password" onclick="NeededModules.togglePassword('password', 'Password')"></span>
                                <div class="err_password error_displayer"></div>
                            </div>
                            <div class="form-group" style="margin-top: 10px">
                                <h6>Forgot Password? <b><a href="./resetPassword_1">Reset</a></b> </h6>
                            </div>
                            <div class="form-group">
                                <button class="guoBtn" id="guoBtn" type="submit" onclick="loginUserHandler(this)">Sign In</button>
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