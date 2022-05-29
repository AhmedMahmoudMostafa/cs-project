<?php
include_once "all function class.php";
$fileName="course data.txt";
$objcourse=new course($fileName);
$i=$objcourse->getRowBycourseCode($_REQUEST["courseCode"]);
$objcourse->fileManagerobj->del($i);
?>