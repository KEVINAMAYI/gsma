<?php ?>
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


<?php

$password_reset_key = isset($_GET["password_reset_key"]) ? (secure($_GET["password_reset_key"])) : "";


if (isset($_POST['newPwd']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $token = ($_POST['password_reset_key']);
    $password = ($_POST['newPwd']);
    $cnpassword = ($_POST['conNewPwd']);

    if ($token != '' && $password != '' && ($password == $cnpassword)) {
        
        $sql = "SELECT * FROM users WHERE token='".$token."' LIMIT 1";
          $result = $conn->query($sql);
          $get_user_details = $result->fetch_assoc();
          
        
        $user_id = $get_user_details['id'];
        if ($user_id > 0) {
        	$timestamp = time();
    		$activation_key = sha1($timestamp);
            
            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE users SET password='".$password."', token='".$activation_key."' WHERE id='".$user_id."'";

            $conn->query($sql);
            
            $_SESSION['alert-class'] = "alert-success";
            $_SESSION['message'] = 'You have successfully reset your password, please login to continue';    
            
        } else {
            $_SESSION['alert-class'] = "alert-danger";
            $_SESSION['message'] = 'There seems to be some problem. Please try again later2.';
        }
         header('location: login.php');
    exit();
        
    } else {
        $_SESSION['alert-class'] = "alert-danger";
            $_SESSION['message'] = 'There seems to be some problem. Please try again later1.';
         header('location: login.php');
        exit();
    }
} else if (isset($_GET['password_reset_key'])) {

     $sql = "SELECT * FROM users WHERE token='".$password_reset_key."' LIMIT 1";
          $result = $conn->query($sql);
          $check_if_code_is_valid = $result->fetch_assoc();
          
    if ($check_if_code_is_valid) {
        
    } else {
        $_SESSION['alert-class'] = "alert-danger";
        $_SESSION['message'] = 'Password reset link is invalid.';
        
        header('location: login.php');
    exit();
    }
}

?>

<div id="main-wrapper" class="h-100">
  <div class="container h-100">
    <!-- resetpassword Form
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
          
          
        <form id="password-reset-form" action="resetpassword.php" method="post">
          <div class="vertical-input-group">


            <! --- Alert Alert-danger --- >
          
            
            <div class="input-group">
              <input type="password" name="newPwd" class="form-control" id="newPwd" required placeholder="New Password">
            </div>
            <div class="input-group">
              <input type="password" name="conNewPwd" class="form-control" id="conNewPwd" required placeholder="Confirm New Password">
            </div>
          </div>
          <input type="hidden" name="password_reset_key" id="password_reset_key" value="<?php echo $password_reset_key; ?>" >
          <button class="btn btn-primary btn-block shadow-none my-4" name="reset_password" id="reset_password" type="submit">Submit</button>
         
        </form>
        
      </div>
      <div class="col-12 fixed-bottom">
        <p class="text-center text-1 text-muted mb-1">Copyright © 2020 <a href="#">kudi</a>. All Rights Reserved.</p>
      </div>
    </div>
    <!-- Login Form End -->
  </div>
</div>


<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/jquery/jquery.validate.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>

<script type="text/javascript">
    
    $("#password-reset-form").validate({
        rules: {
            newPwd: {
                required: true,
            },
            conNewPwd: {
                required: true,
                equalTo:$("#newPwd")
            }
        },
        messages: {
            newPwd: {
                required:"Please enter password",
            },
            conNewPwd: {
                required:"Please confirm password",
                equalTo:"Password and confirm password must match"
            } 
        }
    });
</script>


</body>
</html>