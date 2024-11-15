
<?php

function printDiamonds($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        
        // Print spaces
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        
        // Print stars
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "<br> ";
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
        
        // Print spaces
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }

        // Print stars
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "<br> ";
    }
}

// Driver code
$row = 3;
printDiamonds($row);

echo "<hr>";

?>


<?php
// Define the number of rows
$n = 5;

// Loop to print the upper half of the diamond
for($i=1; $i<=$n; $i++)
{
    // Loop to print the spaces and stars for each row
    for($j=1; $j<=$i; $j++)
    {
        // Print a star surrounded by spaces
        echo ' * ';
    }
    // Move to the next line after printing each row
    echo '<br>';
}

// Loop to print the lower half of the diamond
for($i=$n; $i>=1; $i--)
{
    // Loop to print the spaces and stars for each row
    for($j=1; $j<=$i; $j++)
    {
        // Print a star surrounded by spaces
        echo ' * ';
    }
    // Move to the next line after printing each row
    echo '<br> ';
}
echo "<hr>";
?>


<?php
    for($i=0;$i<=4;$i++){
        for($j=4;$j>=$i;$j--){
            echo '&nbsp;';
        }
        for($k=0;$k<=$i;$k++){
            echo '  *  ';
        }
        echo '<br/>';
    }
    for($i=0;$i<=3;$i++){
        for($k=0;$k<=$i+1;$k++){
            echo '&nbsp;';
        }
        for($j=3;$j>=$i;$j--){
            echo '  *  ';
        }
        echo '<br/>';
    }
?>
