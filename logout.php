<?php
//include_once "all function class.php";
//$filename="logout.txt";
session_start();
session_unset();
session_destroy();
header("location:main .html")
/*echo $_SESSION["Email"];
$objuser=new user1($filename);
$objuser1=new user1("login.txt");
$objuser->email=$_SESSION["Email"];
$objuser1->email= $_SESSION["Email"];
session_unset();
session_destroy();
$id=$objuser1->samedatelogout();
$time = date('m-d-Y H-i-s A e');
$record=$id."~".$objuser->email."~".$time;
if($id>=0)
{
    $objuser->fileManagerobj->storerecord($record);
}*/
?>