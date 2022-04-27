<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>bol7i</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Your Courses</h1>
    <table border=10>
        <tr>
            <td>Num</td>
            <td>Course ID</td>
            <td>Course Name</td>
            <td>Time</td>
            <td>Delete</td>
            
        </tr>

    <?php
    include_once "table.php";
    Drawtable("name.txt");
    ?>
    <tr>
        <td>
        <a href="identer.html">Add course<a>
        
</td>
</tr>
    </table>
</body>
</html>