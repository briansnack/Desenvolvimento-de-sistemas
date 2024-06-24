<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>

<body>
    <h1> -- FOR -- </h1>

    <?php

    for ($i = 0; $i < 10; $i++) :
        echo "<br>Meu for funciona! ---- Linha: {$i} ";
        for ($j = 0; $j < 5; $j++) {
            echo "- Coluna: {$j} |";
        }
    endfor;
    ?>

    <h2> -- WHILE -- </h2>

    <?php
    $a = 0;
    while ($a < 10) {
        echo '- {$a}';
        $a++;
    }
    ?>

    <h2> -- DO WHILE -- </h2>

    <?php
    $var = 87;
    do {
        echo "<br>Número: " . $var;
        $var += 3;
    } while ($var < 100);
    ?>

    <h2> -- LISTA / ARRAY -- </h2>
    <?php
    $comidas = array("Batata", "Miojo", "Polenta");
    // $comidas = ["Batata", "Miojo", "Polenta"];
    echo print_r($comidas);
    echo "<br>";
    echo $comidas[2];
    echo "<br>";
    $comidas[3] = "Arroz";
    // $comidas[] = "30.5";
    // $comidas[] = true;
    $comidas[] = "Feijão";
    echo print_r($comidas);

    $totalComida = count($comidas);
    echo "<br>Total: {$totalComida}";


    echo "<h4>Lista de compra: </h4>";
    /*for ($i = 0; $i < $totalComida; $i++) {
        echo "<li> Item: {$i} - " . $comidas[$i];
    }
    ?>*/

    // para cada $comida dentro do array $comidas faça:
    // ( [0] => Batata [1] => Miojo [2] => Polenta [3] => Arroz [4] => Feijão )
    // Não precisa por contador
    foreach ($comidas as $comida) {
    // comidas[i]
    // comida
    echo "<li> Item: -" . $comida;
        }

        echo "<h4>Array com indice str: </h4>";
        $pessoa = array("nome" => "Luan", "idade" => 19, "esta" => "Feliz ");
        echo $pesosa["nome"];
        echo $pessoa["idade"];
        echo $pessoa["esta"];

        foreach ($pessoa as $chave => $valor) {
        echo "
    <li> - {$chave} - {$valor}";
        }

        echo "<h4>Array de Array</h4>";
        $varias_pessoas = array(
        array("nome" => "Luan", "idade" => 19, "esta" => "feliz "),
        array("nome" => "Maria", "idade" => 23, "esta" => "cansada "),
        array("nome" => "João", "idade" => 17, "esta" => "triste ")
        );
        echo print_r($varias_pessoas);
        echo "<br> <br>";

        for ($i = 0; $i < count($varias_pessoas); $i++) { echo "<br>" ; echo print_r($varias_pessoas[$i]); foreach
            ($varias_pessoas[$i] as $chave=> $valor) {
            echo "
    <li> {$chave} - {$valor}";
        }
        } ?>
</body>

</html>