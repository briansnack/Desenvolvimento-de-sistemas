<form action="" method="get">
    <label>Digite um numero:</label>
    <input type="text" name="num" id="num">

    <label>Digite o peso:</label>
    <input type="text" name="peso" id="peso">

    <button type="submit">Enviar</button>
</form>

<?php
$raio = $_GET['num'];
$peso = $_GET['peso'];
$area = 2 * M_PI * pow($raio, 2);
$perimetro = M_PI * pow($raio, 2);

echo "<p>O raio informado é: " . number_format($raio, 2, '.', ',') . "</p>";
echo "<p>Área do círculo: " . number_format($area, 2, '.', ',') . "</p>";
echo "<p>Perímetro do círculo: "  . number_format($perimetro, 2, '.', ',') . "</p>";

echo "<h3>Funções úteis </h3>";
echo "<p>";
echo "<br>Abs - Modulo: " . abs($raio);
echo "<br>Potência: " . pow($raio, 4);
echo "<br>Raiz Quadrada: " . sqrt($raio);


echo "<br>Arredondar Normal: " . round($raio);
echo "<br>Arredondar P/Baixo: " . floor($raio);
echo "<br>Arredondar P/Cima: " . ceil($raio);
echo "<br>Parte inteira: " . intval($raio);

echo "</p>";

echo "<h3>Mini Matemática </h3>";