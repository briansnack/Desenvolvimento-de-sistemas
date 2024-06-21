<?php 

    session_start();

    $_SESSION["nome"] = "Miguel";

    echo session_id();

    echo print_r($_SESSION);

    // session_unset();
    // session_destroy();



?>