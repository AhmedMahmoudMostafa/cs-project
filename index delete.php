<?php
include_once "delete.php";
$fileName="user data.txt";
$Separator="~";
echo $_REQUEST["id"];
$id=$_REQUEST["id"];
getRowById("user data.txt","~",$id);
?>