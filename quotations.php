<?php

session_start();

if(isset($_SESSION['quotation_object']))
{

$quotationob = $_SESSION['quotation_object'];

if(isset($quotationob->error)){
   session_destroy();
   header('Location:index.php');
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
<body class="justify-content-center">
<div class="container">
<h2 class="text-8 font-weight-400 text-center mt-3 mb-3">Quotation</h2>
    <div class="row">
        <div class="col-lg-12 mb-5">
        <?php

if(isset($_SESSION['quotation_object']))
{

$quotationob = $_SESSION['quotation_object'];

?>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>

 <?php

foreach($quotationob as $responsekey => $value)
{?>

    <tr class="table-primary">
      <td><?php echo $responsekey; ?></td>
      <td><?php 

      if(is_string($value))
      {
          echo $value;

      }else{
        

       if($responsekey == 'senderKyc'){

        foreach($value as $senderKey => $senderValue)
        { 
          if(is_string($senderValue))
          {

           echo $senderKey .' : '. $senderValue;
           echo '<br>';

          }

          else{
              
              foreach($senderValue as $senderkeyob => $senderkeyobValue)
              {
                  echo $senderkeyob .' : '. $senderkeyobValue;
                  echo '<br>';
              }
          }
          
        }

     }
   else
   {
     
    foreach($value[0] as $valueob => $valuedata)
    {
           if($valueob == 'fees')
           {
               continue;
           }
           echo $valueob.' : '.$valuedata;
           echo '<br>';

     }
 }
        
}

?>
      
</td>
 </tr>
      
 <?php      
    }
}
?>

</tbody>
</table>
<button class="btn btn-primary btn-block" onclick="confirmAndSendMoney()" type="button" >Accept and Continue</button>
<button class="btn btn-primary btn-block" onclick="cancelTransaction()" type="button" >Cancel</button>
        </div>
    </div>
</div>  
<script>

var message;

function confirmAndSendMoney()
{

var message = '';

var confirmation = confirm("Send Money from your Bank account to mobile wallet");

if(confirmation == true)
{

 alert("<?php 
    
    echo $_SESSION['sender_currency'].' '.'send to'.' '.$_SESSION['receiver_firstname'].' '.$_SESSION['receiver_middlename'];
    
    ?>");
//  location.href='transactions.php';
    
}

}

function cancelTransaction()
{
 
 location.href='index.php';

}

</script>
</body>
</html>