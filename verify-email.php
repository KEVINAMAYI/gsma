<?php 

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
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="h-100">
  <div class="container h-100">
    <!-- Welcome section
    ============================================= -->
   
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
          <div class="logo mb-4 text-center"> <a href="index.html" title="kudi - HTML Template"><img src="images/logo4.png" alt="my logo" WIDTH=50 HEIGHT=60></a> </div>

          <?php if(isset($_SESSION['message'])): ?>
           <div class="alert <?php echo $_SESSION['alert-class']; ?>">
            <?php 
             echo $_SESSION['message']; 
             unset($_SESSION['message']);
             unset($_SESSION['alert-class']);  
            ?>
           </div>
          <?php endif; ?>  
           
            <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>

            <a href="login.php" class="logout">logout</a>
 
          <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning">
            You need to verify your account.
            sing in to your email account and 
            click on the verification link we
            have just emailed you at
            <srtong><?php echo $_SESSION['email']; ?></srtong>
            </div>
          <?php endif; ?>

          <?php if($_SESSION['verified']): ?>
            <button class="btn btn-block btn-lg btn-primary" >I am verified</button>
            
            <button class="btn btn-block btn-lg btn-primary" onclick="window.location.href='myaccount.php'">Proceed to complete your profile</button>
          <?php endif; ?>

        </div>  
      </div>  
    </div>  
  
    <!-- Welcome section End -->
  </div>
</div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>