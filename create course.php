<html>
    <head>
        <title>host</title>
</head>
<body>
    <h1>List all activities</h1>
    <table border=1>
        <tr>
        <td> course code</td>
        <td> course name</td>
        </tr>
<?php
include_once "function.php";
$ObjFile=new filemanager();
$ObjFile->FileName="course activity.TXT";
$ObjFile->separator="~";
$ObjFile->darwfile("course activity.TXT");
?>
<tr>
    <td>
        <a href="Add Activity.html"> Add Activity</a>
    </td>
</tr>
</table>
</body>
</html>