<?php
include_once "create.php";
echo sha1("Ayman11978");
$email="ahmed.mahmoud60msa.edu.eg";
$name="Ahmed mahmoud";
$word="ahmed ";
$key=1500;
$DOB="5,10,2002";
$Result="";
$filename="user data.txt";
$password=Encrypt($word, $key,$Result);
add ($email,$name,$password,$DOB,$filename);
$password=Decrypt($password, $key,$Result);
add ($email,$name,$password,$DOB,$filename);
?>