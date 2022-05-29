<?php
include_once "all function class.php";
$fileName="course data.txt";
$objcourse=new course($fileName);
$newcourseName=$_REQUEST["newcourseName"];
$newcourseCode=$_REQUEST["newcourseCode"];
$courseCode=$_REQUEST["courseCode"];
$record=$newcourseCode."~".$newcourseName."~";
$courseCode=$objcourse->getRowBycourseCode($courseCode);
$objcourse->fileManagerobj->update($courseCode,$record);
echo $record;
?>