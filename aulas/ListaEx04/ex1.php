<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01</title>
</head>
<body>
<h1>Números Inteiros</h1>
<p>Veja abaixo os números inteiros gerados</p>
<?php
$numeros = array(1 , 2, 3, 4, 5);
echo "Números do vetor:\n";
foreach($numeros as $numero){
    echo $numero . "\n";
}
?>
</body>
</html>

