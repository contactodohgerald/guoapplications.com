<?php require_once ("head.php")?>

<?php /*require_once ("header_2.php")*/?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading " style="margin-bottom: 15%">
            <h2>Success Page</h2>
        </div>
    </div>
    <!-- --><?php /*require_once ("downloadAppHold.php")*/?>
    <!--CONTENT START-->
    <div class="kode-content" style="margin: 0; padding: 0">
        <!--TOP AUTHERS START-->
        <div class="container">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-12 text-center ">
                    <div class="alert alert-success" >
                        <h4><?php $success = $_GET['success']; echo $success?></h4>
                    </div>
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