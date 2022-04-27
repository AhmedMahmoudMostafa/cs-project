<?php
function create($coursename)
{
    $myfile = fopen("courses.txt","r+") or die("the file is not there!!!!!!!!!");
    $ct =0;
    while (!feof($myfile))
    {
        $line = fget($myfile);
        $ct++;

    } 
    fwrite($myfile,$ct."~".$coursename)  ;
    fclose($myfile);
}
function read()
{
   $myfile=fopen("courses.txt","r+") or die("the file is not there!!!!!!!!!");
   while(!feof($myfile))
   {
         $line = fget($myfile);
         $echo $line;
   }
   fclose($myfile);
}
function delete($id)
{
    $myfile=fopen("courses.txt","r+") or die("the file is not there!!!!!!!!!");
    while(!feof($myfile))
    {
        if($line_splitted[0]==$id)
        {
            $delete $coursename;
        }
    }
    close($myfile);
}
function update($id,$coursename)  //id and new coursename 
{  
    $myfile=fopen("courses.txt","r+") or die("the file is not there!!!!!!!!!");
    while(!feof($myfile))
    {
        $line = fget($myfile);
        $line_splitted = explode("~",$line);
        if($line_splitted[0]==$id)
        {
            $line_splitted[1] = $coursename;
        }
    }
    close($myfile);
}
?>