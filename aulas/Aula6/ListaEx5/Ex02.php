<?php
function formulario($nome, $numeros){
    echo "<h2>{$nome}</h2>";
    echo '<form action="" method="GET">';
    
    for ($i = 1; $i <= $numeros; $i++) {
        echo "<br>"; 
        echo "<label>Número {$i}</label>";
        echo "<input name='num{$i}' type='text'> <br>";   
    }

    echo '<button type="submit">Enviar</button>';
    echo "</form>";
}

function dataPorExtenso($data){
    $partes = explode('/', $data);

    if(count($partes)!== 3){
        return NULL;
    }

    $dia = (int)$partes[0];
    $mes = (int)$partes[1];
    $ano = (int)$partes[2];

    if(!checkdate($mes, $dia, $ano)){
        return NULL;
    }

    $meses = array(
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro' 
    );

    $dataFormatada = $dia . ' de ' . $meses[$mes] . ' de ' . $ano;
    
    return $dataFormatada;
}

if (!isset($_GET['num1'])) {
    $data = $_GET['num1'];

    $dataPorExtenso = dataPorExtenso($data);

    if ($dataPorExtenso !== NULL) {
        echo "Data em formato por extenso: $dataPorExtenso";
    } else{
        echo "Data inválida!";
    }
}

formulario("Informe a data:", 1);
?>
