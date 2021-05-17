<?php 
session_start();
require_once('apis.php');
require_once('commonimplementation.php');
$apisob = new GSMAApiCalls();
$token = $apisob->getToken();
$comimpob  = new CommonImplementation();


if (isset($_POST['continue'])) {

  $_SESSION['receiver_firstname'] = $comimpob->secureData($_POST['firstName']);
  $_SESSION['receiver_middlename']= $comimpob->secureData($_POST['middleName']);
  $_SESSION['receiver_lastname']= $comimpob->secureData($_POST['lastName']);
  $_SESSION['receiver_email']= $comimpob->secureData($_POST['email_address']);
  $_SESSION['receiver_mobile_number']= $comimpob->secureData($_POST['mobileNumber']);
  $_SESSION['recipient_msisdn']= $comimpob->secureData($_POST['recipient_msisdn']);
  $_SESSION['sending_reason']= $comimpob->secureData($_POST['reason_for_sending']);
 

  //CALL THE REQUEST TRANSFER API CALL 
  $responseob = $apisob->requestTransfer($token,$_SESSION['sender_msisdn'],$_SESSION['sender_firstname'],$_SESSION['sender_middlename'],$_SESSION['sender_lastname'],$_SESSION['sender_currency_country'],$_SESSION['sender_occupation'],$_SESSION['sender_email'],$_SESSION['sender_mobilenumber'],$_SESSION['sender_postalcode'],$_SESSION['recipient_msisdn'],$_SESSION['sender_currency']);

  //  CHECK IF THE TRANSFER IS POSSIBLE
  if (isset($responseob->error)) {
      
     echo "<script type='text/javascript'>alert('Sorry there was an error processing your request'); </script>";
      
   }

   else{

    // echo "<script type='text/javascript'>alert('Thank you! Your Transfer Request is being processed'); </script>";
    $_SESSION['quotation_object'] = $responseob;
    header('Location:quotations.php');


   }


  
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
      <h2 class="text-6 font-weight-400 text-center mt-3">Input receiver details</h2> 
    
    
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-3">Recipient Details</h3>
            <!-- Send Money Form
            ============================================= -->
                <form id="form-send-money"  method="post" action="recipient_KYC.php">
                 
                <div class="form-group">
               <input type="text" name="firstName"  class="form-control" id="firtName" required placeholder="First Name" value="" >
                </div>
                 <div class="form-group">
               <input type="text" name="middleName"  class="form-control" id="middleName"  placeholder="middle Name(Optional)" value="" >
                </div>
                 <div class="form-group">
               <input type="text" name="lastName"  class="form-control" id="lastName" required placeholder="Last Name" value="" >
                </div>
                  <div class="form-group">
               <input type="text" name="email_address"  class="form-control" id="email_address" required placeholder="Email Address" value="" >
                </div> 
                  
                  

                <div class="form-group">
               <input type="text" name="mobileNumber"  class="form-control" id="mobileNumber" required placeholder="Mobile Number" value="">
                </div> 
                
                 <div class="form-group">
               <input type="text" name="city"  class="form-control" id="city" required placeholder="City/Town" value="">
                </div>
                 
              
                
                 <div class="form-group">
               <input type="text" name="recipient_msisdn"  class="form-control" id="recipientmsisdn" required placeholder="Account MSISDN" value="">
                </div> 
                
                <div class="form-group">
               <input type="text" name="reason_for_sending"  class="form-control" id="reason_for_sending" required placeholder="Reason for sending" value=""  >
                </div> 
              
              <input class="btn btn-primary btn-block" type="submit" name="continue" value=" Send Money" >
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
<script src="https://a; jax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="intphone/script.js"></script>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>