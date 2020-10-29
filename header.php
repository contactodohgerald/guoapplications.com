<body>
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!--WRAPPER START-->
<div class="wrapper kode-home-page">
    <!--HEADER START-->
    <header>
        <div class="top-strip">
            <div class="container">
               <!-- <div class="site-info">
                    <ul>
                        <li><a href="mailto:Info@bookguide.com"><i class="fa fa-envelope-o"></i>Info@bookguide.com</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a id="search-box" href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>-->
            </div>
        </div>
        <!--Search Overlay Box Starts -->
        <div id="kode_search_box" class="kode_search_box">
            <form class="kode_search_box-form">
                <input class="kode_search_box-input" type="search" placeholder="Search..."/>
                <button class="kode_search_box-submit" type="submit">Search</button>
            </form>
            <span class="kode_search_box-close"></span>
        </div><!-- /kode_search_box -->
        <div class="overlay"></div>
        <div class="logo-container">
            <div class="container">
                <!--LOGO START-->
                <div class="logo">
                    <a href="./">
                        <img src="images/logo/GuoLogo2.png" alt="<?php print  @$siteName?>">
                    </a>
                </div>
                <!--LOGO END-->
                <div class="kode-navigation">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li>
                            <a href="about_us">About Us</a>
                        </li>
                        <li>
                            <a href="contact_us">Contact Us</a>
                        </li>
                       <!-- <li>
                            <a href="faq">FAQ</a>
                        </li>-->
                      <?php  if (isset($_SESSION['api_Token'])){ ?>
                          <li>
                              <a class="modal-trigger" href="#modal1">Sign Out</a>
                          </li>
                          <li class="last">
                              <a href="profile">
                                  <div class="loggedInUserHolder">
                                      <div class="userImages loggedInUser"></div>
                                      <div class="loggedInUserNameHold">
                                          <h6 class="nameHolder"></h6>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      <?php }else{ ?>
                          <li>
                              <a href="signIn">Sign In</a>
                          </li>
                          <li class="last">
                              <a href="signUp" style="color:#f05a23; font-weight: bold; text-transform: uppercase;">Sign Up</a>
                          </li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="about_us">About Us</a>
                        </li>
                        <li>
                            <a href="contact_us">Contact Us</a>
                        </li>
                       <!-- <li>
                            <a href="faq">FAQ</a>
                        </li>-->
                        <?php  if (isset($_SESSION['api_Token'])){ ?>
                            <li>
                                <a class="modal-trigger" href="#modal1">Sign Out</a>
                            </li>
                            <li class="last">
                                <a href="profile">
                                    <div class="loggedInUserHolder">
                                        <div class="userImages loggedInUser"></div>
                                        <div class="loggedInUserNameHold">
                                            <h6 class="nameHolder"></h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php }else{ ?>
                            <li>
                                <a href="signIn">Sign In</a>
                            </li>
                            <li class="last">
                                <a href="signUp" style="color:#f05a23; font-weight: bold; text-transform: uppercase;">Sign Up</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>