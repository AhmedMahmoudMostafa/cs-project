<?php 
include_once "observer.php";
 class updateobserver implements  iobserver
 {
     public $static;
	function __construct() {
        
	}
    function update($obj)
    {
        echo "update";
    }
}
?>