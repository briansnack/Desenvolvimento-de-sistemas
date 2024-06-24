<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vetor = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
        $consoantes = array();
        $numConsoantes = 0;
        
        foreach ($vetor as $letra){
            if (!in_array($letra, array('a', 'e', 'i', 'o', 'u'))){
                $consoantes[] = $letra;
                $numConsoantes++;
            }
        }

        echo "Número de consoantes: " . $numConsoantes . "<br>";
        echo "Consoantes: " . implode(", ", $consoantes) . "<br>";
    ?>
</body>
</html>
