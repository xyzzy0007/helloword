<?php
# is_int function

$x=100;
echo is_int($x);
echo "<br>";


$check = 12345;
if(is_int($check))
{
	echo $check." Int value <br>";
}
else
{
	echo $check." not int value <br>";	
}

?>