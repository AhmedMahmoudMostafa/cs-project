<?php
class subject 
{
    private $obs =array();
    private $state;
    public function getstate(){
        return $this->state;
    }
    public function setstate($state)
    {
        $this->state=$state;
        $this->notifyall();
    }
    public function attach($obs)
    {
        array_push($this->obs,$obs);
    }
    public function notifyall()
    {
        foreach($this->obs as $obs)
        {
            $obs->update();
        }
    }
}

?>