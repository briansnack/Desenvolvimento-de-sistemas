<?php

$str = "Brasil Hexa 2006";
$str2 = "Brasil! Hexa 2006!";

$tamanho = strlen($str);
echo "Tamanho". $tamanho;
echo "<br>";

$tamanho2 = strlen($str2);
echo "Tamanho". $tamanho;
echo "<br>";

if ($tamanho != $tamanho2) {
    echo "As strings são de tamanhos diferentes";
}
?>