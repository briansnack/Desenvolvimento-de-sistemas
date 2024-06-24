<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Cor</title>
</head>

<style>
    body {

    font-family: Arial, Helvetica, sans-serif;

    text-align: center;

    }
</style>

    <body>

        <form action="" method="get">
            <label for="cor">Selecione uma cor:</label>
            <input type="color" name="cor" id="cor">
            <input type="submit" value="Alterar Cor">
        </form>



        <?php

            $cor_selecionada = $_GET['cor'];
            echo "<style>body {background-color: $cor_selecionada;}</style>"

        ?>

    </body>

</html>