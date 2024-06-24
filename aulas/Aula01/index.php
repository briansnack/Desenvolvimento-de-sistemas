<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>

<body>
    <header style="background-color: yellow;">
        <nav>
            <ul>
                <a href="index.php">Pagina inicial</a>
                <a href="calendario.html">Calendario</a>
                <a href="contato.html">Contato</a>
            </ul>
        </nav>
    </header>


    <h1>Aula de PHP - Relembrando HTML</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex consequuntur quos. Dolores, modi rerum?
        Magnam, dolores. Repellat deserunt doloremque voluptatibus vitae amet? Autem excepturi consectetur repellendus
        perspiciatis quibusdam, blanditiis nemo, tempora ad consequuntur quae exercitationem, asperiores porro. Numquam
        a ullam accusantium ea vitae doloremque explicabo? Sunt laudantium facere, hic doloribus quibusdam, aperiam
        aliquid iure, est cum quod dolorem? Reprehenderit nam facere molestias possimus nostrum, laborum a delectus
        fugiat necessitatibus cupiditate ratione voluptates sit reiciendis accusamus exercitationem voluptatem
        asperiores nesciunt hic ullam velit! Repellendus a cupiditate placeat incidunt atque expedita quisquam, mollitia
        facilis quo veniam in, rerum ab, nesciunt quam?</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro non minima dolorem beatae dicta ipsa
        explicabo rerum aliquid repellendus! Aliquam ipsum quam odio quia at deserunt quas, autem iure non doloremque.
        Perspiciatis nesciunt neque ad accusamus odit repudiandae, blanditiis, debitis sunt sapiente hic necessitatibus
        aut, ducimus fuga nostrum aperiam maiores quidem rem. Corrupti adipisci reiciendis libero incidunt cupiditate
        dolor assumenda praesentium tempore minus deserunt ipsam in maiores quaerat quia repellendus eos nihil
        consequatur similique excepturi hic, voluptate quae laboriosam. Quas suscipit, earum quibusdam aliquid fugiat
        maiores molestias dolore quae, blanditiis corrupti vel dolorem consequatur rem culpa. Voluptas, reiciendis nemo.
    </p>

    <?php
        echo "<h2>Olá Mundo!</h2>";
        // print "<h3> Também Funciona </h3>";
        $numero = 3;
        $numero2 = 5;
        $numero3 = $numero + $numero2;

        echo "-> " . $numero . " + " . $numero2 . " = " . $numero3; 
   ?>
</body>

</html>