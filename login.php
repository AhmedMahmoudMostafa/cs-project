<?php
function samedate($fileName,$sapaertor,$email,$passWord)
{
    $file=fopen($fileName,"r+") or die("Unable to open file!");
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        $Email=$Array[2];
        $password=$Array[4];
        $id=$Array[0];
        if($Email==$email)
        {
            if($password==$passWord)
            {
                return $id;
            }
            else
            {
                echo "invalid password plases login again";
                return -1;   
            }

        }
    }
    return -1;
}
function login($filename,$record)
{
    $file=fopen($filename,"a+");
    fwrite($file,$record."\r\n");
    fclose($file);
}
?>