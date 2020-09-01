<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Contact Us</h2>
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Contact Us</li>
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
                <div class="col-md-7">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <h2>Drop Us an Email</h2>
                        <form action="#" method="post">
                            <div class="container-fluid">
                                <div class="form-group" >
                                    <input class="form-control" type="text" required name="name" placeholder="Name" style="margin-bottom: 8px">
                                </div>
                                <div class="form-group" >
                                    <input class="form-control" type="email" required name="email" placeholder="Email" style="margin-bottom: 6px">
                                </div>
                                <div class="form-group" >
                                    <textarea name="message" class="form-control" required style=" margin-bottom: 8px" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="guoBtn" type="submit" name="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--CONTACT FORM END-->
                </div>

                <div class="col-md-5">
                    <!--LOCATION INFO START-->
                    <div class="kode-location">
                        <h2>Contact Customer Care</h2>
                        <p><?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info" id="contactUs">

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