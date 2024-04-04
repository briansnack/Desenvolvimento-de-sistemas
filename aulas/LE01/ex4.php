<?php 
    $nota1 = 6;
    $nota2 = 2;
    $nota3 = 10;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    echo "Média: " . $media . "<br>";
    if($media >= 6){
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }

?>