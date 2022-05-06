<?php
include_once "all function class.php";
$fileName="user data.txt";
$objuser=new user1($fileName);
$i=$objuser->getRowById($_GET["ID"]);
$objuser->fileManagerobj->del($i);
?>