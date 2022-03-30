<?php
function Encrypt($paasword, $Key, $Result)
{
    for ($i = 0; $i < strlen($paasword); $i++) {
        $c = chr(ord($paasword[$i]) + $Key + $i);
        $Result .= $c;
    }
    echo $Result;
    return $Result;
}
function add($email,$name,$c,$DoB,$fileName)
{
    $record= $email ."~".$name."~".$c."~".$DoB;
    Storerecord($fileName, $record);
    if (searchUser($fileName, $email,$Search="~") == false) 
    {
        Storerecord($fileName, $record);
        return true;
    } else {
        return false;
    }
}
function storerecord($fileName,$record)
{
    
    $file=fopen($fileName,"a+");
    fwrite($file,$record."\r\n");
    fclose($file);
}
function Decrypt($password, $Key,$Result)
{
    for ($i = 0; $i < strlen($password); $i++) {
        $c = chr(ord($password[$i]) - $Key - $i);
        $Result .= $c;
    }
    return $Result;
}

function searchUser($fileName,$Email,$Search)
{
    $file=fopen($fileName,"a+")or die("Unable to open file!");
    while (!feof($file))
    {
        $line = fgets($file);
        $i = strpos($line, $Search);
        echo $i;
        if ($i >= 0 && $i != null) 
        {

            return $line;
        }
    }
    fclose($file);
    return false;
}
?>