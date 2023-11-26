<?php
    setcookie("nome", $nome, time() + 3600, "/"); // 3600 seconds = 1 hour
    setcookie("cognome", $cognome, time() + 3600, "/");
    setcookie("ruolo", $ruolo, time() + 3600, "/");
    header("Location: triage.php");
?>