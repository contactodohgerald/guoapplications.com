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
                            <div class="col-md-12 text-center verifyPaymentTextHold">
                              <!--  <button type="button" class="guoBtn" onClick="buyBook()">Pay Now</button>-->

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
            <div class="col-md-4">
                <div class="widget widget-text">
                    <h2 class="text-center">Contact Us</h2>
                    <p> <?php print  @$siteName?> is here to make learning a breeze by letting you learn at your convenience</p>
                    <?php   foreach ($response_array->return_data as $responses){ ?>
                        <ul>
                            <li>
                                <i class="fa fa-whatsapp" style="color: #f05a23"></i>
                                <p>
                                    <a href="whatsapp://send?phone=<?php echo $responses->whatsAppPhone ?>&text=How Can We Be Of Service?"><?php echo $responses->whatsAppPhone ?></a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone" style="color: #1b1363"></i>
                                <p>
                                    <a href="tel:<?php echo $responses->siteOfficialPhone ?>"><?php echo $responses->siteOfficialPhone ?></a>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" style="color: #2d3092"></i>
                                <p>
                                    <a href="mailto:<?php echo $responses->siteMail ?>"><?php echo $responses->siteMail ?></a>
                                </p>
                            </li>
                        </ul>
                    <?php  }; ?>
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
                            <a href="signIn">Sign In</a>
                        </li>
                        <li>
                            <a href="signUp">Sign Up</a>
                        </li>
                        <li>
                            <a href="termsCondition">Terms & Condition</a>
                        </li>
                        <li>
                            <a href="faq">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-4">
                <div class="widget widget-newletter">
                    <h2 class="text-center">Join Us</h2>
                    <p>Join and Follow <?php print  @$siteName?> Today</p>
                    <div class="contact-info" >
                        <?php   foreach ($response_array->return_data as $responses){ ?>
                            <ul>
                                <li>
                                    <a href="<?php echo $responses->facebookSocialMediaUrl ?>" target="_blank">
                                        <i class="fa fa-facebook border-red"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $responses->twitterSocialMediaUrl ?>" target="_blank">
                                        <i class="fa fa-twitter border-yellow"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $responses->instagramSocialMediaUrl ?>" target="_blank">
                                        <i class="fa fa-instagram border-blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $responses->youtubeUrl ?>" target="_blank">
                                        <i class="fa fa-youtube border-red"></i>
                                    </a>
                                </li>
                            </ul>
                        <?php  }; ?>
                    </div>
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
    <!--WRAPPER END-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php require_once ("e_script.php")?>

<script>

    $(document).ready(function () {
        buyBook()
    });

    async function buyBook() {

        let urlValues = window.location.href.split('=');
        let bookId = urlValues[1].split('&')[0];
        let token = urlValues[2];

        let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/buyBookByUser', {token:token, book_id:bookId});
        let {status, error_statement, return_data} = thePostData;

        if (status === false) {
            NeededModules.removeLoader();
            NeededModules.handleErrorStatement(error_statement);
        }

        if (status === true){
            let {unique_id, user_name, user_email, user_phone, book_price, currency} = return_data;

            makePayment(book_price, currency, user_name, user_email, user_phone, unique_id);
        }
    }
    
    async function   confirmPaymentForBook(transaction_id, amount, tx_ref, flw_ref, currency) {
        let urlValues = window.location.href.split('=');
        let token = urlValues[2];

        let textHold;
       // let validatorDetails = new validatorClass();
        let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/confirmUserPayment', {token:token, transaction_id:transaction_id, amount:amount, tx_ref:tx_ref, flw_ref:flw_ref, currency:currency});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            textHold = `<div class="alert alert-danger"><h4>${error_statement}</h4></div>`;
            $('.verifyPaymentTextHold').html(textHold);
            return ;
        }

        if (status === true){
            communicateToWebView();
            textHold = ` <div class="alert alert-success"><h4>${success_message}</h4></div>`;
            $('.verifyPaymentTextHold').html(textHold);
        }
    }

    function communicateToWebView() {
        var currentHref = window.location.href;
        window.history.pushState(null, null, '/successPage');
        setTimeout(() => window.location.replace(currentHref), 1000);
    }

    function makePayment(amount, currency, name, email, phone, transactionId) {

        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-d80e49238db931f5d22d835a7be2b6bc-X",
            tx_ref: transactionId,
            amount: amount,
            currency: currency,
            payment_options: "card, account, banktransfer, ussd, barter, paga",
           /* redirect_url: // specified redirect URL
                "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",*/
            customer: {
                email: email,
                phone_number: phone,
                name: name,
            },
            callback: function (data) {
                let {amount, transaction_id, tx_ref, flw_ref, currency} = data;
                confirmPaymentForBook(transaction_id, amount, tx_ref, flw_ref, currency);
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
