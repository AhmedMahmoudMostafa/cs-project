<?php 
include_once "Class payment.php";
class vodafonepay implements ipayment
{
    public $value;
    public $phonenumber;
	/**
	 *
	 * @return mixed
	 */
	function pay() {
        return $this->value;
	}
}
?>