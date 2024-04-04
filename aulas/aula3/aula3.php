<html>

<body>
    <form action="" method="GET"></form>
    <label for="">Em que ano voce nasceu</label>
    <input type="text" name="ano" id="ano">

    <button type="submit">Enviar</button>

    <?php
    $ano = $_GET['ano'];
    $idade = 2024 - $ano;

    echo "Sua idade: " . $idade . "<br>";
    if ($idade > 18 && $idade < 70){
        echo "Vc precisa votar!";
    } else if($idade == 18){
        echo "Voce pode votar e dirigir";
    } 
    else if(($idade > 18 && $idade < 18) || $idade < 70){
        echo "Voce pode votar";
    }
     else {
        echo "Espere mais um pouco";
    }
    ?>
</body>

</html>