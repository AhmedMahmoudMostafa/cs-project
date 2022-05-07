<?php
include_once "all function class.php";
$filename="logout.txt";
session_start();
$objuser=new user1($filename);
$objuser1=new user1("user data.txt");
$objuser->email=var_dump($_SESSION);
echo $objuser->email;
$objuser1->email= var_dump($_SESSION);
$id=$objuser1->samedatelogout();
$time = date('m-d-Y H-i-s A e');
$record=$id."~".$objuser->email."~".$time;
if($id>=0)
{
    $objuser->fileManagerobj->storerecord($record);
}
session_unset();
session_destroy();
?>