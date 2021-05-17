<?php


?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
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
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
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
  <header id="header">
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
                <li><a href="index.html">Go back to homepage</a></li>
                <li><a href="privacy.php">Privacy</a></li>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
         <?php
          if(!isset($_SESSION['id'])) {
          
              ?>
              <nav class="login-signup navbar navbar-expand">
                <ul class="navbar-nav">
                  <li><a href="login.php">Login</a> </li>
                  <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block" href="signup.php">Register</a></li>
                </ul>
              </nav>
              
              <?php
          } else {
              
              ?>
              <nav class="login-signup navbar navbar-expand">
                <ul class="navbar-nav">
                  
                  <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block" href="logout.php?action=true">Logout</a></li>
                </ul>
              </nav>
              
              <?php
          }
          ?>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
    
<!-- Page Header
============================================= -->
<section class="page-header page-header-text-light bg-light-3 py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <ul class="breadcrumb mb-0">
          <li><a href="index.html">Home</a></li>
          <li class="active" style="color:'#000000'"></li>
        </ul>
      </div>
      <div class="col-12">
        <h1></h1>
      </div>
    </div>
  </div>
</section>
<!-- Page Header End --> 
    
  <!-- Content
  ============================================= -->
  <div id="content">
  <div class="container">
      <div class="row">
      
      <div class="col-md-12 mb-12">
      <div class="bg-white shadow-md rounded h-100 p-3">
      	<div class="featured-box text-center">
              <div class="featured-box-icon text-primary mt-4"> </i></div>
             <h1>Privacy Policy for MoCardTransfert Inc.</h1>

<p>At mocardtransfert, accessible from https://mocardtransfert.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by mocardtransfert and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in mocardtransfert. This policy is not applicable to any information collected offline or via channels other than this website.<a href="https://www.privacypolicygenerator.info"></a><a href="https://www.privacypolicyonline.com/privacy-policy-generator/"></a></p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

<h2>Information we collect</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>How we use your information</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our webste</li>
<li>Improve, personalize, and expand our webste</li>
<li>Understand and analyze how you use our webste</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>Log Files</h2>

<p>mocardtransfert follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>




<h2>Advertising Partners Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of mocardtransfert.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on mocardtransfert, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that mocardtransfert has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>mocardtransfert's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR Data Protection Rights</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>mocardtransfert does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
            </div>
      </div>
      </div>
    
      
      
      <div class="col-12 mb-4">
      <div class="text-center py-5 px-2">
      <h2 class="text-8"></h2>
      <p class="lead"></p>
      	<div class="d-flex flex-column">
              <ul class="social-icons social-icons-lg social-icons-colored justify-content-center">
                <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" title="" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="" data-original-title="Youtube"><i class="fab fa-youtube"></i></a></li>
                <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
      </div>
      </div>
      
      </div>
    </div>
    
    
    
    
  <section class="hero-wrap section shadow-md">
      <div class="hero-mask opacity-9 bg-primary"></div>
      <div class="hero-bg" style="background-image:url('images/bg/East Africa 1.jpg');"></div>
      <div class="hero-content">
        <div class="container text-center">
          <h2 class="text-9 text-white">Awesome Customer Support</h2>
          <p class="text-4 text-white mb-4">Have you any query? Don't worry. We have great people ready to help you whenever you need it.</p>
          <a href="#" class="btn btn-light">Find out more</a> </div>
      </div>
    </section>
  <!-- Content end -->
  
  <!-- Footer
  ============================================= -->
  <footer id="footer">
  <div class="container">
  <div class="row">
  <div class="col-lg d-lg-flex align-items-center">
  <ul class="nav justify-content-center justify-content-lg-start text-3">
  <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
  <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
  <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
  <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
  <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
  <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
  </ul>
  </div>
  <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
  <ul class="social-icons justify-content-center">
  <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
  <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
  <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
  <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
  </ul>
  </div>
  </div>
  <div class="footer-copyright pt-3 pt-lg-2 mt-2">
  <div class="row">
  <div class="col-lg">
  <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2020 <a href="#">kudi</a>. All Rights Reserved.</p>
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
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>