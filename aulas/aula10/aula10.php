<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mostrarFormulario = true;
    $usuarios = [
        ["usu" => "miggas", "nome" => "miguel", "senha" => "123"],
        ["usu" => "gdc1000", "nome" => "danilo", "senha" => "abc"],
        ["usu" => "xorza", "nome" => "gabriel", "senha" => "123jf@"],
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

    $loginSucesso = false;

    for ($i=0; $i < count($usuarios); $i++) { 
        if ($usuarios[$i]["usu"] == $usuario && $usuarios[$i]["senha"] == $senha){
            $loginSucesso = true;   
            echo "Bem vindo " . $usuarios[$i]["nome"];
            $mostrarFormulario = false;
            break;
        }
    }
    if (!$loginSucesso) {
        echo "Login inválido";
    }
}
?>
<?php if($mostrarFormulario): ?>
    <h1>Desafio</h1>

    <form action="" method="post">

    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="">

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="">

    <input type="submit" value="Enviar">

    </form>
<?php endif ?>

</body>
</html>


    