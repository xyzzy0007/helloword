<?php
class greeting
{
	public $str = "<br> Hello Java Point ";
		function show_greeting()
		{	return $this->str;		
		}
}

$obj = new greeting;
var_dump($obj);
\
?>