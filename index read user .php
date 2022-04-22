<?php
include_once "read.php";
$useremail=$_REQUEST["Email"];
$id=$_REQUEST["id"];
$fileName="user data.txt";
$Separator="~";
$line=readlinebyemail($useremail,$Separator,$fileName);
echo $line;
$line=readlinebyid($id,$Separator,$fileName);
echo $line;
?>