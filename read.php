<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>user data </h1>
    <table border=2>
    <tr>
        <td>courseName</td>
        <td>courseCode</td>
    </tr>
    <?php
    $fileName="course data.txt";
    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while(!feof($myfile)) 
    {
          $line= fgets($myfile);
          $ArrayLine=explode("~",$line);
            echo "<tr><td>" .$ArrayLine[0]."</td><td>" .$ArrayLine[1]."</td>";
            echo "</tr>";
    }
    fclose($myfile);
    ?>
    </table>
</body>
</html>