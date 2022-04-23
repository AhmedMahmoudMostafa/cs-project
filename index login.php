<?php
include_once "login.php";
$filename="login.txt";
$email=$_REQUEST["Email"];
$password=$_REQUEST["password"];
$id=samedate("user data.txt","~",$email,md5($password));
$record=$id."~".$email;
if($id>=0)
{
    login($filename,$record);
}
else
{
    echo "invaild email or you have to dreate an account ";
}
?>