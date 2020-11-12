<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>

<!--BANNER START-->
<div class="kode-inner-banner">
    <div class="kode-page-heading">
        <h2>Terms & Conditions</h2>
       <!--
        <ol class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="active">Terms & Condition</li>
        </ol>-->
    </div>
</div>
<?php require_once ("downloadAppHold.php")?>
<!--CONTENT START-->
<div class="kode-content">
    <!--TERMS & CONDITION SECTION START-->
    <section class="kode-bio">
        <div class="container">
            <div class="section-heading-1">
                <h2> Terms & Conditions</h2>
                <div class="kode-icon"><i class="fa fa-book" style="color:#f05a23;"></i></div>
            </div>
            <?php   foreach ($response_array->return_data as $responses){ ?>
            <div class="kode-text">
                <p><?php echo $responses->terms_and_condition?></p>
            </div>
          <!--  <div class="kode-text">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Early Life and Education</h2>
                        <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                    </div>
                    <div class="col-md-6">
                        <h2>Early Life and Education</h2>
                        <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                    </div>
                </div>
            </div>-->
            <?php } ?>
        </div>
    </section>
    <!--TERMS & CONDITION SECTION END-->
    <!--GIFT CARD SECTION START-->
    <?php require_once ("testimonies.php")?>
    <!--GIFT CARD SECTION END-->
</div>
<!--CONTENT END-->


<?php require_once ("footer.php")?>

<?php require_once ("e_script.php")?>
