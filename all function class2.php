<?php
class usertype
{
   public $record;
   public $id;
   public $type;
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
        echo " invalid type";
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
        if($Array[1]==$this->type)
        {
            echo "ahmmedddddd";
            return true;
        }
    }
    return false;
}
function samedatelogout()
{
    $file=fopen($this->fileManagerobj->fileName,"r+") or die("Unable to open file!");
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        $email=$Array[1];
        if($email==$this->email)
        {
            return $Array[0];
        }
    }
    return -1;
}
function readlinebyemail()
{
    $myfile = fopen($this->fileManagerobj->fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) 
    {
        $line = fgets($myfile);
        $Array = explode($this->fileManagerobj->separator, $line);
        if ($Array[1] ==$this->email)
        {
            return $line;
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
function Login()
{
    $myfile=fopen($this->fileManagerobj->fileName,"r+") or die("Unable to open file!");
    while(!feof($myfile)) 
	{
        $line=fgets($myfile);
        $Array=explode($this->fileManagerobj->separator,$line);
        $email=$Array[1];
        $password=$Array[3];
        $id=$Array[0];
        if($this->email==$email)
        {
            echo $this->password;
            if($password==md5($this->password))
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
function Encrypt($Key, $Result)
{
    for ($i = 0; $i < strlen($this->password); $i++) {
        $c = chr(ord($this->password[$i]) + $Key + $i);
        $Result .= $c;
    }
    return $Result;
}


function Decrypt( $Key,$Result)
{
    for ($i = 0; $i < strlen($this->password); $i++) {
        $c = chr(ord($this->password[$i]) - $Key - $i);
        $Result .= $c;
    }
    return $Result;
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
