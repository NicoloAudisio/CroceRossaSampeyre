
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Valutazione CEST</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="triage.php" method="post">
        <?php
        include 'controllo.php';
        $array_risposte = array(
            0 => array("Adulto", "Bambino"),
            1 => array("Si", "No"),
            2 => array("Si", "No"),
            3 => array("Si", "No"),
            4 => array("Si", "No"),
            5 => array("Si", "No"),
            6 => array("Si", "No"),
        );
        if ($_SESSION['domanda_corrente'] < count($array_domande)) {
            echo "<h3>{$array_domande[$_SESSION['domanda_corrente']]}</h3>";
            foreach($array_risposte[$_SESSION['domanda_corrente']] as $risposta){
                echo "<input type='submit' id='registrati' name='risposta' value='$risposta'/>";
            }
        } else {
            echo "<input type='submit' id='restart' name='restart' value='Ricomincia'/>";
        }
        ?>
    </form>
</body>
</html>
