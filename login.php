<?php require_once 'controllers/authController.php';?>
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

<div id="main-wrapper" class="h-100">
  <div class="container h-100">
    <!-- Login Form
    ============================================= -->
    <div class="row no-gutters h-100">
      <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto">
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
          
          
        <form id="loginForm" action="login.php" method="post">
          <div class="vertical-input-group">


            <! --- Alert Alert-danger --- >
          
            <div class="input-group">
              <input type="username" name="username" value="<?php echo $username; ?>" class="form-control" id="username" required placeholder="Your Email">
            </div>
            <div class="input-group">
              <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
            </div>
          </div>
          <button class="btn btn-primary btn-block shadow-none my-4" name="login-btn" type="submit">Login</button>
         
        </form>
        <p class="text-3 text-center text-muted">Don't have an account? <a class="btn-link" href="signup.php">Register</a></p>
        <p class="text-center"><a class="btn-link" href="#" data-toggle="modal" data-target="#forgotPwd">Forgot Password?</a></p>
      </div>
      <div class="col-12 fixed-bottom">
        <p class="text-center text-1 text-muted mb-1">Copyright © 2020 <a href="#">kudi</a>. All Rights Reserved.</p>
      </div>
    </div>
    <!-- Login Form End -->
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forgotPwd" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="forgot-password.php" name="fpass" id="fpass" method="post">
                <div class="modal-header">
                    
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <p>Forgot your password? Enter the email address of your account to reset your password.</p>
                    <div class="form-group required-field-block">
                        <input type="email" class="form-control" id="femail" name="femail" placeholder="Enter Email..." required="">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="sbtFpass" class="btn btn-default"  value="Reset Password">
                </div>
            </form>
        </div>

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