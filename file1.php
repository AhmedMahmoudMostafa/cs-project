<!DOCTYPE html>
<html>
    <head>
<meta charset='UTF-8'>
<meta http-equiv="X-UA-compatible" content="IE=edge">
<title>registration details</title>
<meta name="viewport" content="width=device-width",initial-scale=1>
<link rel="stylesheet" type="text/css" media="screen" href="main.css">
<script src="main.js"></script>
    </head>
    <body>
        <?php
$myfile=fopen("regdet.txt","r+") or die("no file found");
while(!feof($myfile))
{
    $line=fgets($myfile);
    $arrayline=explode("~",$line);
    for($i=0;i<count($arrayline);$i++)
    {
        echo $arrayline[$i];
    }

}
fclose($myfile);

        ?>

    </body>
</html>
