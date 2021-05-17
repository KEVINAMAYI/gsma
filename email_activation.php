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


<?php

if (isset($_REQUEST["email"]) && !empty($_REQUEST["email"]) && isset($_REQUEST["activation_key"]) && !empty($_REQUEST["activation_key"])) {

    $email = base64_decode($_REQUEST["email"]);
    $verification_token = $_REQUEST["verification_token"];

    $regexp = '/([a-zA-Z0-9._%+-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/';
    if (preg_match($regexp, trim($email))) {
          
          $sql = "SELECT * FROM users WHERE email='".$email."' OR token='".$verification_token."' LIMIT 1";
          $result = $conn->query($sql);
          $email_valid = $result->fetch_assoc();
          
         
        
        if ($email_valid) {
            $_SESSION['id'] = $email_valid['id'];
            $_SESSION['username'] = $email_valid['username'];
            $_SESSION['email'] = $email_valid['email'];
            $_SESSION['verified'] = $email_valid['verified'];
            
            if ('1' == $email_valid['verified']) {

                $_SESSION['verified'] = true;
                $_SESSION['alert-class'] = "alert-success"; 
                $_SESSION['message'] = 'Your email address is verified. You can login using your email and password.';
            } else {
                
                $sql = "UPDATE users SET verified='1' WHERE id='".$email_valid['id']."'";

                $conn->query($sql);
                
                $_SESSION['verified'] = true;
                $_SESSION['alert-class'] = "alert-success";
                $_SESSION['message'] = 'Your account is activated successfully';
            }
        } else {

            $_SESSION['alert-class'] = "alert-danger";
            $_SESSION['message'] = 'There seems to be some problem. Please try again later.';
        }
    } else {

        $_SESSION['alert-class'] = "alert-danger";
        $_SESSION['message'] = 'There seems to be some problem. Please try again later.';

    }
    header('location: verify-email.php');
    exit();
} else {

    $_SESSION['alert-class'] = "alert-danger";
    $_SESSION['message'] = 'There seems to be some problem. Please try again later.';

    header('location: verify-email.php');
    exit();
}

?>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>