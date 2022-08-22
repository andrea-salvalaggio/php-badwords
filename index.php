<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <p>
        <?php
            // Creo una stringa
            $string = "A me mi piace la nutella";

            // Sostituisco la parola "mi" con quella inserita nella query string che viene recuperata tramite metodo GET
            $stringWordChange = str_replace('mi', $_GET["word"], $string);

            // Stampo a schermo la stringa
            echo $string . "&nbsp; --> ";

            // Stampo a schermo la lunghezza della stringa
            echo strlen($string);
        ?>
    </p>
    <p>
        <?php
            // Stampo a schermo la nuova stringa
            echo $stringWordChange . "&nbsp; --> ";

            // Stampo a schermo la nuova lunghezza della stringa
            echo strlen($stringWordChange);
        ?>
    </p>
</body>
</html>