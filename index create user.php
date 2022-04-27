<?php
include_once "all function class.php";
$fileName="user data.txt";
$objfilemanager=new fileManager;
$objfilemanager->fileName=$fileName;
$objfilemanager->separator="~";
$objuser=new username($fileName);
$email=$_REQUEST["Email"];
$name=$_REQUEST["FullName"];
$pass=$_REQUEST["Password"];
$DoB=$_REQUEST["DOB"];
$password=$_REQUEST["Password"];
$username=$_REQUEST["username"];
$usertype=$_REQUEST["usertype"];
$result=" ";
$key=100;
$user=$objuser->Encrypt($username, $key,$result);
$record= $name."~".$email."~".$user."~".MD5($password)."~" .$usertype."~".$DoB;
echo $user;
$objuser->add($email);
?>