<html>
    <head>
        <title>host</title>
</head>
<body>
    <h1>List all activities</h1>
    <table border=1>
        <tr>
        <td> id</td>
        <td> name</td>
        </tr>
<?php
include_once "function.php";

$ObjFile=new filemanager();
$ObjFile->FileName="read.TXT";
$ObjFile->separator="~";
$ObjFile->darwfile("read.TXT");
?>
</table>
</body>
</html>