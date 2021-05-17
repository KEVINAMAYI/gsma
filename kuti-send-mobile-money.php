<?php

session_start();

require_once('commonimplementation.php');
$comimpob  = new CommonImplementation();


if (isset($_POST['submit'])) {
 
   $_SESSION['mobile_wallet'] = $comimpob->secureData($_POST['destination_wallet']);
   header('Location:recipient_KYC.php');

  
}


?>

<!DOCTYPE html>
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
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+sans:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "function disabled";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>

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

  <!-- Header End --> 
 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <h2 class="text-6 font-weight-400 text-center mt-3">Select Mobile Money Wallet</h2>
      <p class="text-4 text-center mb-4">Fast, Secure and Easy</p>
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-3">Sending Details</h3>
            <!-- Send Money Form
            ============================================= -->
              <form id="form-send-money" action="kuti-send-mobile-money.php" method="post" >
                
                <input type="hidden" name="total_pay_hid" id="total_pay_hid" value="">
                <div class="form-group">
                
                <label for="youSend">Sender Currency</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text"></span> </div>
                  <input type="text" class="form-control" data-bv-field="youSend" id="youSend" name="youSend" oninput = "calculate_currency_value()" value="<?php echo $_SESSION['sender_currency']; ?>" placeholder="">
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="youSendCurrency" name="youSendCurrency" onchange="calculate_currency_value()" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" selected="selected" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="GBP">GBP</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="CAD">CAD</option>
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="USD">USD</option>
                      <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="AED">AED</option>
                      <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="ARS">ARS</option>
                      <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="AUD">AUD</option>
                      <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="BDT">BDT</option>
                      <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="BGN">BGN</option>
                      <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="BRL">BRL</option>
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
                  <input type="text" class="form-control" data-bv-field="recipientGets" id="recipientGets" name="recipientGets" value="<?php echo $_SESSION['receiver_currency']; ?>" placeholder="">
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="recipientCurrency" name="recipientCurrency" onchange="calculate_currency_value()" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                       <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="USD">USD</option>
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="USD">USD</option>
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
               <div class="form-group">
     <label  for="Destination Wallet">Destination Wallet</label><span style="color: red !important; display: inline; float: none">*</span>   
     <select id="destination_wallet" name="destination_wallet" class="form-control">
     <option value="">Select Mobile Wallet</option>
     <option value="airtelmoney">Dialog Axiata</option>
     <option value="orangemoney">Orange</option>
     <option value="momomtn">MTN</option>
     <option value="mobicash">Mobicash</option>
     <option value="mpesa">M-pesa</option>
     <option value="opay">Teleanor</option>
     <option value="tigo">Tigo</option>
     <option value="vodaphone">Vodaphone</option>
     </select>
    </div>
              
              <p class="text-2 text-center"><span class="font-weight-500"></span></p>
              <hr>
              <p class="mb-1">Fee<span class="text-2 float-right sender-fee">0.00</span></p>
              <p class="font-weight-500">Total To Pay<span class="text-2 float-right total-pay"></span></p>
              <input class="btn btn-primary btn-block" name="submit" type="submit" value="Continue">
              <button class="btn btn-primary btn-block" onclick="location.href='index-full.php'" type="button">Cancel</button>
            </form>
            <!-- Send Money Form end --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
   
  <!-- Footer end --> 
  
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
      
      var senderCurrencyCountry = '<?php echo $senderCurrencyCountry; ?>'
      $("#youSendCurrency > option").each(function() {
          
          if(this.value == senderCurrencyCountry) {
              $(this).attr("selected", "selected");
          }
         //alert(this.text + ' ' + this.value);
    });
    
    var recipientCurrencyCountry = '<?php echo $recipientCurrencyCountry; ?>'
      $("#recipientCurrency > option").each(function() {
          
          if(this.value == recipientCurrencyCountry) {
              $(this).attr("selected", "selected");
          }
         //alert(this.text + ' ' + this.value);
    });
    
    var sender_fee = '<?php echo $sender_fee; ?>';
    
    $("#youSend").keyup(function(){
        
        total_pay_amount = parseFloat($(this).val()) + parseFloat(($(this).val() * (sender_fee / 100)));
        sender_fee_amount = parseFloat(($(this).val() * (sender_fee / 100)));
        
        total_pay_amount = total_pay_amount.toFixed(2);
        sender_fee_amount = sender_fee_amount.toFixed(2);
        
        $(".total-pay").html(total_pay_amount);
        $(".sender-fee").html(sender_fee_amount);
        
        $("#total_pay_hid").val(total_pay_amount);
        
    });
    
    total_pay_amount = parseFloat($("#youSend").val()) + parseFloat(($("#youSend").val() * (sender_fee / 100)));
    sender_fee_amount = parseFloat(($("#youSend").val() * (sender_fee / 100)));
    
    total_pay_amount = total_pay_amount.toFixed(2);
    sender_fee_amount = sender_fee_amount.toFixed(2);
    
    $(".total-pay").html(total_pay_amount);
    $(".sender-fee").html(sender_fee_amount);
    
    
    $("#total_pay_hid").val(total_pay_amount);
    
    function validateValues() {
        if($("#youSend").val() < 1) {
            alert("Sender currency value is invalid");
            return false;
        }
        
        if($("#recipientGets").val() < 1) {
            alert("Recipient currency value is invalid");
            return false;
        }
        
         if($("#destination_wallet").val() == "") {
            alert("Please select Destination Wallet");
            return false;
        }
        
        
    }
    
      
</script>
<script src="js/fetch_currency-1.js"></script>
</body>
</html>