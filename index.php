<?php require_once ("head.php")?>

<?php require_once ("header.php")?>

<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://guo.guoapplications.com/api/getAllSlideImages',
    CURLOPT_USERAGENT => 'Get About Us Details',

]);

$slide_image = curl_exec($curl);

$slide_image_response = json_decode($slide_image);
//print_r();
curl_close($curl)


?>

    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode-banner">
    <?php   foreach ($slide_image_response->return_data as $get_response){ ?>
            <ul class="bxslider">
            <?php for ($i = 0; $i < count($get_response); $i++){ ?>
                <li>
                    <img src="<?php echo $slide_image_response->return_data->image_path.$get_response[$i]->images?>" alt="<?php print  @$siteName?>">
                    <div class="kode-caption">
                        <h2><?php print  @$siteName?></h2>
                        <h4 style="color: white; text-transform: uppercase"><?php print  @$slogan?></h4>
                        <p><?php echo $get_response[$i]->description?></p>
                    </div>
                </li>
            <?php } ?>
            </ul>
    <?php  }; ?>
    </div>
    <!--BANNER END-->
    <!--BUT NOW START-->
    <section class="buy-template">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h2 class="text-center">Download <?php print  @$siteName?> and open the doors of fun and knowledge</h2>
                    <p style="margin-bottom: 6px; font-weight: bold;" class="text-center">Visit Google PlayStore or Apple App Store to download <?php print  @$siteName?>  app </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="<?php print  @$playStore?>">
                        <img src="images/stores/coming-soon_playstore.png" alt="<?php print  @$siteName?>" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="<?php print  @$appleUrl?>">
                        <img src="images/stores/coming_soon_apple.png" alt="<?php print  @$siteName?>" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--BUT NOW END-->
    <!--CONTENT START-->
    <div class="kode-content">
        <!--BOOK GUIDE SECTION START-->
        <section class="kode-services-section">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-content">
                    <h2>Getting Started With <span><?php print @$siteName?> </span> app</h2>
                    <p> Are you reading for fun or for an exam you want to pass with flying colors? Or maybe, just to acquire knowledge. Make <?php print @$siteName?> your gateway to it all and have fun doing so.</p>
                </div>
                <!--SECTION CONTENT END-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="kode-service orangeText">
                            <i class="fa fa-gift"></i>
                            <h3><a href="#">Download The App</a></h3>
                            <p>Visit Google PlayStore or Apple App Store to download and install <?php print @$siteName?> to your device. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kode-service orangeText">
                            <i class="fa fa-book"></i>
                            <h3><a href="#">Sign Up</a></h3>
                            <p>Sign up with <?php print @$siteName?> in a simple, easy form and navigate our smart, user-friendly features.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kode-service orangeText">
                            <i class="fa fa-calculator"></i>
                            <h3><a href="#">Enjoy <?php print @$siteName?></a></h3>
                            <p>Enjoy the numerous textbooks, exam materials and fun books in <?php print @$siteName?> that will blow your mind!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <!--COUNT UP SECTION START-->
        <div class="count-up-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="count-up">
                            <span class="counter circle">15</span>
                            <p>MOST POPULAR DOWNLOAD </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="count-up">
                            <span class="counter circle">589</span>
                            <p>TOTAL DOWNLOADS </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="count-up">
                            <span class="counter circle">125</span>
                            <p>TOTAL AUTHORS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="kode-package-section">
            <div class="container">
                <div class="section-content">
                    <h2>Download  <span><?php print  @$siteName?> </span>And Enjoy</h2>
                    <p>Download <?php print  @$siteName?> App for free today and begin this life changing experience that lets you listen and learn anytime, anywhere!</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-3 col-sm-6 col-xs-6">
                        <a href="<?php print  @$playStore?>">
                            <img src="images/stores/coming-soon_playstore.png" alt="<?php print  @$siteName?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php print  @$appleUrl?>">
                            <img src="images/stores/coming_soon_apple.png" alt="<?php print  @$siteName?>" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

   <?php require_once ("footer.php")?>
</div>
<!--WRAPPER END-->

<?php require_once ("e_script.php")?>