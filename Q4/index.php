<?php

function calculateAverage($array) {
    return array_sum($array) / count($array);
}


$arr = [10, 20, 30, 40, 50];
$average = calculateAverage($arr);

echo "The average is: " . $average;

echo "<br /><br>";
?>



<?php
$a[] = '56';
$a[] = '66';
$a[] = '';
$a[] = '58';
$a[] = '85';
$a[] = '';
$a[] = '';
$a[] = '76';
$a[] = '';
$a[] = '57';
if(count($a)) {
	$a = array_filter($a);
	echo "The average is: " . $average = array_sum($a)/count($a);
}
