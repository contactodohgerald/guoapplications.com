
<footer>
    <div class="container">
        <div class="row">
            <!--TEXT WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-text">
                    <h2>Contact Us</h2>
                    <p> <?php print  @$siteName?> is there to make learning a breeze by letting you learn at your convenience</p>
                    <ul>
                        <li><i class="fa fa-tags"></i><p><?php print  @$siteAddress?></p></li>
                        <li><i class="fa fa-phone"></i><p><?php print  @$sitePhone?></p></li>
                        <li><i class="fa fa-envelope-o"></i><p><a href="mailto:info@bookstore.com"><?php print  @$siteMail?></a></p></li>
                    </ul>
                </div>
            </div>
            <!--TEXT WIDGET END-->
            <!--CATEGORY WIDGET START-->
            <div class="col-md-4">
                <div class="widget widget-categories">
                    <h2>Pages</h2>
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
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-4">
                <div class="widget widget-newletter">
                    <h2>Newsletter</h2>
                    <p>Stay updated with <?php print  @$siteName?> on all the happenings as we give you nothing but the best</p>
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