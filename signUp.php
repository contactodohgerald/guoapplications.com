<?php require_once ("head.php")?>

<style>
    .comment-form label{
        position: relative 3m!important;
        width: 100% !important;
    }
</style>

<?php require_once ("header_2.php")?>
    <!--BANNER START-->

<?php require_once ("loader.php")?>

    <div class="kode-inner-banner">
        <?php   foreach ($response_array->return_data as $responses){?>
            <img src="<?php echo $response_array->image_path.$responses->signUp_page?>" alt="banner">
        <?php } ?>
        <div class="kode-page-heading">
            <h2>Sign Up</h2>
            <!--
            <ol class="breadcrumb">
                <li><a href="./">Home</a></li>
                <li class="active">Sign Up</li>
            </ol>-->
        </div>
    </div>
    <?php require_once ("downloadAppHold.php")?>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!--CONTACT FORM START-->
                    <div class="comment-form">
                        <h5 class="text-uppercase">Sign Up</h5>
                        <div class="">
                            <div class="form-group" >
                                <input  id="referral_id" class="form-control referred_unique_id" type="text" placeholder="Referral Code (Optional)" style="margin-bottom: 8px">
                                <div class="err_referred_unique_id error_displayer"></div>
                            </div>
                            <div class="form-group" >
                                <input  id="firstName" class="form-control first_name" type="text" placeholder="First Name" style="margin-bottom: 8px">
                                <div class="err_first_name error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <input  id="lastName" class="form-control last_name" type="text" placeholder="Last Name" style="margin-bottom: 8px">
                                <div class="err_last_name error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <input  id="email" class="form-control email" type="email" placeholder="Email">
                                <div class="err_email error_displayer"></div>
                            </div>
                            <div class="col-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 form-group" style="padding-left: 0">
                                <select id="countryCode" style="height: 3rem;" class="form-control country">
                                    <option value='+376/Andorra' >+376 (Andorra)</option>
                                    <option value='+971/United Arab Emirates ' >+971 (United Arab Emirates )</option>
                                    <option value='+93/Afghanistan' >+93 Afghanistan</option>
                                    <option value='+1268/Antigua And Barbuda' >+1268 (Antigua And Barbuda)</option>
                                    <option value='+1264/Anguilla' >+1264 (Anguilla)</option>
                                    <option value='+355/Albania' >+355 (Albania)</option>
                                    <option value='+374/Armenia' >+374 (Armenia)</option>
                                    <option value='+599/Netherlands Antilles' >+599 (Netherlands Antilles)</option>
                                    <option value='+244/Angola' >+244 (Angola)</option>
                                    <option value='+672/Antarctica' >+672 (Antarctica)</option>
                                    <option value='+54/Argentina' >+54 (Argentina)</option>
                                    <option value='+1684/American Samoa' >+1684 (American Samoa)</option>
                                    <option value='+43/Austria' >+43 (Austria)</option>
                                    <option value='+61/Australia' >+61 (Australia)</option>
                                    <option value='+297/Aruba' >+297 (Aruba)</option>
                                    <option value='+994/Azerbaijan' >+994 (Azerbaijan)</option>
                                    <option value='+387/Bosnia And Herzegovina' >+387 (Bosnia And Herzegovina)</option>
                                    <option value='+1246/Barbados' >+1246 (Barbados)</option>
                                    <option value='+880/Bangladesh' >+880 (Bangladesh)</option>
                                    <option value='+32/Belgium' >+32 (Belgium)</option>
                                    <option value='+226/Burkina Faso' >+226 (Burkina Faso)</option>
                                    <option value='+359/Bulgaria' >+359 (Bulgaria)</option>
                                    <option value='+973/Bahrain' >+973 (Bahrain)</option>
                                    <option value='+257/Burundi' >+257 (Burundi)</option>
                                    <option value='+229/Benin' >+229 (Benin)</option>
                                    <option value='+590/Saint Barthelemy' >+590 (Saint Barthelemy)</option>
                                    <option value='+1441/Bermuda' >+1441 (Bermuda)</option>
                                    <option value='+673/Brunei Darussalam' >+673 (Brunei Darussalam)</option>
                                    <option value='+591/Bolivia' >+591 (Bolivia)</option>
                                    <option value='+55/Brazil' >+55 (Brazil)</option>
                                    <option value='+1242/Bahamas' >+1242 (Bahamas)</option>
                                    <option value='+975/Bhutan' >+975 (Bhutan)</option>
                                    <option value='+267/Botswana' >+267 (Botswana)</option>
                                    <option value='+375/Belarus' >+375 (Belarus)</option>
                                    <option value='+501/Belize' >+501 (Belize)</option>
                                    <option value='+1/Canada'>+1 (Canada)</option>
                                    <option value='+61/Cocos Islands' >+61 (Cocos Islands)</option>
                                    <option value='+242/Congo' >+242 (Congo)</option>
                                    <option value='+41/Switzerland' >+41 (Switzerland)</option>
                                    <option value='+225/Cote D Ivoire' >+225 (Cote D Ivoire)</option>
                                    <option value='+682/Cook Islands' >+682 (Cook Islands)</option>
                                    <option value='+56/Chile' >+56 (Chile)</option>
                                    <option value='+237/Cameroon' >+237 (Cameroon)</option>
                                    <option value='+86/China' >+86 (China)</option>
                                    <option value='+57/Colombia' >+57 (Colombia)</option>
                                    <option value='+506/Costa Rica' >+506 (Costa Rica)</option>
                                    <option value='+53/Cuba' >+53 (Cuba)</option>
                                    <option value='+238/Cape Verde' >+238 (Cape Verde)</option>
                                    <option value='+61/Christmas Island' >+61 (Christmas Island)</option>
                                    <option value='+357/Cyprus' >+357 (Cyprus)</option>
                                    <option value='+420/Czech Republic ' >+420 (Czech Republic )</option>
                                    <option value='+49/Germany' >+49 (Germany)</option>
                                    <option value='+253/Djibouti' >+253 (Djibouti)</option>
                                    <option value='+45/Denmark' >+45 (Denmark)</option>
                                    <option value='+1767/Dominica' >+1767 (Dominica)</option>
                                    <option value='+1809/Dominican Republic' >+1809 (Dominican Republic)</option>
                                    <option value='+213/Algeria' >+213 (Algeria)</option>
                                    <option value='+593/Ecuador' >+593 (Ecuador)</option>
                                    <option value='+372/Estonia' >+372 (Estonia)</option>
                                    <option value='+20/Egypt' >+20 (Egypt)</option>
                                    <option value='+291/Eritrea' >+291 (Eritrea)</option>
                                    <option value='+34/Spain' >+34 (Spain)</option>
                                    <option value='+251/Ethiopia' >+251 (Ethiopia)</option>
                                    <option value='+358/Finland' >+358 (Finland)</option>
                                    <option value='+679/Fiji' >+679 (Fiji)</option>
                                    <option value='+500/Falkland Islands' >+500 (Falkland Islands)</option>
                                    <option value='+298/Faroe Islands' >+298 (Faroe Islands)</option>
                                    <option value='+33/France' >+33 (France)</option>
                                    <option value='+241/Gabon' >+241 (Gabon)</option>
                                    <option value='+44/United Kingdom' >+44 (United Kingdom)</option>
                                    <option value='+1473/Grenada' >+1473 (Grenada)</option>
                                    <option value='+995/Georgia' >+995 (Georgia)</option>
                                    <option value='+233/Ghana' >+233 (Ghana)</option>
                                    <option value='+350/Gibraltar' >+350 (Gibraltar)</option>
                                    <option value='+299/Greenland' >+299 (Greenland)</option>
                                    <option value='+220/Gambia' >+220 (Gambia)</option>
                                    <option value='+224/Guinea' >+224 (Guinea)</option>
                                    <option value='+240/Equatorial Guinea' >+240 (Equatorial Guinea)</option>
                                    <option value='+30/Greece' >+30 (Greece)</option>
                                    <option value='+502/Guatemala' >+502 (Guatemala)</option>
                                    <option value='+1671/Guam' >+1671 (Guam)</option>
                                    <option value='+245/Guinea-bissau' >+245 (Guinea-bissau)</option>
                                    <option value='+592/Guyana' >+592 (Guyana)</option>
                                    <option value='+852/ Hong Kong' >+852 (Hong Kong)</option>
                                    <option value='+504/Honduras' >+504 (Honduras)</option>
                                    <option value='+385/Croatia' >+385 (Croatia)</option>
                                    <option value='+509/Haiti' >+509 (Haiti)</option>
                                    <option value='+36/Hungary' >+36 (Hungary)</option>
                                    <option value='+62/Indonesia' >+62 (Indonesia)</option>
                                    <option value='+353/Ireland' >+353 (Ireland)</option>
                                    <option value='+972/Israel' >+972 (Israel)</option>
                                    <option value='+44/Isle Of Man' >+44 (Isle Of Man)</option>
                                    <option value='+91/India' >+91 (India)</option>
                                    <option value='+964/Iraq' >+964 (Iraq)</option>
                                    <option value='+98/Iran' >+98 (Iran)</option>
                                    <option value='+354/Iceland' >+354 (Iceland)</option>
                                    <option value='+39/Italy' >+39 (Italy)</option>
                                    <option value='+1876/Jamaica' >+1876 (Jamaica)</option>
                                    <option value='+962/Jordan' >+962 (Jordan)</option>
                                    <option value='+81/Japan' >+81 (Japan)</option>
                                    <option value='+254/Kenya' >+254 (Kenya)</option>
                                    <option value='+996/Kyrgyzstan' >+996 9Kyrgyzstan)</option>
                                    <option value='+855/Cambodia' >+855 (Cambodia)</option>
                                    <option value='+686/Kiribati' >+686 (Kiribati)</option>
                                    <option value='+269/Comoros' >+269 (Comoros)</option>
                                    <option value='+1869/Saint Kitts And Nevis' >+1869 (Saint Kitts And Nevis)</option>
                                    <option value='+850/South Korea' >+850 (South Korea)</option>
                                    <option value='+82/North Korea' >+82 (North Korea)</option>
                                    <option value='+965/Kuwait' >+965 (Kuwait)</option>
                                    <option value='+1345/Cayman Islands' >+1345 (Cayman Islands)</option>
                                    <option value='+7/Kazakstan' >+7 (Kazakstan)</option>
                                    <option value='+856/Lao Peoples Democratic Republic' >+856 (Lao Peoples Democratic Republic)</option>
                                    <option value='+961/Lebanon' >+961 (Lebanon)</option>
                                    <option value='+1758/Saint Lucia' >+1758 (Saint Lucia)</option>
                                    <option value='+423/Liechtenstein' >+423 (Liechtenstein)</option>
                                    <option value='+94/Sri Lanka' >+94 (Sri Lanka)</option>
                                    <option value='+231/Liberia' >+231 (Liberia)</option>
                                    <option value='+266/Lesotho' >+266 (Lesotho)</option>
                                    <option value='+370/Lithuania' >+370 (Lithuania)</option>
                                    <option value='+352/Luxembourg' >+352 (Luxembourg)</option>
                                    <option value='+371/Latvia' >+371 (Latvia)</option>
                                    <option value='+218/Libyan Arab Jamahiriya' >+218 (Libyan Arab Jamahiriya)</option>
                                    <option value='+212/Morocco' >+212 (Morocco)</option>
                                    <option value='+377/Monaco' >+377 (Monaco)</option>
                                    <option value='+373/Moldova' >+373 (Moldova)</option>
                                    <option value='+382/Montenegro' >+382 (Montenegro)</option>
                                    <option value='+1599/Saint Martin' >+1599 (Saint Martin)</option>
                                    <option value='+261/Madagascar' >+261 (Madagascar)</option>
                                    <option value='+692/Marshall Islands' >+692 ( Marshall Islands)</option>
                                    <option value='+389/Macedonia' >+389 (Macedonia)</option>
                                    <option value='+223/Mali' >+223 (Mali)</option>
                                    <option value='+95/Myanmar' >+95 (Myanmar)</option>
                                    <option value='+976/Mongolia' >+976 (Mongolia)</option>
                                    <option value='+853/Macau' >+853 (Macau)</option>
                                    <option value='+1670/Northern Mariana Islands' >+1670 (Northern Mariana Islands)</option>
                                    <option value='+222/Mauritania' >+222 (Mauritania)</option>
                                    <option value='+1664/Montserrat' >+1664 (Montserrat)</option>
                                    <option value='+356/Malta' >+356 (Malta)</option>
                                    <option value='+230/Mauritius' >+230 (Mauritius)</option>
                                    <option value='+960/Maldives' >+960 (Maldives)</option>
                                    <option value='+265/Malawi' >+265 (Malawi)</option>
                                    <option value='+52/Mexico' >+52 (Mexico)</option>
                                    <option value='+60/Malaysia' >+60 (Malaysia)</option>
                                    <option value='+258/Mozambique' >+258 (Mozambique)</option>
                                    <option value='+264/Namibia' >+264 (Namibia)</option>
                                    <option value='+687/New Caledonia' >+687 (New Caledonia)</option>
                                    <option value='+227/Niger' >+227 (Niger)</option>
                                    <option value='+234/Nigeria' selected>+234 (Nigeria)</option>
                                    <option value='+505/Nicaragua' >+505 (Nicaragua)</option>
                                    <option value='+31/Netherlands' >+31 (Netherlands)</option>
                                    <option value='+47/Norway' >+47 (Norway)</option>
                                    <option value='+977/Nepal' >+977 (Nepal)</option>
                                    <option value='+674/Nauru' >+674 (Nauru)</option>
                                    <option value='+683/Niue' >+683 (Niue)</option>
                                    <option value='+64/New Zealand' >+64 (New Zealand)</option>
                                    <option value='+968/Oman' >+968 (Oman)</option>
                                    <option value='+507/Panama' >+507 (Panama)</option>
                                    <option value='+51/Peru' >+51 (Peru)</option>
                                    <option value='+689/French Polynesia' >+689 (French Polynesia)</option>
                                    <option value='+675/Papua New Guinea' >+675 (Papua New Guinea)</option>
                                    <option value='+63/Philippines' >+63 (Philippines)</option>
                                    <option value='+92/Pakistan' >+92 (Pakistan)</option>
                                    <option value='+48/Poland' >+48 (Poland)</option>
                                    <option value='+508/Saint Pierre And Miquelon' >+508 (Saint Pierre And Miquelon)</option>
                                    <option value='+870/Pitcairn' >+870 (Pitcairn)</option>
                                    <option value='+1/Puerto Rico' >+1 (Puerto Rico)</option>
                                    <option value='+351/Portugal' >+351 (Portugal)</option>
                                    <option value='+680/Palau' >+680 (Palau)</option>
                                    <option value='+595/Paraguay' >+595 (Paraguay)</option>
                                    <option value='+974/Qatar' >+974 (Qatar)</option>
                                    <option value='+40/Romania' >+40 (Romania)</option>
                                    <option value='+381/Serbia' >+381 (Serbia)</option>
                                    <option value='+7/Russian Federation' >+7 (Russian Federation)</option>
                                    <option value='+250/Rwanda' >+250 (Rwanda)</option>
                                    <option value='+966/Saudi Arabia' >+966 (Saudi Arabia)</option>
                                    <option value='+677/Solomon Islands' >+677 (Solomon Islands)</option>
                                    <option value='+248/Seychelles' >+248 (Seychelles)</option>
                                    <option value='+249/Sudan' >+249 (Sudan)</option>
                                    <option value='+46/Sweden' >+46 (Sweden)</option>
                                    <option value='+65/Singapore' >+65 (Singapore)</option>
                                    <option value='+290/Saint Helena' >+290 (Saint Helena)</option>
                                    <option value='+386/Slovenia' >+386 (Slovenia)</option>
                                    <option value='+421/Slovakia' >+421 (Slovakia)</option>
                                    <option value='+232/Sierra Leone' >+232 (Sierra Leone)</option>
                                    <option value='+378/San Marino' >+378 (San Marino)</option>
                                    <option value='+221/Senegal' >+221 (Senegal)</option>
                                    <option value='+252/Somalia' >+252 (Somalia)</option>
                                    <option value='+597/Suriname' >+597 (Suriname)</option>
                                    <option value='+239/Sao Tome And Principe' >+239 (Sao Tome And Principe)</option>
                                    <option value='+503/El Salvador' >+503 (El Salvador)</option>
                                    <option value='+963/Syrian Arab Republic' >+963 (Syrian Arab Republic)</option>
                                    <option value='+268/Swaziland' >+268 (Swaziland)</option>
                                    <option value='+1649/Turks And Caicos Islands' >+1649 (Turks And Caicos Islands)</option>
                                    <option value='+235/Chad' >+235 (Chad)</option>
                                    <option value='+228/Togo' >+228 (Togo)</option>
                                    <option value='+66/Thailand' >+66 (Thailand)</option>
                                    <option value='+992/Tajikistan' >+992 (Tajikistan)</option>
                                    <option value='+690/Tokelau' >+690 (Tokelau)</option>
                                    <option value='+670/Timor-leste' >+670 (Timor-leste)</option>
                                    <option value='+993/Turkmenistan' >+993 (Turkmenistan)</option>
                                    <option value='+216/Tunisia' >+216 (Tunisia)</option>
                                    <option value='+676/Tonga' >+676 (Tonga)</option>
                                    <option value='+90/Turkey' >+90 (Turkey)</option>
                                    <option value='+1868/Trinidad And Tobago' >+1868 (Trinidad And Tobago)</option>
                                    <option value='+688/Tuvalu' >+688 (Tuvalu)</option>
                                    <option value='+886/Taiwan' >+886 (Taiwan)</option>
                                    <option value='+255/Tanzania' >+255 (Tanzania)</option>
                                    <option value='+380/Ukraine' >+380 (Ukraine)</option>
                                    <option value='+256/Uganda' >+256 (Uganda)</option>
                                    <option value='+1/United States' >+1 (United States)</option>
                                    <option value='+598/Uruguay' >+598 (Uruguay)</option>
                                    <option value='+998/Uzbekistan' >+998 (Uzbekistan)</option>
                                    <option value='+39/Vatican City State' >+39 (Vatican City State)</option>
                                    <option value='+1784/Saint Vincent And The Grenadines' >+1784 (Saint Vincent And The Grenadines)</option>
                                    <option value='+58/Venezuela' >+58 (Venezuela)</option>
                                    <option value='+1284/Virgin Islands, British' >+1284 (Virgin Islands, British)</option>
                                    <option value='+1340/Virgin Islands, U.s.' >+1340 (Virgin Islands, U.s.)</option>
                                    <option value='+84/Viet Nam' >+84 (Viet Nam)</option>
                                    <option value='+678/Vanuatu' >+678 (Vanuatu)</option>
                                    <option value='+681/Wallis And Futuna' >+681 (Wallis And Futuna)</option>
                                    <option value='+685/Samoa' >+685 (Samoa)</option>
                                    <option value='+381/Kosovo' >+381 (Kosovo)</option>
                                    <option value='+967/Yemen' >+967 (Yemen)</option>
                                    <option value='+262/Mayotte' >+262 (Mayotte)</option>
                                    <option value='+27/South Africa' >+27 (South Africa)</option>
                                    <option value='+260/Zambia' >+260 (Zambia)</option>
                                    <option value='+263/Zimbabwe' >+263 (Zimbabwe)</option>
                                </select>
                                <div class="country" hidden></div>
                            </div>
                            <div class=" col-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 form-group" style="padding-right: 0">
                                <input type="tel" class="form-control phone" id="phone" placeholder="Phone Number">
                                <div class="err_phone error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <input id="password" class="form-control password" type="password" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon Password" onclick="NeededModules.togglePassword('password', 'Password')"></span>
                                <div class="err_password error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" class="form-control password_confirmation" type="password" placeholder="Confirm Password">
                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon CPassword" onclick="NeededModules.togglePassword('password-confirm', 'CPassword')"></span>
                                <div class="err_password_confirmation error_displayer"></div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="filled-in" checked="checked" />
                                    <span>Sign up to get updated with the latest promos, features, textbooks, exam materials and fun books</span>
                                </label>
                            </div>
                            <div id='recaptcha' class="g-recaptcha"
                                 data-sitekey="6LfdENAZAAAAADQN3Dm-EoQse6pxSJ0Jo45JrsDR"
                                 data-callback="onSubmit"
                                 data-size="invisible">
                            </div>

                            <div class="form-group">
                                <button class="guoBtn" id="guoBtn" type="submit" onclick="onLoad()">Sign Up</button>
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
<?php require_once ("footer.php")?>
    </div>
    <!--WRAPPER END-->
<?php require_once ("e_script.php")?>
<!--<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php /*echo SITE_KEY;*/?>', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
            });
        });
    }
</script>-->
