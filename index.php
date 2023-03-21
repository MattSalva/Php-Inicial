<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arcade</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main>
    <div>
        <h1>Arcade</h1>
    </div>
        <?php
        const VALOR_MONEDAS = 10;
        $dinero = 59;
        $monedas_persona = $dinero % VALOR_MONEDAS;
        define('JUEGOS', array('Contra', 'Daytona', 'Space Invaders', 'Time Crisis'));
        echo "<div><h2>Creditos disponibles: $monedas_persona</h2></div>";
        echo "<h3>Juegos: </h3>" . JUEGOS[0] .", ". JUEGOS[1] .", ". JUEGOS[2] .", ". JUEGOS[3];
        ?>
    </main>
</body>
</html>


