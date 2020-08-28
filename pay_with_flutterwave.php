<?php require_once ("head.php")?>

    <!--BANNER START-->
    <div class="kode-inner-banner">
        <div class="kode-page-heading">
            <h2>Pay With Flutter Wave</h2>
            <ol class="breadcrumb">
                <li class="active">Pay With FlutterWave</li>
            </ol>
        </div>
    </div>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <div class="row">
                            <script src="https://checkout.flutterwave.com/v3.js"></script>
                            <div class="col-md-12 text-center">
                                <button type="button" class="guoBtn" onClick="makePayment()">Pay Now</button>
                            </div>
                        </div>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    <!--NEWSLETTER START-->
    <footer>
        <div class="container">
            <div class="row">
                <!--TEXT WIDGET START-->
                <div class="col-md-12">
                    <div class="widget widget-text">
                        <h2 class="text-center">Contact Us</h2>
                        <p> <?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience</p>
                        <ul>
                            <li>
                                <i class="fa fa-whatsapp"></i>
                                <p>
                                    <a href="whatsapp://send?phone=<?php print  @$whatsApp?>&text=How Can We Be Of Service?"><?php print  @$whatsApp?></a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    <a href="tel:<?php print  @$sitePhone?>"><?php print  @$sitePhone?></a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:<?php print  @$siteMail?>"><?php print  @$siteMail?></a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--TEXT WIDGET END-->
            </div>
        </div>
    </footer>
    <div class="copyrights">
        <div class="container">
            <p class="font-13"> © All Rights Reserved <?php $d=date('Y'); print $d;?> - Guo Applications Ltd</p>
        </div>
    </div>
    </div>
    <!--WRAPPER END-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php require_once ("e_script.php")?>

<script>
    function makePayment() {
        let Amount, currency, name, email, phone, transactionId;

        name = 'gerald';
        email = 'uber@gmail.com';
        phone = '+234 8106362992';

        Amount = 100;
        currency = 'NGN';
        transactionId = 'ejdsfgbf';

        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
            tx_ref: transactionId,
            amount: Amount,
            currency: currency,
            payment_options: "card, account, banktransfer, ussd, barter, paga",
            redirect_url: // specified redirect URL
                "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
            customer: {
                email: email,
                phone_number: phone,
                name: name,
            },
            callback: function (data) {
                console.log(data);
            },
            onclose: function() {
                // close modal
            },
            customizations: {
                title: "GỤỌ",
                description: "Payment for items in cart",
                logo: "https://guoapplications.com/images/logo/GuoLogo2.png",
            },
        });
    }
</script>
