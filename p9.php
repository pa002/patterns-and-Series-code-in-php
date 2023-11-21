<?php
$n = 5; // Number of lines

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        // Print "1" if the sum of $i and $j is even, otherwise print "0"
        echo ($j % 2 == 0) ? "1" : "0";
    }
    echo "\n";
}
?>