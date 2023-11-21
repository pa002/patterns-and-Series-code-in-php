<?php
$n = 10; // The number of Fibonacci numbers to generate

$a = 0; // First number in the sequence
$b = 1; // Second number in the sequence

echo "Fibonacci Series:\n";

for ($i = 0; $i < $n; $i++) {
    echo $a . " ";

    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}

?>
