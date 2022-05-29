<?php
class course
{
   public $record;
   public $courseName;
   public $courseCode;
   public $fileManagerobj;
   function __construct($filename)
   {
       $this->fileManagerobj=new fileManager;
       $this->fileManagerobj->fileName=$filename;
       $this->fileManagerobj->separator="~";
   }
    function add()
{
    $this->record=$this->record." ";
    $data=$this->samedate( $this->fileManagerobj->fileName,$this->fileManagerobj->separator,$this->courseName);
    if($data == true)
    {
        echo"invalid course Name used before";
    }
    else
    {
        echo $this->record;
        $this->fileManagerobj->Storerecord( $this->record);
    }
}
function searchcurseName($Search)
{
    $file=fopen($this->fileManagerobj->fileName,"a+")or die("Unable to open file!");
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
}
function samedate()
{
    $file=fopen($this->fileManagerobj->fileName,"r+") or die("Unable to open file!");
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        $i= $this->courseName;
        if($Array[1]==$this->courseName)
        {
            return true;
        }
    }
}
function readlinebycourseName()
{
    $myfile = fopen($this->fileManagerobj->fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) 
    {
        $line = fgets($myfile);
        $Array = explode($this->fileManagerobj->separator, $line);
        if ($Array[1] ==$this->courseName)
        {
            return $line;
        }
    }
    return false;
} 
function readlinebycoursecode()
{
    if (!file_exists($this->fileManagerobj->fileName))
    {
        return 0;
    }
    $myfile = fopen($this->fileManagerobj->fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) 
    {
        $line = fgets($myfile);
        $ArrayLine = explode($this->fileManagerobj->separator, $line);
        if ($ArrayLine[0] == $this->id)
        {
            return $line;
        }
    }
    return false;
} 
function getRowBycourseCode($id)
{
	if ( !file_exists( $this->fileManagerobj->fileName) ) {
       return 0;
      }		
	
	$myfile = fopen( $this->fileManagerobj->fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($this->fileManagerobj->separator,$line);
  		
  		if ($ArrayLine[0]==$id)
  		{ 
          return $line;
		}	
	}
	return False;
}
}
class fileManager
{
    public $fileName;
    public $separator;
    function storerecord($record)
{
    $file=fopen($this->fileName,"a+");
    echo $record;
    fwrite($file,$record."\r\n");
    fclose($file);
}
function del($record)
{	
    $contents = file_get_contents($this->fileName);
	$content = str_replace($record, '', $contents);
	file_put_contents($this->fileName, $content);
}
function update($record,$update)
{	
    $contents = file_get_contents($this->fileName);
	$content = str_replace($record, $update."\r\n", $contents);
	file_put_contents($this->fileName, $content);
}
}
?>
