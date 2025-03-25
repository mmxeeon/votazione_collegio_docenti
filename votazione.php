<?php
    require_once("class/gestoreSondaggi.php");
    if(!isset($_SESSION))
        session_start();
    if(!isset($_SESSION["utente"])) {
        header("location: index.php?warning=devi autenticarti per accedere a questa pagina");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_GET["titolo"])) {
            header("location: home.php");
            exit;
        }
    ?>
</body>
</html>