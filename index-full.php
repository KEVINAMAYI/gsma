<?php

session_start();


require_once('commonimplementation.php');
$comimpob  = new CommonImplementation();


if (isset($_POST['submit'])) {
	

	 $_SESSION['sender_currency'] = $comimpob->secureData($_POST['senderCurrencyValue']);
	 $_SESSION['receiver_currency'] = $comimpob->secureData($_POST['recipientCurrencyValue']);
   $_SESSION['sender_currency_country'] = $comimpob->secureData($_POST['senderCountry']);
   $_SESSION['receiver_currency_country'] = $comimpob->secureData($_POST['recipientCountry']);
   header('Location:kuti-send-mobile-money.php');
   


}


?><!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon2.png" rel="icon" />
<title>MoCardTransfert Inc. - Remittances/Healthcare Payment Solution/USSD Mobile Money Solution</title>
<meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />


</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header" class="bg-transparent header-text-dark">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="index.html" title="kudi - Digital Wallet"><img src="images/logo4.png" ALT="my logo" WIDTH=40 HEIGHT=50></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li><a href="about-us.php">About</a></li>
                <li><a href="maintenance.php">Fees</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contact-us.php">Contact</a></li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Services</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="dropdown-mega-content">
                        <div class="row">
                          <div class="col-lg-3"> <span class="sub-title">Homepage</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="index-full.php">Back to Homepage</a></li>
                              <li><a class="dropdown-item" href="kuti-send-mobile-money.php">Send</a></li>
                              <li><a class="dropdown-item" href="maintenance.php"></a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Account</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
                              <li><a class="dropdown-item" href="maintenance.php">Payment method</a></li>
                              <li><a class="dropdown-item" href="transactions.php">Transactions</a></li>
                              <li><a class="dropdown-item" href="maintenance.php"></a></li>
                     
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                                </ul>
                              </li>
                             <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Register</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="signup.php">Register</a></li>
                                  <li><a class="dropdown-item" href="reset-in-menu.php">Reset password</a></li>
                                </ul>
                              </li>
                                    
                                    <li><a class="dropdown-item" href="logout.php?action=true">Logout</a></li>
                                  </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Dashboard</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="#">Dashboard</a></li>
                              <li><a class="dropdown-item" href="#"></a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                  <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Others</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="about-us.php">About Us</a></li>
                              <li><a class="dropdown-item" href="maintenance.php">Fees</a></li>
                              <li><a class="dropdown-item" href="help.php">Help</a></li>
                              <li><a class="dropdown-item" href="contact-us.php">Contact Us</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li><a href="login.php">Login</a></li>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block" href="signup.php">Register</a></li>
            </ul>
          </nav>
                        
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content">
      
      
    <!-- Send/Request Money
    ============================================= -->
    <section class="hero-wrap section shadow-md pb-4">
      <div class="hero-mask opacity-8 bg-light"></div>
      <div class="hero-bg" style="background-image:url('images/bg/post_3.jpg');"></div>
      <div class="hero-content py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
            <h2 class="text-7 font-weight-400 text-black mb-4"><br class="d-none d-xl-block">
               <br class="d-none d-xl-block">
              <!-- 900 million users worldwide <br> - No cash pick up, save time <br> - Remit funds to mobile money account</h2>
            <p class="text-3 text-black mb-4"><strong>Africa:</strong> 400 million mobile money subscribers / <strong>Rest of the world:</strong> 500 million mobile money subscribers.</p>
            <p class="text-2 text-black mb-4">company incorporated under the federal law of Canada and registered at the Financial Transactions and Reports Analysis Centre of Canada - CORPORATION NUMBER : 137945-3 / FINTRAC REGISTRATION NUMBER : M19478463. --></p>
            <a href="about-us.php" class="btn-link text-4">Learn more<i class="fas fa-chevron-right text-2 ml-2"></i></a> </div>
          <div class="col-lg-6 col-xl-5 my-auto">
            <ul class="nav nav-tabs nav-justified bg-white style-5 rounded-top" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="send-money-tab" data-toggle="tab" href="#send-money" role="tab" aria-controls="send-money" aria-selected="true">Check currency exchange rate and proceed</a> </li>
            </ul>
            <div class="tab-content p-4 bg-white rounded-bottom" id="myTabContent">
              <div class="tab-pane fade show active" id="send-money" role="tabpanel" aria-labelledby="send-money-tab">
                <form id="form-send-money" method="post" action="index-full.php">
                   <div class="form-group">
                <label for="youSend">Sender Currency</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text"></span> </div>
                  <input type="text" class="form-control" data-bv-field="youSend" id="youSend" name="senderCurrencyValue" oninput = "calculate_currency_value()" value="" placeholder="0.00" required>
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="youSendCurrency" name="senderCountry" onchange="calculate_currency_value()" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" selected="selected" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="GBP">GBP</option>
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="USD">USD</option>
                      <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="AED">AED</option>
                      <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="ARS">ARS</option>
                      <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="AUD">AUD</option>
                      <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="BDT">BDT</option>
                      <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="BGN">BGN</option>
                      <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="BRL">BRL</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="CHF">CHF</option>
                      <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="CLP">CLP</option>
                      <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="CNY">CNY</option>
                      <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="CZK">CZK</option>
                      <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="DKK">DKK</option>
                      <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="EGP">EGP</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="EUR">EUR</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="GBP">GBP</option>
                      <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="GEL">GEL</option>
                      <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="GHS">GHS</option>
                      <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="HKD">HKD</option>
                      <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="HRK">HRK</option>
                      <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="HUF">HUF</option>
                      <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="IDR">IDR</option>
                      <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="ILS">ILS</option>
                      <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="INR">INR</option>
                      <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="JPY">JPY</option>
                      <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="KES">KES</option>
                      <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="KRW">KRW</option>
                      <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="LKR">LKR</option>
                      <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="MAD">MAD</option>
                      <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="MXN">MXN</option>
                      <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="MYR">MYR</option>
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="NGN">NGN</option>
                      <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="NOK">NOK</option>
                      <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="NPR">NPR</option>
                      <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="NZD">NZD</option>
                      <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="PEN">PEN</option>
                      <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="PHP">PHP</option>
                      <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="PKR">PKR</option>
                      <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="PLN">PLN</option>
                      <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="RON">RON</option>
                      <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="RUB">RUB</option>
                      <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="SEK">SEK</option>
                      <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="SGD">SGD</option>
                      <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="THB">THB</option>
                      <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="TRY">TRY</option>
                      <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="UAH">UAH</option>
                      <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="UGX">UGX</option>
                      <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="VND">VND</option>
                      <option data-icon="currency-flag currency-flag-xof mr-1" data-subtext="BCEAO Franc CFA" value="XOF">XOF</option>
                      <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="ZAR">ZAR</option>
                    </select>
                    </span> </div>
                </div>
              </div>
              <div class="form-group">
                <label for="recipientGets">Recipient Currency</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text"></span> </div>
                  <input type="text" class="form-control" data-bv-field="recipientGets" id="recipientGets" name="recipientCurrencyValue" value="" placeholder="0.00" required>
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="recipientCurrency" name="recipientCountry" onchange="calculate_currency_value()" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Popular Currency">
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="USD">USD</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="AED">AED</option>
                      <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="ARS">ARS</option>
                      <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="AUD">AUD</option>
                      <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="BDT">BDT</option>
                      <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="BGN">BGN</option>
                      <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="BRL">BRL</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="CHF">CHF</option>
                      <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="CLP">CLP</option>
                      <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="CNY">CNY</option>
                      <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="CZK">CZK</option>
                      <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="DKK">DKK</option>
                      <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="EGP">EGP</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="EUR">EUR</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="GBP">GBP</option>
                      <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="GEL">GEL</option>
                      <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="GHS">GHS</option>
                      <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="HKD">HKD</option>
                      <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="HRK">HRK</option>
                      <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="HUF">HUF</option>
                      <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="IDR">IDR</option>
                      <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="ILS">ILS</option>
                      <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="INR">INR</option>
                      <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="JPY">JPY</option>
                      <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="KES">KES</option>
                      <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="KRW">KRW</option>
                      <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="LKR">LKR</option>
                      <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="MAD">MAD</option>
                      <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="MXN">MXN</option>
                      <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="MYR">MYR</option>
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="NGN">NGN</option>
                      <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="NOK">NOK</option>
                      <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="NPR">NPR</option>
                      <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="NZD">NZD</option>
                      <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="PEN">PEN</option>
                      <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="PHP">PHP</option>
                      <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="PKR">PKR</option>
                      <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="PLN">PLN</option>
                      <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="RON">RON</option>
                      <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="RUB">RUB</option>
                      <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="SEK">SEK</option>
                      <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="SGD">SGD</option>
                      <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="THB">THB</option>
                      <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="TRY">TRY</option>
                      <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="UAH">UAH</option>
                      <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="UGX">UGX</option>
                      <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="VND">VND</option>
                      <option data-icon="currency-flag currency-flag-xof mr-1" data-subtext="BCEAO Franc CFA" value="XOF">XOF</option>
                      <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="ZAR">ZAR</option>
                    </select>

                    <div id = "err"></div>

                    <div id = "data_loading"></div>
                    
                    </span> </div>
                </div>
              </div>
              <p class="text-2 text-center"><span class="font-weight-500"></span></p>
              <hr>
              <p class="mb-1 exchange-rate-text">Exchange rate<span class="text-2 float-right exchange-rate"></span></p>
              <p class="font-weight-500"><span class="text-3 float-right"></span></p>
              <a></a><input class="btn btn-primary btn-block" name="submit" type="submit" value="Send Money">
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Send/Request Money End -->

    
    <!-- Why choose us
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">Difference maker</h2>
        <p class="text-4 text-center font-weight-300 mb-5">4 reasons to use kudi to remit funds.</p>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="row">
              <div class="col-sm-6 mb-4">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-money-bill"></i> </div>
                  <h3 class="font-weight-400">Fit the underbanked</h3>
                  <p>Remit funds on mobile money and effordable payment solution for health insurance.</p>
                </div>
              </div>
              <div class="col-sm-6 mb-4">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-shipping-fast"></i> </div>
                  <h3 class="font-weight-400">Faster Service.</h3>
                  <p>Within 10 second, your recipient will have notification on his mobile account.</p>
                </div>
              </div>
              <div class="col-sm-6 mb-4 mb-sm-0">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-file-invoice-dollar"></i> </div>
                  <h3 class="font-weight-400">Lower Fees</h3>
                  <p>Our pricing is a unique low cost scheme and is design to fit underbanked population around the world.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-shield-alt"></i> </div>
                  <h3 class="font-weight-400">100% secure</h3>
                  <p>Our service is 100% secure. It will allow you to process transactions with confidence.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why choose us End --> 
    
    <!-- How it works
    ============================================= -->
    <section class="section">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">Easy to use kudi</h2>
        <p class="text-4 text-center font-weight-300 mb-5">Service and product designed to be easy, fast and secure to use.</p>
        <div class="row">
          <div class="col-sm-4 mb-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">1</span></div>
              <h3 class="mb-3">Sign Up to create a new account</h3>
              <p class="text-3 font-weight-300">Sign up in a minute to be able to remit funds in total confidentiality and security.</p>
            </div>
          </div>
          <div class="col-sm-4 mb-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">2</span></div>
              <h3 class="mb-3">You are good to go</h3>
              <p class="text-3 font-weight-300">you can now go ahead and enjoy this experience with the best exchange rates and prices.</p>
            </div>
          </div>
          <div class="col-sm-4 mb-4 mb-sm-0">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">3</span></div>
              <h3 class="mb-3">Payment solution</h3>
              <p class="text-3 font-weight-300">A payment solution for Health insurance with trusted partners.</p>
            </div>
          </div>
        </div>
        <div class="text-center mt-2"><a href="signup.php" class="btn btn-primary">Create Account</a></div>
      </div>
    </section>
    <!-- How it works End -->
    
    <!-- What can you do
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">Our solutions</h2>
        <p class="text-4 text-center font-weight-300 mb-5">We have now 1Billion mobile money users worldwide. 104 million mobile money accounts in West Africa were registered in 2017; Orange, MTN and Airtel as leaders with 70 millions users combined. More than 60% of adults in this part of the continent use a USSD mobile banking account.</p>
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="kuti-send-mobile-money.php">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-share-square"></i> </div>
              <h3>Send Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="maintenance.html">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-check-square"></i> </div>
              <h3>Receive Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="maintenance.html">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-user-friends"></i> </div>
              <h3>Pay medical bill for loved ones</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="maintenance.html">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-ambulance"></i> </div>
              <h3>Subscribe for healthcare</h3>
            </div>
            </a> </div>
        </div>
        <div class="text-center mt-4"><a href="maintenance.php" class="btn-link text-4">See more services<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
      </div>
    </section>
    <!-- What can you do End -->
    
    <!-- Testimonial
    ============================================= -->
    <section class="hero-wrap section shadow-md">
      <div class="hero-mask opacity-3 bg-dark"></div>
      <div class="hero-bg hero-bg-scrll" style="background-image:url('images/bg/filles surprises.jpg');"></div>
      <div class="hero-content py-0 py-lg-5 my-0 my-lg-5">
        <div class="container text-center">
          <h2 class="text-9 text-white font-weight-400 text-uppercase mb-5">We are ready for one of the biggest challenge of underbanked population</h2>
          <a class="video-btn d-flex" href="#" data-src="https://www.youtube.com" data-toggle="modal" data-target="#videoModal"> <span class="btn-video-play bg-white shadow-md rounded-circle m-auto"><i class="fas fa-play" ></i></span> </a> </div>
      </div>
    </section>
    <!-- Testimonial end -->
    
    <!-- Mobile App
    ============================================= -->
    <section class="section pt-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-9 col-xl-8 mx-auto">
            <div class="row">
              <div class="col-sm-5 col-md-5 text-center align-bottom order-1 order-sm-0"> <img class="img-fluid" alt="" src="images/app-mobile 4.png"> </div>
              <div class="col-sm-7 col-md-7 my-auto order-0 order-sm-1 text-center text-sm-left">
                <h2 class="text-8 font-weight-400 text-uppercase mb-3">Our app will be available soon; your data security is very important to us</h2>
                <p class="text-4">Our App will be available on both IOS and Android versions. You will be invited to download for faster and easier service.</p>
                <div class="pt-2 mb-4 mb-sm-0"> <a class="mr-3" href=""><img class="img-fluid" alt="" src="images/app-store.png"></a><a href=""><img class="img-fluid" alt="" src="images/google-play-store.png"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Mobile App end --> 
  </div>
  <!-- Content end --> 
  
 <!-- Footer
  ============================================= -->
  <footer id="footer" class="pb-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Information</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Services</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">Transfer Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Send Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Receive Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">HealthInsurance</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Help Center</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Follow us</h4>
        <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">facebook</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">twitter</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">instagram</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">youtube</a></li>
          </ul>
        </div>
         
         <div class="col-12 col-lg-3">
            <a href="https://whc.ca/green-powered/?aff=3153&gbid=8en" onclick="window.open(this.href, 'popupWindow', 'width=450, height=538, status=no, scrollbars=no, menubar=no'); return false;"><img src="https://s.whc.ca/badges/green-badge-8.svg" width="120" alt="Green Hosting Badge" /></a>
            <br><br><br>
            <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Subscribe</h4>
            <p>Subscribe to receive latest update.</p>
            <form action="subscribe_newsletter.php" method="post" name="nl_subscribe_form" id="nl_subscribe_form" enctype="multipart/form-data" novalidate="novalidate">
                <div class="input-group newsletter">
                    
                    <input type="email" class="form-control" placeholder="Your Email Address" name="newsletterEmail" id="newsletterEmail"  required>
                    <span class="input-group-append">
                    <button class="btn btn-secondary" type="submit" id="submitNLForm" name="submitNLForm" data-toggle="tooltip" data-original-title="Subscribe"><i class="fas fa-paper-plane"></i></button>
                    </span> 
                    
                </div>
            </form>
            </div>
      </div>
      </div>
      <div class="footer-copyright pt-4 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2019 <a href="#">kudi</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
              <li class="nav-item"> <a class="nav-link" href="terms-and-conditions.php">Terms</a></li>
              <li class="nav-item"> <a class="nav-link" href="privacy.php">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Script -->

