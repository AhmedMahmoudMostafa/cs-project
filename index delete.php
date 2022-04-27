<?php
include_once "delete.php";
$fileName="user data.txt";
$Separator="~";
echo $_GET["ID"];
$id=$_GET["ID"];
getRowById("user data.txt","~",$id);
?>