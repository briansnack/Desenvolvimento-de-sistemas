<?php
function calcularFatorial($n) {

    if ($n < 0) {
        return "Erro: Não é possível calcular o fatorial de um número negativo.";
    } elseif ($n == 0 || $n == 1) {
        return 1; 
    } else {
        $fatorial = 1;
        for ($i = $n; $i >= 1; $i--) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

$num = 1654;

$resultado = calcularFatorial($num);

echo "$num! = ";


for ($i = $num; $i >= 1; $i--) {
    echo $i;
    if ($i > 1) {
        echo ".";
    }
}

echo " = $resultado\n";
?>
