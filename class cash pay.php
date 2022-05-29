<?php
include_once "Class payment.php";
class cashpayment implements ipayment
{
    public $value;
	
	/**
	 *
	 * @return mixed
	 */
	function pay() {
        return $this->value;
	}
}
?>