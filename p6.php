<?php
$n = 5; // Number of lines
$count = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count;
        $count++;
    }
    echo "\n";
}
?>