<?php
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
			del($fileName,$line);
		}
  		
	}
	return False;
}
function del($file,$record)
{	
    $contents = file_get_contents($file);
	$content = str_replace($record, '', $contents);
	file_put_contents($file, $content);
}
?>