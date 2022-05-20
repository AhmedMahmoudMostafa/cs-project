<?php
include_once "all function class2.php";
$fileName="user type.txt";
$objuser=new usertype($fileName);
$objuser->type=$_REQUEST["usertype"];
$objuser->record=$objuser->type."~";
$objuser->add();
?>