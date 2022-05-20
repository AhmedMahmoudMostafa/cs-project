<?php
include_once "all function class2.php";
$fileName="user type.txt";
$objuser=new  usertype($fileName);
$i=$objuser->getRowById($_GET["ID"]);
$objuser->fileManagerobj->del($i);
?>