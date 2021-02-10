<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <?php   foreach ($response_array->return_data as $responses){?>
            <img src="<?php echo $response_array->image_path.$responses->verify_email_page?>" alt="banner">
        <?php } ?>
        <div class="kode-page-heading">
            <h2>Input Token From Email</h2>
          <!--  
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li><a href="./signUp">Sign Up</a></li>
                <li class="active">Email Token</li>
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
                        <div class="row">
                            <div class="col-md-12">
                                <h4> Input Token From Email</h4>
                            </div>
                            <div class="col-md-12 form-group">
                                <input  id="token" class="form-control email_token" type="number" placeholder="Token">
                                <div class="err_email_token error_displayer"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="guoBtn" type="submit" onclick="verifyEmailHandler(this)">Verify Email</button>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px">
                                <h5>Didn't Get Token? <button class="guoBtn" id="guoBtn" type="submit" onclick="resendTokenHandler(this)">Resend Token</button></h5>
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