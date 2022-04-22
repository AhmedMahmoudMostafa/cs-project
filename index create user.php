<?php
include_once "create.php";
$email=$_REQUEST["Email"];
$name=$_REQUEST["FullName"];
$pass=$_REQUEST["Password"];
$DoB=$_REQUEST["DOB"];
$password=$_REQUEST["Password"];
$username=$_REQUEST["username"];
$usertype=$_REQUEST["usertype"];
$result=" ";
$key=100;
$fileName="user data.txt";
$user=Encrypt($username, $key,$result);
echo $user;
add($email,$name,$password,$DoB,$user,$usertype,$fileName);
?>