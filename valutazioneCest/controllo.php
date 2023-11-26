<?php
session_start();

$array_domande = array(
    "Adulto o Bambino?",
    "La persona cammina?",
    "La persona è cosciente?",
    "Ha una emorragia arteriosa o schock?",
    "Ha insufficienza respiratoria?",
    "Presenta rotture?",
    "Altre patologie di riliervo?");
$array_risposte = array("Verde", "Giallo", "Rosso", "Nero");
$array_rispPulsanti = array(array("Adulto", "Bambino"), array("Si", "No"));

if (!isset($_SESSION['domanda_corrente'])) {
    $_SESSION['domanda_corrente'] = 0;
} else if (isset($_POST['risposta'])) {
    switch ($_SESSION['domanda_corrente']) {
        case 0:
            if ($_POST['risposta'] == 'Bambino') {
                echo "<p style='color:red; text-height='bold'>".$array_risposte[2]."</p>"; // Stampa "Rosso"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 1:
            if ($_POST['risposta'] == 'Si') {
                echo "<p style='color:green; text-height='bold'>".$array_risposte[0]."</p>"; // Stampa "Verde"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 2:
            if ($_POST['risposta'] == 'No') {
                echo "<p style='color:white; text-height='bold'>".$array_risposte[3]."</p>"; // Stampa "Nero"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 3:
            if ($_POST['risposta'] == 'Si') {
                echo "<p style='color:red; text-height='bold'>".$array_risposte[2]."</p>"; // Stampa "Rosso"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 4:
            if ($_POST['risposta'] == 'Si') {
                echo "<p style='color:red; text-height='bold'>".$array_risposte[2]."</p>"; // Stampa "Rosso"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 5:
            if ($_POST['risposta'] == 'Si') {
                echo "<p style='color:yellow; text-height='bold'>".$array_risposte[1]."</p>"; // Stampa "Giallo"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                $_SESSION['domanda_corrente']++;
            }
            break;
        case 6:
            if ($_POST['risposta'] == 'Si') {
                echo "<p style='color:yellow; text-height='bold'>".$array_risposte[1]."</p>"; // Stampa "Giallo"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            } else {
                echo "<p style='color:green; text-height='bold'>".$array_risposte[0]."</p>"; // Stampa "Verde"
                echo "<form method='post'><input type='submit' name='restart' value='Nuova valutazione'></form>";
                die();
            }
    }
} else if (isset($_POST['restart'])) {
    session_destroy();
    session_start();
    $_SESSION['domanda_corrente'] = 0;
}
?>