<script type="text/javascript">
     $(document).ready(function() {
        
        function addOverlay() {
            $(".loader").show();
        }
    
        function removeOverlay() {
            $(".loader").fadeOut(2000);
        }
         
        $(document).on('click', '#submitNLForm', function(e) { 
            e.preventDefault();
             $("#nl_subscribe_form").ajaxForm({
                beforeSend: function() {
                    addOverlay();
                },
                uploadProgress: function(event, position, total, percentComplete) {

                },
                success: function(html, statusText, xhr, $form) {
                    obj = $.parseJSON(html);
                    if (obj.status) {
                        $("#nl_subscribe_form")[0].reset();
                        alert(obj.success);
                        return false;
                    } else {
                        alert(obj.error);
                        return false;
                    }
                    return false;
                },
                complete: function(xhr) {
                    removeOverlay();
                    return false;
                }
            }).submit();
        });
    });
</script>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>

<script>
      function loadScript(url, callback){
          var script = document.createElement("script")
          script.type = "text/javascript";
          if (script.readyState){  // For IE
              script.onreadystatechange = function(){
                  if (script.readyState == "loaded" ||
                          script.readyState == "complete"){
                      script.onreadystatechange = null;
                      callback();
                  }
              };
          }else {  // For Other Browsers.
              script.onload = function(){
                  callback();
              };
          }
          script.src = url;
          document.getElementsByTagName("head")[0].appendChild(script);
      }
</script>
<script src="js/fetch_currency-1.js"></script>


</body>
</html>