<?php 
include_once "payment class.php";
class vodafonepay implements ipayment
{
    public $value;
    public $phonenumber;
	/**
	 *
	 * @return mixed
	 */
	function pay($value) {
        echo $value;
	}
}
?>