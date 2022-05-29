<?php
include_once "Class payment.php";
class visa implements ipayment
{
    public $value;
    public $cardNumber;
    public $expiration;
    public $password;
	function pay() {
        return $this->value;
	}
    function payvnumber()
    {
        return $this->cardNumber;
    }
}
?>