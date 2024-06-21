<?php 

    echo password_hash("senha124", PASSWORD_DEFAULT);

    // senha123
    // $2y$10$G5M2lWyMIKs7VGFPB3eaTOAme4e8BxF59X/RVqo2Ag3SB8OIaJrKe
    // $2y$10$pU49j7MZp0mK31S2qRQJ8OWNbzPw/vxJXRsSYN66GHUqgHn4RsXG6
    // $2y$10$79rWWNR.zShPunGlsJ1AtOK2GmfI3Pcy3iptyNaUi3PyWaR/1aU9y

    // $2y$10$lqHc/t/PTRym99bMcR45qe/2ZxRROVaI6nef8JxwNqY09VVxFfLXG
    // $2y$10$3RZj4Yjb2IfzJbI3kt4A0uya8x9LsYXOwp1aOJ.unx/MPoXP8SabG

    // $hash = '$2y$10$lqHc/t/PTRym99bMcR45Qe/2ZxRROVaI6nef8JxwNqY09VVxFfLXG';
    
    $senha = 'senhaFeliz';
    
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    if (password_verify($senha, $senhaHash)) {
        echo '<br>Password is valid!';
    } else {
        echo '<br>Invalid password.';
    }

?>