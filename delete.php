<?php
echo $_GET["ID"];
$id=$_GET["ID"];
getRowById("user data.txt","~",$id);
function getRowById($fileName,$Separator,$id)
{
	
	if ( !file_exists($fileName) ) {
       return 0;
      }		
	
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
  		
  		if ($ArrayLine[0]==$id)
  		{
			del($myfile,$line);
		}
  		
	}
	return False;
}
function del($fileName,$record)
{
    $contents = file_get_contents($fileName);
    echo $contents;
	$content = str_replace($record."/r/n", '', $contents);
	file_put_contents($fileName, $content);
    echo $contents;
}
?>