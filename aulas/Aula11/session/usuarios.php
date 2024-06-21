<?php 


    $usuarios = [
        ["usu" => "miggas", "nome" => "miguel", "senha" => "123"],
        ["usu" => "gdc1000", "nome" => "danilo", "senha" => "abc"],
        ["usu" => "xorza", "nome" => "gabriel", "senha" => "123jf@"],
    ];

    function verUsuarios($usr, $sen){
        global $usuarios;
        
        // echo $usr . $sen;

        for ($i=0; $i < count($usuarios); $i++) { 
            // echo "<br>" . print_r($usuarios[$i]);

            if($usr == $usuarios[$i]['usu']){
                // echo "<br>usu - igual";

                if($sen == $usuarios[$i]['senha'] ){
                    // echo "<br>senha - igual";
                    return true;
                }else{
                    // echo "<br>senha - não";
                }
            }else{}

        }
        return false;
    }

    // echo verUsuarios("gdc1000", "abac");


?>