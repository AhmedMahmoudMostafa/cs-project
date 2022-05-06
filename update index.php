<?php
include_once "all function class.php";
$fileName="user data.txt";
$objuser=new user1($fileName);
$email=$_REQUEST["Email"];
$name=$_REQUEST["FullName"];
$pass=$_REQUEST["Password"];
$DoB=$_REQUEST["DOB"];
$password=$_REQUEST["Password"];
$username=$_REQUEST["username"];
$usertype=$_REQUEST["usertype"];
$id=$_REQUEST["id"];
$result=" ";
$key=100;
$user=$objuser->Encrypt( $key,$result);
$record=$id."~".$email."~".$name."~".md5($password)."~".$user."~".$usertype."~".$DoB;
$i=$objuser->getRowById($id);
$objuser->fileManagerobj->update($i,$record);
echo $record;
?>