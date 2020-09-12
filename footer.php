
<footer>
    <div class="container">
        <div class="row">
            <!--TEXT WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-text">
                    <h2 class="text-center">Contact Us</h2>
                    <p> <?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience</p>
                    <?php   foreach ($response_array->return_data as $responses){ ?>
                    <ul>
                        <li>
                            <i class="fa fa-whatsapp" style="color: #f05a23"></i>
                            <p>
                                <a href="whatsapp://send?phone=<?php echo $responses->whatsAppPhone ?>&text=How Can We Be Of Service?"><?php echo $responses->whatsAppPhone ?></a>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-phone" style="color: #1b1363"></i>
                            <p>
                                <a href="tel:<?php echo $responses->siteOfficialPhone ?>"><?php echo $responses->siteOfficialPhone ?></a>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" style="color: #2d3092"></i>
                            <p>
                                <a href="mailto:<?php echo $responses->siteMail ?>"><?php echo $responses->siteMail ?></a>
                            </p>
                        </li>
                    </ul>
                    <?php  }; ?>
                </div>
            </div>
            <!--TEXT WIDGET END-->
            <!--CATEGORY WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-categories">
                    <h2 class="text-center">Pages</h2>
                    <ul>
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="about_us">About Us</a>
                        </li>
                        <li>
                            <a href="contact_us">Contact Us</a>
                        </li>
                        <li>
                            <a href="signIn">Sign In</a>
                        </li>
                        <li>
                            <a href="signUp">Sign Up</a>
                        </li>
                        <li>
                            <a href="termsCondition">Terms & Condition</a>
                        </li>
                        <li>
                            <a href="faq">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-4">
                <div class="widget widget-newletter">
                    <h2 class="text-center">Join Us</h2>
                    <p>Join and Follow <?php print  @$siteName?> Today</p>
                    <div class="contact-info" >
                        <?php   foreach ($response_array->return_data as $responses){ ?>
                        <ul>
                            <li>
                                <a href="<?php echo $responses->facebookSocialMediaUrl ?>" target="_blank">
                                    <i class="fa fa-facebook border-red"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $responses->twitterSocialMediaUrl ?>" target="_blank">
                                    <i class="fa fa-twitter border-yellow"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $responses->instagramSocialMediaUrl ?>" target="_blank">
                                    <i class="fa fa-instagram border-blue"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $responses->youtubeUrl ?>" target="_blank">
                                    <i class="fa fa-youtube border-red"></i>
                                </a>
                            </li>
                        </ul>
                        <?php  }; ?>
                    </div>
                </div>
            </div>
            <!--NEWSLETTER START END-->
        </div>
    </div>
</footer>
<div class="copyrights">
    <div class="container">
        <p class="font-13"> © All Rights Reserved <?php $d=date('Y'); print $d;?> - Guo Applications Ltd</p>
    </div>
</div>