<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "votazione_collegio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
?>