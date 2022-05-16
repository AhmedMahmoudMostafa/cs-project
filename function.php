<?php
/*
class activity
{
public $id;
public $coursecode;
public $coursename;
public $filename="course activity.TXT";
function storeactivity($filemanagerObj)
{

    $id=$filemanagerObj->getlastid("~")+1;
   $record=$id."~".$Act;
$filemanagerObj->strorrecord($record);
}
}
*/

 class filemanager
{
    public $FileName;
    public $separator;
    function strorrecord($record)
    {


        $myfile = fopen($this->FileName, "a+");
fwrite($myfile,$record."\r\n");
fclose($myfile);
    }
function getlastid()
{
if(!file_exists($this->FileName))
{
    return 0;
}
$myfile=fopen($this->FileName,"r+") or die ("unable to the file!");
 while(!feof($myfile))
 {
    $line =fgets($myfile);
    $ArrayLine=explode($this->separator,$line);
    if($ArrayLine[0]!="")
    {

    $lastid=$ArrayLine[0];
    }
 }
return $lastid;
}


 function darwfile()
 {
  $myfile=fopen($this->FileName,"r+") or die("unable to open file");
  while(!feof($myfile))
   {
    $line=fgets($myfile);
     echo "<tr>";
    $ArrayLine=explode($this->separator,$line);
      for($i=0;$i<count($ArrayLine);$i++)
      {
       echo "<td> ".$ArrayLine[$i]."</td>";
      }
       echo "</tr>";
   } 
  fclose($myfile);
 }
}
?>