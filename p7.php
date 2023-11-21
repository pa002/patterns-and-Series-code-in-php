<?php
$n = 5; // Number of lines

for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo $j;
    }
    echo "\n";
}
?>