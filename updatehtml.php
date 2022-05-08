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
            <td>email </td>
            <td>name</td>
            <td>password</td>
            <td>DOB</td>
            <td>user </td>
            <td>usertype</td>
            <td>phone number</td>
    <?php
    include_once "all function class.php";
        session_start();
        $objuser=new user1("user data.txt");
        $objuser->email=$_SESSION["Email"];
        $line=$objuser->readlinebyemail();
        $ArrayLine=explode("~",$line);
        $name=$ArrayLine[1];
        echo "<tr><td>" .$ArrayLine[0]."</td>"."<td><a href=update index.php?=email".$ArrayLine[1].">".$name."</a></td>"."<td><a href=update index.php?=name".$ArrayLine[2].">".$ArrayLine[2]."</a></td></td>"."<td><a href=update index.php?=password".$ArrayLine[3].">".$ArrayLine[3]."</a></td></td>"."<td><a href=update index.php?=DOB".$ArrayLine[4].">".$ArrayLine[4]."</a></td></td>"."<td><a href=update index.php?=user".$ArrayLine[5].">".$ArrayLine[5]."</a></td></td>"."<td><a href=update index.php?=usertype".$ArrayLine[6].">".$ArrayLine[6]."</a></td></td>"."<td><a href=update index.php?=phone".$ArrayLine[7].">".$ArrayLine[7]."</a></td></td>";
        echo "</tr>";
    
    ?>
    </table>
</body>
</html>