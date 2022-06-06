<?php
include_once "payment class.php";
class cashpayment implements ipayment
{
    public $value;
	function pay($value) {
		echo $value;
	}
}
?>