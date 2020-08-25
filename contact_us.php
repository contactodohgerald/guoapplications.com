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
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="tel" placeholder="Phone" name="phone" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" required></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="g-recaptcha" data-sitekey="6LeUp8EZAAAAAIVaGovlteZESiVnChTgYR9Jqos-"></div>
                            </div>
                            <div class="col-md-12 form-group ">
                                <button class="guoBtn contactGUO" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
                <div class="col-md-5">
                    <!--LOCATION INFO START-->
                    <div class="kode-location">
                        <h2>Contact Customer Care Service</h2>
                        <p><?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info">
                        <ul>
                            <li>
                                <i class="fa fa-whatsapp border-red"></i>
                                <h4>WhatsApp</h4>
                                <p><?php print  @$whatsApp?></p>
                            </li>
                            <li>
                                <i class="fa fa-phone border-yellow"></i>
                                <h4>Phone</h4>
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