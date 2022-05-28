<?php
include_once "all function class3.php";
$fileName="payment methods.txt";
$objmethods=new  paymentmethods($fileName);
$i=$objmethods->getRowById($_GET["ID"]);
$objmethods->fileManagerobj->del($i);
header("location:listallpayM.php");
?>