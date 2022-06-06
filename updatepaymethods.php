<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Payment methods update  </h1>
    <table border=2>
        <tr>
            <td>id</td>
            <td>usertype</td>
    <?php
    include_once "all function class113.php";
    $myfile = fopen("payment methods.txt", "r+") or die("Unable to open file!");
    while(!feof($myfile)) 
    {
          $line= fgets($myfile);
          $ArrayLine=explode("~",$line);
            echo "<tr><td>" .$ArrayLine[0]."</td><td>" .$ArrayLine[0]."</td>";
            echo "</tr>";
    }
    fclose($myfile);
?>
<form action="updateindexpaymethods.php" method="post">
        <table>
        <tr>
              <td>Line id</td>
               <td><input type="text" name="id" /></td>
            </tr>
            <tr>
              <td>paymentmethod</td>
               <td><input type="text" name="method" /></td>
            </tr>
            <tr>
                <td><input type="submit" /></td>
                <td><input type="reset" /></td>
            </tr>
        </table>
        </form>
    </table>
</body>
</html>