<?php


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
                <li><a href="about-us.php">About Us</a></li>
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
  <section class="page-header page-header-text-dark py-0 mb-0">
	<section class="hero-wrap section">
    <div class="hero-mask opacity-8 bg-light"></div>
    <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/bg/South America.jpg');"></div>
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-11 font-weight-500 text-black mb-4">What is Kudi</h1>
            <p class="text-5 text-black line-height-4 mb-4">Our mission is to improve the quality of life of the underbanked and unbanked!</p>
            <?php
            if(!isset($_SESSION['id'])) {
                ?>
                    <a href="signup.php" class="btn btn-primary m-2">Create Account</a>     
                <?php
                
            }
            ?>
            
            
            <a class="btn btn-outline-light video-btn m-2" href="#" data-src="https://www.youtube.com" data-toggle="modal" data-target="#videoModal"><span class="mr-2"><i class="fas fa-play-circle"></i></span>See How it Works</a> </div>
        </div>
      </div>
    </div>
  </section>
    </section>
  <!-- Page Header end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content">
    
    <!-- Who we are
    ============================================= -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex">
            <div class="my-auto px-0 px-lg-5 mx-2">
              <h2 class="text-9">Mission Statement</h2>
              <p class="text-3">MoCardTransfert Inc. aim to bridge the gap between underbanked and traditional banking ecosystem. Remote areas worldwide and mostly Africa, have been adapting for the past ten years to the USSD mobile banking environment that requires no internet connection and bank account. We have created a simple and low-priced service, to allow more than 300 million people in forgotten locations, to benefit of inequalities reduction.To efficently carry out our mission, we have established a culture in our work environment, so our company can contribute to the well-being of our team members, who are the key to success.The social character of the company is a replica of the social character of its actors. We have forged a company spirit that prioritizes the human factor at the highest level.</p>
            </div>
          </div>
          <div class="col-lg-6 my-auto text-center"> <img class="img-fluid shadow-lg rounded-lg" src="images/26429.jpg" alt=""> </div>
        </div>
      </div>
    </section>
    <!-- Who we are end -->
    
    <!-- Our Values
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="row">
              <div class="col-6 col-lg-7 ml-auto mb-lg-n5"> <img class="img-fluid rounded-lg shadow-lg" src="images/pic_4.jpg" alt="banner"> </div>
              <div class="col-6 col-lg-8 mt-lg-n5"> <img class="img-fluid rounded-lg shadow-lg" src="images/fille.jpg" alt="banner"> </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex order-1 order-lg-2">
            <div class="my-auto px-0 px-lg-5">
              <h2 class="text-9 mb-4">Our Vision for the next 10 years</h2>
              <h4 class="text-4 font-weight-500">Year 1 to 3</h4>
              <p class="tex-3" >We are aiming to serve West African countires and allow 104 million USSD mobile banking accounts, to execute remittances and payments solutions even without internet connection and  bank account, which are keys to fit underbanked areas.</p>
              <h4 class="text-4 font-weight-500 mb-2">year 3 to 5</h4>
              <p class="tex-3" >We are looking forward to expanding our service to the whole african continent and remit fund and payment solution to 395 million USSD mobile banking acounts. And most importantly, we will implement a low cost healthcare solution for remote areas and population.</p>
              <h4 class="text-4 font-weight-500 mb-2">Year 5 to 10</h4>
              <p class="tex-3" >Within the next 10 years, we are aiming to serve Africa and expend our service to the Caribbean, South America, Middle East and East Asia. by the end of 2019,  1 billion USSD mobile accounts were registered worldwide by the GSMA association.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Values end -->
    
    <!-- Leadership
    ============================================= -->
   
    <!-- Leadership end -->
    
    <!-- Our Investors
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center">Key players</h2>
        <p class="text-4 text-center mb-5">Open API's and Partners.</p>
        <div class="brands-grid separator-border">
          <div class="row align-items-center">
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/invest ottawa carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/interac carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/visa Carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/paypal carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/mastercard carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/Mpesa carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/orange carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/MTN carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/CIBC Carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/RBC carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/desjardins Carousel.png" alt="Brands"></a></div>
            <div class="col-6 col-sm-4 col-lg-1 text-center"><a href=""><img class="img-fluid" src="images/partner/TD carousel.png" alt="Brands"></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Investors end -->
    
    <!-- Testimonial
    ============================================= -->
    <section class="section">
      <div class="container">
        <h2 class="text-9 text-center">What our prospective customers are saying about Kudi</h2>
        <p class="text-4 text-center mb-4">A low cost digital service that will improve underbanked population quality of life.</p>
        <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-slideby="2" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="2">
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“J'utiliserai définitivement ce service du fait que je suis familier avec le niveau de sécurité des données, aloué a ce projet.”</p>
              <strong class="d-block font-weight-500">Leo Balcasi</strong> <span class="text-muted">Dévéloppeur Back-end, Montreal</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“I was looking for a way to send directly money to my family in an erea with no internet connection. I have found a solution. My people use the USSD mobile banking and this is very interesting.”</p>
              <strong class="d-block font-weight-500">Ralph</strong> <span class="text-muted">Barthender in Ottawa</span> </div>
          </div>
          <div class="item mh-100">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“The way the survey was conduct really put some trust in me according to what i have seen so far. I can't wait to send directly on the mobile wallet of Orange or MTN in My country”</p>
              <strong class="d-block font-weight-500">Elisabeth Konan</strong> <span class="text-muted">Customer Service representative</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“Je vais utiliser ce service pour facilité les transfert vers les région réculées en Afrique. Ca me coute des charges suplémentaire avec les compagnies traditionels”</p>
              <strong class="d-block font-weight-500">Mathieu</strong> <span class="text-muted">Import/Export USA</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“Quand on doit faire un transfert d'urgence, je pense que la solution est cette compagnie. Parfois pour payer les facture médicales en pleine nuit c'est tout un problème d'habitude. Avec MoCard les fonds arrivent directement a l'hopital”</p>
              <strong class="d-block font-weight-500">Nathalie Hien</strong> <span class="text-muted">Business Advisor</span> </div>
          </div>
          <div class="item">
            <div class="testimonial rounded text-center p-4">
              <p class="text-4">“The test says we will be able to send money on areas with no internet connection and on USSD wallets to people who don't have a bank account. Now I call this a huge difference maker ”</p>
              <strong class="d-block font-weight-500">Mohamed</strong> <span class="text-muted">Use from Maryland, USA</span> </div>
          </div>
        </div>
        <div class="text-center mt-4"><a href="#" class="btn-link text-4">See more people review<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
      </div>
    </section>
    <!-- Testimonial end -->
    
    <!-- JOIN US
    ============================================= -->
    <section class="section bg-primary py-5">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-light mb-2"> <i class="fas fa-globe"></i> </div>
              <h4 class="text-12 text-white mb-0">395M</h4>
              <p class="text-4 text-white mb-0">USSD mobile banking accounts in Africa</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-light mb-2"> <i class="fas fa-globe-africa"></i> </div>
              <h4 class="text-12 text-white mb-0">880M</h4>
              <p class="text-4 text-white mb-0">USSD mobile banking accounts worldwide</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-4 mt-md-0">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-light mb-2"> <i class="fas fa-users"></i> </div>
              <h4 class="text-12 text-white mb-0">5M</h4>
              <p class="text-4 text-white mb-0">Potential users in North America</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mt-4 mt-md-0">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-light mb-2"> <i class="far fa-life-ring"></i> </div>
              <h4 class="text-12 text-white mb-0">24X7</h4>
              <p class="text-4 text-white mb-0">Support</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- JOIN US end -->
    
  </div>
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
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="https://www.facebook.com/MoCardTr" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
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