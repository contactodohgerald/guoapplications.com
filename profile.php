
<?php require_once ("head.php")?>

<?php

if (!isset($_SESSION['api_Token'])){
    $message = 'Please Login or Create an Account';
    header('location:signIn?error='.$message);
}
?>

<?php require_once ("header_2.php")?>

    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>User Profile</h2>
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li><a href="./login">Sign In</a></li>
                <li class="active">User Profile</li>
            </ol>
        </div>
        <?php require_once ("downloadAppHold.php")?>
    </div>
    <!--CONTENT START-->
    <div class="kode-content">
        <!--AUTHOR DETAIL SECTION START-->
        <section class="kode-author-detail-2">
            <div class="container">
                <div class="kode-thumb userImages">

                </div>
                <div class="kode-text">
                    <h2 class="userName"></h2>
                    <div class="contact-box">
                        <div class="row">
                            <div class="col-md-8">
                                <table>
                                    <tr>
                                        <td><i class="fa fa-phone"></i></td>
                                        <td>Phone No:</td>
                                        <td class="userPhone"></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-envelope-o"></i></td>
                                        <td>Email ID:</td>
                                        <td class="userEmail"></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-fax"></i></td>
                                        <td>Country:</td>
                                        <td class="userCountry"></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-times"></i></td>
                                        <td>Joined Since:</td>
                                        <td class="joinSince"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--AUTHOR DETAIL SECTION END-->
        <!--GIFT CARD SECTION START-->
        <section class="lib-textimonials">
            <div class="container">
                <!--SECTION HEADING START-->
                <div class="section-heading-1 dark-sec">
                    <h2>Download <?php print  @$siteName?> & Enjoy</h2>
                    <p>You Are Logged In, Download <?php print  @$siteName?> App for free today and begin this life changing experience that lets you listen and learn anytime, anywhere!
                    </p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION HEADING END-->
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
        <!--GIFT CARD SECTION END-->
    </div>
    <!--CONTENT END-->


<?php require_once ("footer.php")?>

<?php require_once ("e_script.php")?>

<script>
    $(document).ready(function () {
        getLoggedInUserDetails();
    })
</script>
