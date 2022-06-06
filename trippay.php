<?php 
include_once "payment class.php";
class trippay
{
    public $strategy;
    public $value;
    public function __construct(ipayment $strategy)
    {
        $this->strategy = $strategy;
    }
    function Dpay()
    {
        echo $this->strategy->pay($this->value);
        //return $this->strategy->pay();

    }
}
?>