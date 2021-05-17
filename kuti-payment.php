
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon2.png" rel="icon" />
<title>Kuti - Make payment</title>
    
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
<link rel="stylesheet" href="style.css">
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>


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
      <h2 class="text-6 font-weight-400 text-center mt-3">Checkout</h2>
        
    
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
               <h3 class="text-5 font-weight-400 mb-3">Sender Details</h3>
                <div class="product" style="border:1px;">
       
                    <div class="description">
                      <h3>username</h3>
                      <h5>Amaount</h5>
                    </div>
                 </div>   
           
                <?php 
                $encoded_id =  base64_encode($_SESSION['recipient_user_id']);
                
                ?>
                <h3 class="text-5 font-weight-400 mb-3 mt-3">Recipient Details <a href="recipient_KYC.php"  class="float-right text-1 text-uppercase text-muted btn-link"><i class="fas fa-edit mr-1"></i>Edit</a></h3>       
                <div class="form-group">
               <input type="text" name="firstName"  class="form-control" id="firtName" required placeholder="First Name" value="" readonly>
                </div>
                 <div class="form-group">
               <input type="text" name="middleName"  class="form-control" id="middleName"  placeholder="middle Name(Optional)" value="" readonly>
                </div>
                 <div class="form-group">
               <input type="text" name="lastName"  class="form-control" id="lastName" required placeholder="Last Name" value="" readonly>
                </div>
                  <div class="form-group">
               <input type="text" name="email_address"  class="form-control" id="email_address" required placeholder="Email Address" value="" readonly>
                </div> 
                  
                  

                <div class="form-group">
               <input type="text" name="mobileNumber"  class="form-control" id="mobileNumber" required placeholder="Mobile Number" value="" readonly>
                </div> 
                
                 <div class="form-group">
               <input type="text" name="city"  class="form-control" id="city" required placeholder="City/Town" value="" readonly>
                </div>
                 
              
                
                 <div class="form-group">
               <input type="text" name="mobile_account_number"  class="form-control" id="mobile_account_number" required placeholder="Mobile money number" value="" readonly>
                </div> 
                
                <div class="form-group">
               <input type="text" name="reason_for_sending"  class="form-control" id="reason_for_sending" required placeholder="Reason for sending" value="" readonly>
                </div> 
              
              <button class="btn btn-primary btn-block" id="checkout-button" type="button" name="kyc-submit" >Checkout</button>
              <button class="btn btn-primary btn-block" onclick="location.href='index-full.php'" type="button">Cancel</button>
           
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


<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="intphone/script.js"></script>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>


</body>
</html>

