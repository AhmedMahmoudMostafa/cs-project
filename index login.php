<?php
include_once "all function class.php";
$filename="login.txt";
session_start();
$objuser=new user1 ($filename);
$objuser1=new user1 ("user data.txt");
$objuser1->email=$_REQUEST["Email"];
$objuser1->password=$_REQUEST["password"];
$objuser->email=$_REQUEST["Email"];
$objuser->password=$_REQUEST["password"];
$id=$objuser1->login("user data.txt");
$time = date('m-d-Y H-i-s A e');
$record=$id."~".$objuser->email."~".$time;
if($id>0)
{
    $objuser->fileManagerobj-> storerecord($record);
    $_SESSION=$objuser->email;
}

?>