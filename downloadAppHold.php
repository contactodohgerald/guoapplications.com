<div class="container">
    <div class="banner-searchs">
        <?php   foreach ($response_array->return_data as $responses){ ?>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Download <?php print  @$siteName?> and open the doors of fun and knowledge</h2>
                <h2 style="color: #ffffff; font-size: 13px;text-transform: capitalize; margin-top: 3px " class="text-center">Visit Google PlayStore or Apple App Store to download <?php print  @$siteName?> </h2>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
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
</div>