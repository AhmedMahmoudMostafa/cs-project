<?php
include_once "payment class.php";
class visa implements ipayment
{
    public $value;
    public $cardNumber;
    public $expiration;
    public $password;
	function pay($value) {
        echo $this->cardNumber;
        echo $value;
	}
    function payvnumber()
    {
        return $this->cardNumber;
    }
}
?>