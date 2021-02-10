<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <?php   foreach ($response_array->return_data as $responses){?>
            <img src=" <?php echo $response_array->image_path.$responses->resetPassword_1_page?>" alt="banner">
        <?php } ?>
        <div class="kode-page-heading">
            <h2>Verify Email</h2>
          <!--
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li><a href="./signIn">Sign In</a></li>
                <li class="active">Verify Email</li>
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
                                <h6>Please Provide Your Account Email To Continue!</h6>
                            </div>
                            <div class="col-md-12 form-group">
                                <input  id="email" class="form-control email" type="email" placeholder="Email">
                                <div class="err_email error_displayer"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="guoBtn" id="guoBtn" type="submit" onclick="resetPasswordHandler_1(this)">Send Token To Email</button>
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