<?php
include_once  "obs class.php";
include_once "sub.php";
class noftfiy extends obs
{
	/**
	 */
	function __construct($u) {
        $this->u=$u;
        $this->u->attach($this);
	}
	/**
	 *
	 * @param mixed $o
	 *
	 * @return mixed
	 */
	function update() {
        echo $this->u->getstate();
	}
}
?>