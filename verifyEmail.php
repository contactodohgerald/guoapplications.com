<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
          <!--  <h2>Email Token</h2>
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li><a href="./signUp">Sign Up</a></li>
                <li class="active">Email Token</li>
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
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Email Token</h4>
                            </div>
                            <div class="col-md-12 form-group">
                                <input  id="token" class="form-control email_token" type="number" placeholder="Token">
                                <div class="err_email_token error_displayer"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="guoBtn" type="submit" onclick="verifyEmails()">Verify Email</button>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px">
                                <h5>Didn't Get Token? <button class="guoBtn" id="guoBtn" type="submit" onclick="resendToken()">Resend Token</button></h5>
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