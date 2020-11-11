<section class="lib-textimonials">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section-heading-1 dark-sec">
            <h2>Download <?php print  @$siteName?> & Enjoy</h2>
            <p>You Are Logged In, Download <?php print  @$siteName?> App for free today and begin this life changing experience that lets you listen and learn anytime, anywhere!
            </p>
            <div class="kode-icon"><i class="fa fa-book"  style="color: #f05a23"></i></div>
        </div>
        <!--SECTION HEADING END-->
        <?php   foreach ($response_array->return_data as $responses){ ?>
            <div class="row">
                <div class="col-md-3 col-md-offset-3 col-sm-6 col-xs-6">
                    <a href="<?php echo $responses->playStoreUrl?>">
                        <img src="images/stores/coming-soon_playstore.png" alt="<?php print  @$siteName?>" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="<?php echo $responses->appleStoreUrl?>">
                        <img src="images/stores/coming_soon_apple.png" alt="<?php print  @$siteName?>" class="img-responsive">
                    </a>
                </div>
            </div>
        <?php  }; ?>
    </div>
</section>