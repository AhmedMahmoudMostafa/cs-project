<?php
include_once "O class tripnotify.php";
class  tripnotify implements  itripnotify
{
 
    public $obj=array();
     public $state;
    public function getstate($state)
    {
        return $this->state;
    }
    public function setstate($state)
    {
        $this->state=$state;
        $this->notifyall();
            
    }
    function notifyall()
    {
        foreach($this->obj as $obs)
        {
            $obs->update();
        }
    }
    public function attach($obs)
    {
        array_push($this->obj,$obs);
    }
    
    }
?>