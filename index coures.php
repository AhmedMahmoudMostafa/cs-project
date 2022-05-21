<?php
include_once "create.php";
$courseName=$_REQUEST["courseName"];
$courseCode=$_REQUEST["courseCode"];
$fileName="course data.txt";
$objcor = new course($fileName);
echo $course;
$objcor->add($courseName,$courseCode,$fileName);
?>