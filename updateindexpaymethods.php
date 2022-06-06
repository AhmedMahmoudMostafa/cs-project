<?php
include_once "all function class113.php";
$fileName="payment methods.txt";
$objmethods=new paymentmethods($fileName);
$objmethods->id=$_REQUEST["id"];
$objmethods->methods=$_REQUEST["method"];
$i=$objmethods->getRowById($objmethods->id);
$record=$objmethods->id."~".$objmethods->methods."~";
$objmethods->fileManagerobj->update($i,$record);
header("location:updatepaymethods.php");
?>