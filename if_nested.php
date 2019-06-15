<?php

# nested if 

$num = 120;

if(is_int($num))
	{
		if($num< 9)
		{
			echo $num." is less than 10";
		}
		else
		{
			echo $num." is greater than 10";		
		}
		
	}
else
	{
		if(is_string($num))
		{
			echo strlen("ABCDE");
		}
	}

?>
