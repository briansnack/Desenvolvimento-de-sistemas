<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vetor1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
        $vetorPar = array();
        $vetorImpar = array();
        
        for ($i = 0; $i < count($vetor1); $i++){
            if($vetor1[$i] %2 == 0){
                $vetorPar[] = $vetor1[$i];
            } 
            else{
                $vetorImpar[] = $vetor1[$i];
            }
        }

        echo "Vetor 1: " .implode(", ", $vetor1). "<br>";
        echo "Vetor Par: " . implode(", ", $vetorPar) . "<br>";
        echo "Vetor Impar: " . implode(", ", $vetorImpar). "<br>";
    ?>
</body>
</html>