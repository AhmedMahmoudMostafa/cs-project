<?php
include_once "login.php";
$filename="login.txt";
$email=$_REQUEST["Email"];
$password=$_REQUEST["password"];
$id=samedate("user data.txt","~",$email,md5($password));
$time = date('m-d-Y H-i-s A e');
$record=$id."~".$email."~".$time;
if($id>=0)
{
    login($filename,$record);
}
else
{
    echo "invaild email or you have to create an account ";
}
?>