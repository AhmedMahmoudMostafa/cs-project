<?php
//echo "esma311".$_REQUEST["CourseID"];
include_once "table.php";
$Act=$_REQUEST["ID"];
$Act1=$_REQUEST["CName"];
$Act2=$_REQUEST["CTime"];
$Act3=$_REQUEST["id"];
$Act4=$_REQUEST["del"];
$id=lastid("name.txt","~")+1; 
$dl=DeleteUser($dlt);

$record=$id."~".$Act."~".$Act1."~".$Act2."~".$Act3."~".$dl;
$myfiles=fopen("name.txt", "a+");
fwrite($myfiles, $record."\r\n");
fclose($myfiles);
header("location:activity (2).php");
?>