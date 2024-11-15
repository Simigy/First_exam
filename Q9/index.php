<?php
// Define the regular expression pattern to match 'fox' preceded by a word character and followed by a space
$pattern = '/[^\w]fox\s/';

// Use preg_match function to check if the pattern matches the given string
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
    // If 'fox' is found in the string, echo that it is present
    echo "'fox' is present..."."\n";
} else {
    // If 'fox' is not found in the string, echo that it is not present
    echo "'fox' is not present..."."\n";
}
?>
