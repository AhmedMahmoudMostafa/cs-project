<?php
function deleteuserbyid($fileName,$id,$Separator)
{
    $file=fopen($fileName,"r+") or die("Unable to open file!");
    while(!feof($fileName))
    {
        $line = fgets($fileName);
        $ArrayLine = explode($Separator, $line);
        if ($ArrayLine[0] == $id)
        {
            $line = str_replace($line, '', $line);
	         file_put_contents($fileName, $line);
        }
    }
}
?>