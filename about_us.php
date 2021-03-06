<?php require_once ("head.php")?>

<style>
    #images img{
        max-width: 100%;
        height: auto;
    }
</style>

<?php require_once ("header_2.php")?>

    <!--BANNER START-->
    <div class="kode-inner-banner">
        <?php   foreach ($response_array->return_data as $responses){?>
            <img src=" <?php echo $response_array->image_path.$responses->about_us_page?>" alt="banner">
        <?php } ?>
        <div class="kode-page-heading">
            <h2>About Us</h2>
            <!-- <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">About Us</li>
            </ol>-->
        </div>
    </div>
    <!--BANNER END-->
<?php require_once ("downloadAppHold.php")?>
    <!--CONTENT START-->
<?php   foreach ($response_array->return_data as $responses){ ?>
    <div class="kode-content">
        <!--BOOK GUIDE SECTION START-->
        <section>
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-content margin-bottom-zero">
                    <h2><?php print  @$slogan?></h2>
                </div>
                <!--SECTION CONTENT END-->
                <div class="book-guide">
                    <div class="row">
                        <div class="col-md-5" id="images">
                            <img src="images/mockUp/guo_app.png" alt="<?php print  @$siteName?>">
                        </div>
                        <div class="col-md-7">
                         <!--   <p class="cap">Have you ever wondered how you can effortlessly recite a song you have listened to just a few times but may have difficulty remembering paragraphs in a book or exam materials you have read a few times? It has been a long-established fact that listening is a superior way of learning than reading. When you combine listening and reading, the act of learning becomes a whole lot easier and much more impactful. </p>
                            <p><?php /*print  @$siteName*/?> is here to make learning a breeze by letting you learn at your convenience. With <?php /*print  @$siteName*/?>, you can choose to only read or only listen or do both read and listen to your fun books, textbooks or your exam materials. You can do these while you are doing other things like travelling or just lying down. <?php /*print  @$siteName*/?> is for all ages and very user friendly. Try it today.</p>
                            <p>Are you reading for fun or have an exam that you want to pass with flying colors? Or maybe you just want to acquire knowledge. Make <?php /*print  @$siteName*/?>  your gateway to it all and have fun doing so.</p>-->
                            <p class="cap"><?php echo $responses->about_us?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <!--COUNT UP SECTION START-->
        <!--ABOUT INFO SECTION START-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="kode-profile-tabs">
                            <div class="kd-horizontal-tab">
                                <div class="kode-thumb">
                                    <img src="images/mockUp/SRD_twitter.png" alt="<?php print  @$siteName?>">
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#Why" aria-controls="Why" role="tab" data-toggle="tab">Why <?php print  @$siteName?></a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Why">
                                        <!--<p>It has been proven over the years that children memorize and remember songs that they listen to much quicker, easier and stronger than things they read. The sense of hearing is one that does not necessarily require strong concentration from the child to acquire knowledge. A child can be doing multiple things like texting, playing with toys and playing with friends and still be listening to her favorite songs playing through his or her headphones or earbuds. These songs can be played over and over multiple times and in no time the child has memorized the song and very many other songs in that short period. But these songs, though memorized may not be concretized since spoken words and songs are usually different and therefore, they are called “Lyrics” instead of “Notes” or “Literature” or other academic terms. Now imagine a child listening to notes or literature or test books over and over and also when he or she can, looking over the actual words! This may help to bridge the disparity between kids whose parents can afford extra classes outside school and the kids who can barely afford to go to school – that is what <?php /*print  @$siteName*/?> has come to fulfill.
                                        </p>
                                        <p> Adolescents and adults also love listening to music and books. They too will benefit a whole lot from <?php /*print  @$siteName*/?>. The combination of reading and listening to textbooks and exam materials whenever, wherever will highly increase the acquisition of knowledge and the passing of exams with flying colors. Fun books like novels and story books will also be enjoyed in <?php /*print  @$siteName*/?>!</p>-->
                                        <p><?php echo $responses->why_guo?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="kd-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Our Mission
                                                <i class="fa fa-minus"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body" id="mission">
                                          <!-- If that poor child in a remote village in Ihiala, Anambra, Nigeria or the affluent child in metropolitan Banana Island, Lagos, Nigeria or the middle-class child in Uwani, Enugu, Nigeria can embrace <?php /*print  @$siteName*/?>, we would have achieved one of our important mission. If an undergraduate in College of Medicine, University of Nigeria, Enugu Campus, the post-graduate in University of Lagos Business School and the secondary school kid anywhere in Nigeria consider <?php /*print  @$siteName*/?> a “must-have”, we would have also reached another milestone in our mission. Ultimately, we want everybody, regardless of your inclination to have a great reason to download and use <?php /*print  @$siteName*/?> because sincerely, we want to carry everyone along on this mission called --><?php /*print  @$siteName*/?>
                                            <?php echo $responses->mission?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Our Vision
                                                <i class="fa fa-minus"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                           <!-- We anticipate that sooner than later, <?php /*print  @$siteName*/?> will be used by every student in Nigeria, other African Countries and indeed all over the world. We also imagine that readers who want to acquire knowledge, have fun reading novels and story books or just want to keep their minds busy will find <?php /*print  @$siteName*/?> irresistible.
                                            <br>
                                            Try <?php /*print  @$siteName*/?> today, you may well love it and be part of the <?php /*print  @$siteName*/?> Family. Do you know that <?php /*print  @$siteName*/?> literally means “Read” in Igbo, an African Language spoken by majority of people in South Eastern, Nigeria?
                                            We hope that <?php /*print  @$siteName*/?> will be the app for reading and listening to books written in native languages like Igbo, Yoruba, Hausa, Swahili and many other African languages. It may also help endangered languages. <?php /*print  @$siteName*/?> will likely become a backbone for not only the preservation but the expansion of these languages.-->
                                            <?php echo $responses->vision?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ABOUT INFO SECTION END-->
    </div>
<?php  }; ?>
    <!--CONTENT END-->


<?php require_once ("footer.php")?>

<?php require_once ("e_script.php")?>


