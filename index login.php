<?php
include_once "all function class.php";
$filename="login.txt";
$objuser=new user1 ($filename);
$objuser->email=$_REQUEST["Email"];
$objuser->password=$_REQUEST["password"];
$id=$objuser->logindata("user data.txt");
$time = date('m-d-Y H-i-s A e');
$record=$id."~".$objuser->email."~".$time;
if($id>=0)
{
    $objuser->fileManagerobj-> storerecord($record);
}
else
{
    echo "invaild email or you have to create an account ";
}

?>