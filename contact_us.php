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
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group" >
                                    <input class="form-control" type="text" required name="name" placeholder="Name" style="margin-bottom: 8px">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group" >
                                    <input class="form-control" type="email" required name="email" placeholder="Email" style="margin-bottom: 6px">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group" >
                                    <textarea name="message" class="form-control" required style=" margin-bottom: 8px" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group" >
                                    <input type="tel" class="form-control" name="phone" required placeholder="Phone Number">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group" >
                                    <div class="g-recaptcha" data-sitekey="6LeUp8EZAAAAAIVaGovlteZESiVnChTgYR9Jqos-"></div>
                                </div>
                                <div class="col-md-12">
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
                        <h2>Contact Customer Care Service</h2>
                        <p><?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info">
                        <ul>
                            <li>
                                <a href="whatsapp://send?phone=<?php print  @$whatsApp?>&text=How Can We Be Of Service?">
                                    <i class="fa fa-whatsapp border-red"></i>
                                </a>
                                <h4>WhatsApp</h4>
                                <p><?php print  @$whatsApp?></p>
                            </li>
                            <li>
                                <a href="tel:<?php print  @$sitePhone?>">
                                    <i class="fa fa-phone border-yellow"></i>
                                </a>
                                <h4>Phone</h4>
                                <p><?php print  @$sitePhone?></p>
                            </li>
                            <li>
                                <a href="mailto:<?php print  @$siteMail?>">
                                    <i class="fa fa-envelope border-blue"></i>
                                </a>
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