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
                <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
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
<h2><strong>Terms and Conditions</strong></h2>

<p>Welcome to mocardtransfert!</p>

<p>These terms and conditions outline the rules and regulations for the use of MoCardTransfert Inc.'s Website, located at https://mocardtransfert.com.</p>

<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use mocardtransfert if you do not agree to take all of the terms and conditions stated on this page.</p>

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3><strong>Cookies</strong></h3>

<p>We employ the use of cookies. By accessing mocardtransfert, you agreed to use cookies in agreement with the MoCardTransfert Inc.'s Privacy Policy. </p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3><strong>License</strong></h3>

<p>Unless otherwise stated, MoCardTransfert Inc. and/or its licensors own the intellectual property rights for all material on mocardtransfert. All intellectual property rights are reserved. You may access this from mocardtransfert for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from mocardtransfert</li>
    <li>Sell, rent or sub-license material from mocardtransfert</li>
    <li>Reproduce, duplicate or copy material from mocardtransfert</li>
    <li>Redistribute content from mocardtransfert</li>
</ul>

<p>This Agreement shall begin on the date hereof.<a href="https://www.termsandconditionsgenerator.com"></a><a href="https://www.generateprivacypolicy.com"></a></p>

<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. MoCardTransfert Inc. does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of MoCardTransfert Inc.,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, MoCardTransfert Inc. shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>MoCardTransfert Inc. reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

<p>You warrant and represent that:</p>

<ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>

<p>You hereby grant MoCardTransfert Inc. a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

<h3><strong>Hyperlinking to our Content</strong></h3>

<p>The following organizations may link to our Website without prior written approval:</p>

<ul>
    <li>Government agencies;</li>
    <li>Search engines;</li>
    <li>News organizations;</li>
    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>

<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

<p>We may consider and approve other link requests from the following types of organizations:</p>

<ul>
    <li>commonly-known consumer and/or business information sources;</li>
    <li>dot.com community sites;</li>
    <li>associations or other groups representing charities;</li>
    <li>online directory distributors;</li>
    <li>internet portals;</li>
    <li>accounting, law and consulting firms; and</li>
    <li>educational institutions and trade associations.</li>
</ul>

<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of MoCardTransfert Inc.; and (d) the link is in the context of general resource information.</p>

<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to MoCardTransfert Inc.. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

<p>Approved organizations may hyperlink to our Website as follows:</p>

<ul>
    <li>By use of our corporate name; or</li>
    <li>By use of the uniform resource locator being linked to; or</li>
    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
</ul>

<p>No use of MoCardTransfert Inc.'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

<h3><strong>iFrames</strong></h3>

<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

<h3><strong>Content Liability</strong></h3>

<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

<h3><strong>Your Privacy</strong></h3>

<p>Please read Privacy Policy</p>

<h3><strong>Reservation of Rights</strong></h3>

<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

<h3><strong>Removal of links from our website</strong></h3>

<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

<h3><strong>Disclaimer</strong></h3>

<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

<ul>
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>

<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
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