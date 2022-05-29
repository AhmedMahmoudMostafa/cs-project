<?php
include_once "Class payment.php";
class fawrypay implements ipayment
{
 public $value;
 public $phonenumber;
 public $fawrynumber   
	/**
	 *
	 * @return mixed
	 */
	function pay() {
        return $this->value;
	}
    function fawrypay()
    {
        return $this->fawrynumber;
    }
}
?>
