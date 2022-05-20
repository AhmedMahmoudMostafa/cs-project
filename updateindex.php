<?php
include_once "all function class2.php";
//header("location:update type.html");
$fileName="user type.txt";
$objuser=new usertype($fileName);
$id=$_REQUEST["ID"];
$i=$objuser->getRowById($id);
$usertype=$_REQUEST["usertype"];
$record=$id."~".$usertype."~";
$objuser->fileManagerobj->update($i,$record);
?>