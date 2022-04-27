<?php
function Drawtable($filename)
{
    $myfiles=fopen($filename,"r+") or die("file cannot open");
    while(!feof($myfiles))
     {
     $line=fgets($myfiles);
     $ArrayLine=explode("~",$line);
     for ($i=0; $i <count($ArrayLine) ; $i++) { 
        echo "<td>". $ArrayLine[$i]."</td>";
     }
      echo "</tr>";
       
    }
    fclose($myfiles);
    
}
function lastid($filename,$separsator)
{
    if (!file_exists($filename)) {
        return 0;
    }
    $myfiles=fopen($filename,"r+") or die("error");
    $lastid=0;
    while(!feof($myfiles))
    {
    $line=fgets($myfiles);
    $ArrayLine=explode($separsator,$line);
    if ($ArrayLine[0]!="")
    {
        $lastid=$ArrayLine[0];
    }
   }
   return $lastid;  
  }
  function DeleteUser($dlt)
{
	global $fileName;
	$r=getRowById($fileName,"~",$id);
	//echo $r;
	//exit();
	DeleteRecord($fileName,$r);
}
function DeleteRecord($fileName,$record)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($record, '', $contents);
	file_put_contents($fileName, $contents);
}
?>