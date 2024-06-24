<?php
function formulario($mtd, ...$camposForm){
    echo "<form action=\"\" method=\"{$mtd}\">";

    for ($i= 0; $i < count($camposForm); $i++){
    $strCampo = ucfirst(strtolower($camposForm[$i]));
    echo '<label for="">'. $strCampo . '</label>';
    echo '<input type="text" name="$strCampo" id="">';
    echo "<br>";        
    }
    echo '<input type="submit" value="Enviar">';    
    echo '</form>';  
    }
?>