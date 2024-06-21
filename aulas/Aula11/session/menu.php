<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        session_start();
        // echo session_id();
        // echo "<br><br>";

        // echo print_r($_SESSION);
        // echo print_r($_POST);

        require_once "usuarios.php";

        $usuario = $_SESSION['usu'] ?? null;

        if(!is_null($usuario)){
            echo "Usuario Já Logado";
            echo "<br> Bem vindo " . $usuario;

            

        }else{
            
            $usuario = $_POST['usuario'] ?? null;
            $senha = $_POST['senha'] ?? null;

            if(is_null($usuario) && is_null($senha)){
                echo "Fazer Login";
                include_once "form-login.php";
            }else{

                // echo "<br>$usuario <br> $senha";

                if(verUsuarios($usuario, $senha)){
                    echo "-- Fazendo Login";
                    echo "<br>Bem vindo...";
                    $_SESSION['usu']  = $usuario;
                }else{
                    echo "-- Tente Novamente";
                    include_once "form-login.php";
                }

            }
        }
    
    
    ?>

    <a href="logout.php">sair</a>

</body>
</html>