<?php
//echo "the activity you choose is ".$_REQUEST["ActivityName"];
include_once "function.php";
$Act=$_REQUEST["ActivityName"];
$storeactivity($filemanagerObj);
$filename="course activity.TXT";
$separator="~";
header("location:create course.php");
?>