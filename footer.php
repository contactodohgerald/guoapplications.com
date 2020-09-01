
<footer>
    <div class="container">
        <div class="row">
            <!--TEXT WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-text">
                    <h2 class="text-center">Contact Us</h2>
                    <p> <?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience</p>
                    <ul id="footer_contactUs">

                    </ul>
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
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-4">
                <div class="widget widget-newletter">
                    <h2 class="text-center">Join Us</h2>
                    <p>Join and Follow <?php print  @$siteName?> Today</p>
                    <div class="contact-info" id="footer_join_us">

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