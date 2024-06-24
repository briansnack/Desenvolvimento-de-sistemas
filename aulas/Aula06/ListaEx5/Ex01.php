<?php
function soma($num1, $num2, $num3){
    return $num1 + $num2 + $num3;
}
function formulario($nome, $numeros){
    echo "<h2> {$nome} </h2>";
    echo '<form action="" method="GET">';
    
    for ($i = 1; $i <= $numeros; $i++) {
        echo "<br>"; 
        echo "<label> Numero {$i}</label>";
        echo "<input name='num{$i}' type='text'> <br>";   
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

    formulario("Ex01", 3);

if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $soma = soma($num1, $num2, $num3);
    echo "<p>A soma é: {$soma}</p>";
}
 
?>