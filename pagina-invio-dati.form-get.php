<?php

$testo = $_GET ['testo'];
$parola = $_GET ['parola'];

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Dati ricevuti dal form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Dati ricevuti</h1>
    <h3>Testo: <?php echo $testo ?></h3>
    <h3>Frase: <?php echo $parola ?></h3>
    </body>
</html>