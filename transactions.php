<?php
session_start();
require_once('apis.php');
$apisob = new GSMAApiCalls();
$token = $apisob->getToken();

$transactionresob = $apisob->processTransfer($token);
var_dump($transactionresob);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>