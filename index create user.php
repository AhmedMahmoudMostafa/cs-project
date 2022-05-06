<?php
include_once "all function class.php";
$fileName="user data.txt";
$objuser=new user1($fileName);
$objuser->email=$_REQUEST["Email"];
$name=$_REQUEST["FullName"];
$pass=$_REQUEST["Password"];
$DoB=$_REQUEST["DOB"];
$objuser->password=$_REQUEST["Password"];
$username=$_REQUEST["username"];
$usertype=$_REQUEST["usertype"];
$result=" ";
$key=100;
$user=$objuser->Encrypt( $key,$result);
echo $user;
$objuser->record=$objuser->email."~".$name."~".$objuser->password."~".$DoB."~".$user."~".$usertype;
$objuser->add();
?>