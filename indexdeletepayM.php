<?php
include_once "all function class113.php";
$fileName="payment methods.txt";
$objmethods=new  paymentmethods($fileName);
$i=$objmethods->getRowById($_GET["ID"]);
$objmethods->fileManagerobj->del($i);
header("location:listallpaymethods.php");
?>