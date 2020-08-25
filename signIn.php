<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Sign In</h2>
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Sign In</li>
            </ol>
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
                        <h2>Sign In</h2>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input  id="email" class="form-control email" type="email" placeholder="Email">
                                <div class="email" hidden></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input  id="password" class="form-control password" type="password" placeholder="Password">
                                <div class="password" hidden></div>
                            </div>
                            <div class="col-md-12">
                                <button class="guoBtn" type="submit" onclick="loginUser()">Sign In</button>
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