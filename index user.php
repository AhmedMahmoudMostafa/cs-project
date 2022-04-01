<?php
include_once "create.php";
$email=$_REQUEST["Email"];
$name=$_REQUEST["FullName"];
$pass=$_REQUEST["Password"];
$DoB=$_REQUEST["DOB"];
$result="";
$key=100;
$fileName="user data.txt";
$password=Encrypt($pass,$key,$result);
add($email,$name,$password,$DoB,$fileName);
?>