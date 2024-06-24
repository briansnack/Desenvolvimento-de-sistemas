<?php
function fibonacci($n) {
    $fibonacci_series = array();

    $fibonacci_series[] = 1;
    $fibonacci_series[] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci_series[$i] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
    }
    
    return $fibonacci_series;
}
$n = 189;

    $fibonacci_series = fibonacci($n);
    echo "Série de Fibonacci até o $n-ésimo termo:\n";
    echo implode(", ", $fibonacci_series) . "\n";

?>
