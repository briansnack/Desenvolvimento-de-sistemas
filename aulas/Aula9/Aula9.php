<?php 

    $cor = $_GET["cor"] ?? "233eac40";
    // $nome = $_GET["nome"] ?? "padrao";

    session_start();
    $nome = $_SESSION["nome"];
    
    $_SESSION["pessoa"] = [
        "nome" => "João",
        "idade" => 19,
    ];

    echo print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--<body style="background-color: <?php echo $cor; ?>;">-->
<body style="background-color: <?= $cor ?>;">
    
    <form action="" method="get">
        <label for="">Cor</label>
        <input type="color" name="cor" id="cor">
        <label for="">Nome</label>
        <input type="text" name="nome" id="cor" placeholder="<?= $nome ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    
        /*
        if(isset($_GET["nome"])){
            $nome = $_GET["nome"];
        } else {
            $nome = "-";
        }*/

        // -------------- IF -----------    TRUE ------   FALSE
        // $nome = isset($_GET["nome"]) ? $_GET["nome"] : "no name";

        
        



        
        echo "Oi {$nome}.";

    ?>


</body>
</html>