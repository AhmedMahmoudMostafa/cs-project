<?php
include_once "all function class.php";
$fileName="course data.txt";
session_start();
$objcourse=new course($fileName);
$objcourse->coursename=$_SESSION["courseName"];
$courseName=$_REQUEST["courseName"];
$coursecode=$_REQUEST["courseCode"];
$record=$id."~".$courseName."~".$coursecode."~";
$i=$objcourse->getRowBycourseCode($id);
$objcourse->fileManagerobj->update($i,$record);
echo $record;
?>