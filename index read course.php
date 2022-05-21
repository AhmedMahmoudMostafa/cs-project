<?php
include_once "read.php";
include_once "all functions class.php";
$coursename=$_REQUEST["coursename"];
$courseCode=$_REQUEST["courseCode"];
$fileName="course data.txt";
$Separator="~";
$objcor = new course($fileName);
$line=$objcor->readlinebyCourseName($coursename,$Separator);
echo $line;
$line=$objcor->readlinebycoursecode($courseCode,$Separator);
echo $line;
?>