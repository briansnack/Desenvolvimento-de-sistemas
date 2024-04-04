<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <label for="num">Digite o primeiro número:</label>
        <input name="num1" id="num" type="text">

        <button type="submit">Enviar</button>

        <label for="num">Digite o segundo número:</label>
        <input name="num2" id="num" type="text">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
function maiorNumero($num1, $num2)
{
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}
echo "O maior número é: " . maiorNumero($num1, $num2);
?>