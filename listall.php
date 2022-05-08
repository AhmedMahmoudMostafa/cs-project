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
            <td>id</td>
            <td>email </td>
            <td>name</td>
            <td>password</td>
            <td>DOB</td>
            <td>user </td>
            <td>DOBtype</td>
            <td>phone number</td>
            <td>delete user</td>
    <?php
       
        $myfile = fopen("user data.txt", "r+") or die("Unable to open file!");
        while(!feof($myfile)) 
        {
              $line= fgets($myfile);
              $ArrayLine=explode("~",$line);
                echo "<tr><td>" .$ArrayLine[0]."</td><td>" .$ArrayLine[1]."</td><td>" .$ArrayLine[2]."</td><td>" .$ArrayLine[3]."</td><td>" .$ArrayLine[4]."</td><td>" .$ArrayLine[5]."</td><td>" .$ArrayLine[6]."</td><td>" .$ArrayLine[7]."</td><td><a href=deleteindex.php?ID=".$ArrayLine[0].">delete</a></td>";
                echo "</tr>";
                
        }
        fclose($myfile);
    ?>
    </table>
</body>
</html>