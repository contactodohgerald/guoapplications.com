
<footer>
    <div class="container">
        <div class="row">
            <!--TEXT WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-text">
                    <h2 class="text-center">Contact Us</h2>
                    <p> <?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience</p>
                    <ul>
                        <li><i class="fa fa-whatsapp"></i><p><?php print  @$whatsApp?></p></li>
                        <li><i class="fa fa-phone"></i><p><?php print  @$sitePhone?></p></li>
                        <li><i class="fa fa-envelope-o"></i><p><a href="mailto:info@bookstore.com"><?php print  @$siteMail?></a></p></li>
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
                            <a href="signIn">Login</a>
                        </li>
                        <li>
                            <a href="signUp">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-4">
                <div class="widget widget-newletter">
                    <h2 class="text-center">Newsletter</h2>
                    <p> Subscribe today to get the latest textbooks, exam materials, fun books and features in <?php print  @$siteName?></p>
                    <form action="#" method="post">
                        <input type="email" placeholder="E-mail ID" name="email" required>
                        <button type="submit" name="submit">Subscribe</button>
                    </form>
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