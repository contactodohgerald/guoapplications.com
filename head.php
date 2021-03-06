<?php
ob_start();
session_start();

$siteName = 'GỤỌ';
$domain = 'guoapplications.com/';
$siteAddress = 'Enugu, Nigeria';
$playStore = '#';
$appleUrl = '#';
$slogan = 'Read & Listen to Success';

define('SITE_KEY', '6LcDWMUZAAAAAC2QJ-KNq1Tqxwog2NKPG-ow4oHS');
define('SECRET_KEY', '6LcDWMUZAAAAAIUYjW1g32gVPTWezP40clqyIjPg');


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://guo.guoapplications.com/api/getAllSettings',
    CURLOPT_USERAGENT => 'Get About Us Details',

]);

$response = curl_exec($curl);

$response_array = json_decode($response);

curl_close($curl)

?>

<?php
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://guo.guoapplications.com/api/getMobileUserDetails?token='.(isset($_SESSION['api_Token'])?$_SESSION['api_Token']:''),
    CURLOPT_USERAGENT => 'Get About Us Details',

]);

$loggedInUserDetails = curl_exec($curl);

$loggedInUserDetails_array = json_decode($loggedInUserDetails);


curl_close($curl)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="keywords" content="read, listen, fun, education, nigeria, jamb, weac, school, music, ">
    <meta name="description" content="Access books and exam materials any time, anywhere.">
    <meta name="CreativeLayers" content="ATFN">
    <meta name="MobileOptimized" content="320" />
    <meta property="og:title" content="Access books and exam materials any time, anywhere.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://<?php print $domain;?>/;">
    <meta property="og:image" content="images/logo/GuoLogo.png">
    <meta property="og:description" content="Access books and exam materials any time, anywhere.">
    <meta property="og:site_name" content="<?php echo $siteName; ?> - <?php echo $slogan; ?>">
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="415" />
    <meta property="og:image:secure_url" content="images/logo/GuoLogo.png" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="GOOGLEBOT" content="index follow"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#1b1363" />

    <title><?php echo $siteName; ?> - <?php echo $slogan; ?></title>
    <!-- CUSTOM STYLE -->
    <link href="style.css" rel="stylesheet">
    <!-- THEME TYPO -->
    <link href="css/themetypo.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- COLOR FILE -->
    <link href="css/color.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- BX SLIDER -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">

    <link href="css/bootstrap-slider.css" rel="stylesheet">

    <link href="css/widget.css" rel="stylesheet">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Component -->
    <link href="js/dl-menu/component.css" rel="stylesheet">

    <link href="css/shortcode.css" rel="stylesheet">

    <link rel="stylesheet" href="js/toast/jquery.toast.css">

    <!-- Favicon -->
    <link rel="icon" href="images/logo/favicon.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- <script src="https://www.google.com/recaptcha/api.js?render=<?php /*echo SITE_KEY*/?>"></script>-->
</head>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="text-center">Sign Out Prompt</h4>
        <h6 class="text-center m-0">Are You Sure You Want To Sign Out?</h6>
    </div>
    <div class="modal-footer">
        <a href="logout">
            <button type="button" class="btn btn-primary">Yes</button>
        </a>
        <button class="btn modal-close">No</button>
    </div>
</div>