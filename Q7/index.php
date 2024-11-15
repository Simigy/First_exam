<?php
// Convert the date string "2012-12-21" to a Unix timestamp
$dt = strtotime("2012-12-21");

// Add 1 month to the given date using strtotime() function
// and output the result in the format "Y-m-d"
echo date("Y-m-d", strtotime("+1 month", $dt))."\n";
?>
