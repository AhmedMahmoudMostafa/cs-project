<?php
function readlinebyemail($email,$Separator,$fileName)
{
    if (!file_exists($fileName))
    {
        return 0;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) 
    {
        $line = fgets($myfile);
        $ArrayLine = explode($Separator, $line);
        if ($ArrayLine[2] == $email)
        {
            return $line;
        }

    }
    return false;
} 
function readlinebyid($id,$Separator,$fileName)
{
    if (!file_exists($fileName))
    {
        return 0;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) 
    {
        $line = fgets($myfile);
        $ArrayLine = explode($Separator, $line);
        if ($ArrayLine[0] == $id)
        {
            return $line;
        }

    }
    return false;
} 
?>