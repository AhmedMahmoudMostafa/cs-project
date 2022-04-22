<?php
include_once "delete.php";
$fileName="user data.txt";
$Separator="~";
$id=$_REQUEST["id"];
deleteuserbyid($fileName,$id,$Separator);
?>