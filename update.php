<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>update date  </h1>
    <table border=2>
        <tr>
            <td>id</td>
            <td>usertype</td>
            <td>update</td>
    <?php
    include_once "all function class2.php";
    $myfile = fopen("user type.txt", "r+") or die("Unable to open file!");
    while(!feof($myfile)) 
    {
          $line= fgets($myfile);
          $ArrayLine=explode("~",$line);
            echo "<tr><td>" .$ArrayLine[0]."</td><td>" .$ArrayLine[1]."</td><a href=updateindex.php?ID=".$ArrayLine[0].">update</a></td>";
            echo "</tr>";
            
    }
    fclose($myfile);
?>
    </table>
</body>
</html>