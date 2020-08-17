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
        <div class="container">
            <div class="banner-search">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Download <?php print  @$siteName?> and open the doors of fun and knowledge</h2>
                        <p style="color: #ffffff;">Visit either the Google PlayStore or Apple Appstore to download the <?php print  @$siteName?> app. </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <img src="images/stores/coming-soon_playstore.png" alt="<?php print  @$siteName?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <img src="images/stores/coming_soon_apple.png" alt="<?php print  @$siteName?>" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" placeholder="Phone" name="phone" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
                <div class="col-md-5">
                    <!--LOCATION INFO START-->
                    <div class="kode-location">
                        <h2>Contact Us</h2>
                        <p><?php print  @$siteName?> is there to make learning a breeze by letting you learn at your convenience.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info">
                        <ul>
                            <li>
                                <i class="fa fa-globe border-red"></i>
                                <h4>Address</h4>
                                <p><?php print  @$siteAddress?></p>
                            </li>
                            <li>
                                <i class="fa fa-phone border-yellow"></i>
                                <h4>Phone &amp; Fax</h4>
                                <p><?php print  @$sitePhone?></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o border-blue"></i>
                                <h4>Email</h4>
                                <p><?php print  @$siteMail?></p>
                            </li>
                        </ul>
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