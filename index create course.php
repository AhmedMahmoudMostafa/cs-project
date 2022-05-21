<?php
include_once "all function class.php";
$fileName="course data.txt";
$objcor=new course($fileName);
$objcor->coursename=$_REQUEST["courseName"];
$objcor->courseCode=$_REQUEST["courseCode"];
$objcor->record=$objcor->coursename."~".$objcor->courseCode."~";
$objcor->add();
?>