<?php
session_start();
?>
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
        if ($_POST && isset($_POST['reset'])){
            if($_POST['reset'] == true)
                $_SESSION['creditos'] = 10;
            unset($_POST['reset']);
        }

        const VALOR_MONEDAS = 10;
        const DINERO = 60;
        const JUEGOS = array('Contra', 'Daytona', 'Space Invaders', 'Time Crisis');

        if (!isset($_SESSION['creditos'])) {
            $monedas_persona = DINERO % VALOR_MONEDAS;
            $_SESSION['creditos'] = $monedas_persona;
        }
        else {
            echo "<div><h2>Creditos disponibles: {$_SESSION['creditos']}</h2></div>";
        }
        ?>
    <ul>
        <?php
        for ($i = 0; $i < sizeof(JUEGOS); $i++){
            echo "<li>". JUEGOS[$i] . "</li>";
        }
        ?>
    </ul>
    <form action="" method="post">
        <div>
        <input type="radio" id="contra" value="contra" name="juego"/>
        <label for="contra">Contra</label>
        </div>
        <div>
        <input type="radio" id="daytona" value="daytona" name="juego"/>
        <label for="daytona">Daytona</label>
        </div>
        <div>
        <input type="radio" id="space-invaders" value="space-invaders" name="juego"/>
        <label for="space-invaders">Space Invaders</label>
        </div>
        <div>
        <input type="radio" id="time-crisis" value="time-crisis" name="juego"/>
        <label for="time-crisis">Time Crisis</label>
        </div>
        <div>
        <button type="submit">Jugar!</button>
        </div>
    </form>

    <?php


    if ($_SESSION['creditos'] > 0){
        if ($_POST){
            switch ($_POST['juego']){
                case 'contra':
                    echo "
                    <div>
                         <h3>JUGANDO AL Contra</h3>
                    </div>
                    ";
                    break;

                case 'daytona':
                    echo "
                    <div>
                         <h3>JUGANDO AL Daytona</h3>
                    </div>
                    ";
                    break;

                case 'space-invaders':
                    echo "
                    <div>
                         <h3>JUGANDO AL Space Invaders</h3>
                    </div>
                    ";
                    break;

                case 'time-crisis':
                    echo "
                    <div>
                         <h3>JUGANDO AL Time Crisis</h3>
                    </div>
                    ";
                    break;
            }
            $_SESSION['creditos']--;

        }
    }
    else {
        echo "<h3>¡No tienes mas creditos!</h3>";
        echo "<form action='' method='post'>
             <button type='submit' name='reset' value='true'>Reset credits</button>   
             </form>";
    }

    ?>





    </main>
</body>
</html>


