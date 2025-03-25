<?php
    require_once("connDB.php");

    if(!isset($_POST["username"], $_POST["password"])) {
        header("location: index.php?warning=credenziali mancanti");
        exit;
    }

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 0) {
        header("location: index.php?error=credenziali errate");
        exit;
    }else if ($result->num_rows == 1) {
        if(!isset($_SESSION))
            session_start();
        $row = $result->fetch_assoc();
        $_SESSION["utente"] = $row["username"];

        header("location: home.php");
        exit;
    }else {
        header("location: index.php?error=non fregarmi");
        exit;
    }
?>