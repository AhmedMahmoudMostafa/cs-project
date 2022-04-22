<?php
function Encrypt($paasword, $Key, $Result)
{
    for ($i = 0; $i < strlen($paasword); $i++) {
        $c = chr(ord($paasword[$i]) + $Key + $i);
        $Result .= $c;
    }
    return $Result;
}
function add($email,$name,$password,$DoB,$user,$usertype,$fileName)
{
    $id=lastid($fileName,"~");
    $record= $id."~".$name."~".$email."~".$user."~".MD5($password)."~" .$usertype."~"."~".$DoB;
    $data=samedate($fileName,"~",$email);
    if($data == true)
    {
        echo"invalid email used befor";
    }
    else
    {
        Storerecord($fileName, $record);
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
        if ($i >= 0 && $i != null) 
        {

            return $line;
        }
    }
    fclose($file);
    return false;
}
function lastid($fileName,$sapaertor)
{
    $file=fopen($fileName,"r+")or die("Unable to open file!");
    $i=1;
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        if($Array[0]!="")
        {
            $lastid=$Array[0];
        }
    }
    return $lastid+$i;
}
function samedate($fileName,$sapaertor,$email)
{
    $file=fopen($fileName,"r+") or die("Unable to open file!");
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        $Email=$Array[2];
        if($Email==$email)
        {
            return true;
        }
    }
}
?>