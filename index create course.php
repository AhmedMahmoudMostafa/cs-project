<?php
include_once "all function class.php";
$fileName="course data.txt";
$objcor=new course($fileName);
$objcor->courseName=$_REQUEST["courseName"];
$objcor->courseCode=$_REQUEST["courseCode"];
$objcor->record=$objcor->courseCode."~".$objcor->courseName."~";
$objcor->add();
?>