<?php
function odd($var)
{
   // returns whether the input integer is odd
   return($var & 1);
}

function even($var)
{
   // returns whether the input integer is even
   return(!($var & 1));
}

$arr = [1, 2, 3, 4, 5];


print_r(array_filter($arr, "odd"));

?>
