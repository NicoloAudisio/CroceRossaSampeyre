<?php
    // Crea un array per simulare una tabella
    $triage = array();

    // Controlla se esistono i cookie
    if(isset($_COOKIE["nome"]) && isset($_COOKIE["cognome"]) && isset($_COOKIE["ruolo"])) {
        // Crea un nuovo record
        $record = array(
            "id" => count($triage) + 1,
            "nome" => $_COOKIE["nome"],
            "cognome" => $_COOKIE["cognome"],
            "ruolo" => $_COOKIE["ruolo"],
            "colore" => $colore,
            "data" => date("Y-m-d H:i:s")
        );

        // Aggiungi il record alla tabella
        array_push($triage, $record);

        echo "New record created successfully";
    } else {
        echo "Error: Missing cookies";
    }

    // Stampa la tabella
    if (count($triage) > 0) {
        // output data of each row
        foreach($triage as $row) {
            echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["cognome"]. " - Ruolo: " . $row["ruolo"]. " - Colore: " . $row["colore"]. " - Data: " . $row["data"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>
