<?php

# s of digit
$n =123;
$s=0;
$r=0;

for($i=0;$i<=strlen($n);$i++)
{
$r=$n%10;
$s=$s +$r;
$n = $n/10;
}

echo "Total of digit is $s";
?>