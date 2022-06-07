<?php
include_once "obs class.php";
include_once "notify.php";
include_once "sub.php";

$u= new subject();
new noftfiy ($u);
$message=$_REQUEST["message"];
echo "notify donor"."<br>";
$u->setstate($message);
?>