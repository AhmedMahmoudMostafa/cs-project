<?php
class username
{
   public $record;
   public $email;
   public $id;
   public $password;
   public $fileManagerobj;
   function __construct($filename)
   {
       $this->fileManagerobj=new fileManager;
       $this->fileManagerobj->fileName=$filename;
       $this->fileManagerobj->separator="~";
   }
    function add($email)
{
    $id=lastid($this->fileManagerobj->fileName,"~");
    $record= $this->record;
    $data=samedate($this->fileManagerobj->fileName,"~",$this->email);
    if($data == true)
    {
        echo"invalid email used befor";
    }
    else
    {
        Storerecord($this->fileManagerobj->fileName, $this->record);
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
        $Array=explode("~",$line);
        echo $this->email ."<br>";
        if($Array[2]==$this->email)
        {
            return true;
        }
    }
}
function readlinebyemail()
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
        if ($ArrayLine[2] ==$this->email)
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
function getRowById()
{
	
	if ( !file_exists($this->fileManagerobj->fileName) ) {
       return 0;
      }		
	
	$myfile = fopen($this->fileManagerobj->fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($this->fileManagerobj->separator,$line);
  		
  		if ($ArrayLine[0]==$this->id)
  		{
			del($myfile,$line);
		}
  		
	}
	return False;

}
function Login()
{
    $file=fopen($this->fileManagerobj->fileName,"r+") or die("Unable to open file!");
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode("~",$line);
        $email=$Array[2];
        $password=$Array[4];
        $id=$Array[0];
        if($this->email==$email)
        {
            if($password==$this->passWord)
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
    for ($i = 0; $i < strlen($this->paasword); $i++) {
        $c = chr(ord($this->paasword[$i]) + $Key + $i);
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
    fwrite($file,$record."\r\n");
    fclose($file);
}
function lastid()
{
    $file=fopen($this->filename,"r+")or die("Unable to open file!");
    $i=1;
    while(!feof($file))
    {
        $line=fgets($file);
        $Array=explode($this->sapaertor,$line);
        if($Array[0]!="")
        {
            $lastid=$Array[0];
        }
    }
    return $lastid+$i;
}
function login($record)
{
    $file=fopen($this->fileName,"a+");
    fwrite($file,$record."\r\n");
    fclose($file);
}
function del($fileName,$record)
{
    $contents = file_get_contents($this->fileName);
    echo $contents;
	$content = str_replace($record."/r/n", '', $contents);
	file_put_contents($fileName, $content);
    echo $contents;
}
}
?>
