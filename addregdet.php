<?php
echo "the registration detail added is" .$_REQUEST["addregdet"];
$myfile=fopen("file1.txt","a+");
fwrite($myfile,$record,"\r\n");
fclose($myfile);
?>