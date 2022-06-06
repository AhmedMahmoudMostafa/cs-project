<?php
include_once "payment class.php";
class fawrypay implements  ipayment
{
	public $value;
 	public $phonenumber;
 	public $fawrynumber;  
	function pay($value) {
        echo $value;
	}
    function fawrypay()
    {
        return $this->fawrynumber;
    }
}
?>
