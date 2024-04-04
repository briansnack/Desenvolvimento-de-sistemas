<?php
    declare(stric_types=1);
    function nomeBonito(){
        echo "<p>Testando minha função bonita!</p>";
    }

    nomeBonito();
    function criaTitulo($texto){
        echo "<h1>. $texto . </h1>";        
    }

    criaTitulo("Titulo Aula 5 - Funções");

    function tituloLegal($texto){
        echo "<h2>#########################</h2>";
        echo "<h2>## " . $texto . " ##</h2>";
        echo "<h2>#########################</h2>";
    }

    tituloLegal("Calcular Médias");

    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;
        if($media >= 7){
            echo "<p>O aluno(a) {$nome} foi aprovado com média {$media}</p>";
        } else{
            echo "<p>O aluno(a) {$nome} foi reprovado com média {$media}</p>";
        }
    }

    calcularMedia("Ryan", 6.0, 4.0);
    calcularMedia("Mateus", 5.0, 10.0);
    calcularMedia("Ryan", 8.0, 7.0);

    function somar($a, $b){
        $soma = $a + $b;
        echo "<li> {$a} + {$b} = {$soma}";
    }

    function somarNumeros(...$numeros){
        // echo print_r($numeros);
        $soma = 0;
        echo "<li>";

        for ($i=0; $i < count($numeros) ; $i++) { 
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }
    
        echo " = {$soma}";
    }

    echo "Lista de somas";
    somar(4, 7);
    somar(19, 22);
    somar(1, 97);
    somar(7, 8);

    echo "<br><br>";
    somarNumeros(3, 4, 10, 18, 22, 34, 59);
    somarNumeros(3, 4, 34, 59);
    somarNumeros(3, 4, 10, 22, 4, 5);

    function seila($nome, $numero, $texto, ...$coisas){
        echo "<br>";
        // echo print_r($coisas);
        echo var_dump($coisas);
    }

    seila("Nome" , 30, "texto", 10, "outro texto", 5, 19.3, true, false, "texto");

    tituloLegal("Outras Funções");

    $verdadeiro = true;
    if($verdadeiro){
    function calcular($nome, $ano){
        $idade = 2024 - $ano;
        echo "<p>O {$nome} tem {$ano} anos.";
        }
    }
    
    if($verdadeiro){
    calcular("José", 54);
    echo "\n";
    }

    function naoFacoIdeia(){
        echo "<br> não sei";
        function queijo(){
        echo "<br> parmesão";
        }
    }

    // naoFacoIdeia();
    // queijo();

    function petersoma(&$num){
        $num += 5;
        echo "<br> Num - {$num}"; 
    }

    $var1 = 10;
    echo "<br> Var 1 - {$var1}";
    petersoma($var1);
    echo "<br> Var 1 - {$var1}";
    echo "<br>";

    function subtracao($a=10, $b=5){
        $sub = $a - $b;
        echo "<li> {$a} - {$b} = {$sub}";
    }

    subtracao(10, 5);
    subtracao(50);
    subtracao(74, 4);
    echo "<br>";

    function divisao($num1, $num2){
        echo var_dump($num1);
        echo var_dump($num2);
        $res = $num1 / $num2;
        return $res;
    }

    // $div = divisao(10,5);
    $div = divisao(70 , 5); 
    echo "Conta: " . $div;

    echo "<br><br>";

    function comida(){
        echo "Estou com fome";
    }

    $fome = "comida";
    $fome();

    $tit = "tituloLegal";
    $tit("NOME");

    function conta($a, $b, &$resposta){
        $resposta = $a + $b;
    }

    $resp = 0;
    conta(33, 5, $resp);

    echo "<br>Resposta: " .$resp;
?>