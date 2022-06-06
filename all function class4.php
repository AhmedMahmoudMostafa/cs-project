<?php
class paymentmethods
{
   public $record;
   public $id;
   public $methods;
   public $fileManagerobj;
   function __construct($filename)
   {
       $this->fileManagerobj=new fileManager;
       $this->fileManagerobj->fileName=$filename;
       $this->fileManagerobj->separator="~";
   }
    function add()
{
    $this->id=$this->fileManagerobj->lastid();
    $this->record= $this->id."~".$this->record;
    $data=$this->samedate();
    if($data == true)
    {
       // return 0;
    }
    else
    {
        echo $this->record;
        $this->fileManagerobj->Storerecord( $this->record);
    }

}
function searchUser($Search)
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
        echo $line ."<br>";
        $Array=explode("~",$line);
        if($Array[1]==$this->methods)
        {
            echo "hadyyyyy";
            return true;
        }
    }
    return false;
}
function readlinebyid()
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
function getRowById($id)
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
function lastid()
{
    $file=fopen($this->fileName,"r+")or die("Unable to open file!");
    $i=1;
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode($this->separator,$line);
        if($Array[0]!="")
        {
            $lastid=$Array[0];
        }
    }
    return $lastid+$i;
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
