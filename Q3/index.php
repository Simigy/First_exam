<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

echo "Unsorted array is: ";
echo "<br />";
print_r($array);


for ($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {

        if ($array[$i] > $array[$i + 1]) {   // 4 > 3
            $temp = $array[$i + 1];          // $temp = 3
            $array[$i + 1] = $array[$i];     // $array[$i+1] = 4
            $array[$i] = $temp;              // $array[$i] = 3
        }
    }
}
echo "<br /><br>";
echo "Sorted Array in ascending order is: ";
echo "<br />";
print_r($array);


for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - 1; $j++) {

        if ($array[$j + 1] > $array[$j]) {      // 7 > 6
            $temp = $array[$j + 1];             // $temp = 7
            $array[$j + 1] = $array[$j];        // $array[$i+1] = 6
            $array[$j] = $temp;                 // $array[$i] = 7
        }
    }
}
echo "<br /> <br>";
echo "Sorted Array in descending order is: ";
echo "<br />";
print_r($array);
