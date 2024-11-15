<?php
// Returns maximum in array
function getMax($array) 
{
   $n = count($array); 
   $max = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;       
}



// Driver code
$array = array(10,30,20);
echo "The max. number is : " .(getMax($array));

?>