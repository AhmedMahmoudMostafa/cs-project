<?php
include_once "all function class113.php";
$fileName="payment methods.txt";
$objmethods=new paymentmethods($fileName);
$objmethods->methods=$_REQUEST["method"];
$objmethods->record=$objmethods->methods."~";
$objmethods->add();
?>