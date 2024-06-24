<?php
// Verifica se foi enviado um valor de cor
if(isset($_POST['cor'])){
    $corSelecionada = $_POST['cor'];
    // Define o estilo inline para o corpo da página com a cor selecionada
    echo '<body style="background-color: ' . $corSelecionada . ';">';
} else {
    // Se nenhuma cor foi selecionada, mantém a cor padrão (branca)
    echo '<body>';
}

echo '<h2>Selecione uma cor para alterar o fundo da página:</h2>';
echo '<form method="post">';
echo '<label for="cor">Cor:</label>';
echo '<input type="color" id="cor" name="cor">';
echo '<input type="submit" value="Alterar Cor">';
echo '</form>';

?>