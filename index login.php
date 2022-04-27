<?php
include_once "login.php";
$filename="login.txt";
$email=$_REQUEST["Email"];
$password=$_REQUEST["password"];
$id=samedate("user data.txt","~",$email,md5($password));
$data= (new DateTime())->setTimeZone(new DateTimeZone('Y-m-d'))->format('Y-m-d H:i:s');
$record=$id."~".$email."~".$date;
if($id>=0)
{
    login($filename,$record);
}
else
{
    echo "invaild email or you have to create an account ";
}
?>