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

    <!-- bootstrap -->
    <title>Pagina con Logo e Tabella</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <button type="button" class="btn btn-danger" onclick="window.location.href='gestoreLogout.php'"><i class="fa-solid fa-right-from-bracket"></i> LOGOUT</button>
        </div>
    </nav>

    <div class="container">
        <!-- Logo centrato in alto -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <img src="images/logo_monnet.jpg" alt="Logo" class="logo">
            </div>
        </div>

        <!-- Tabella centrata -->
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>TITOLO</th>
                            <th>DATA INIZIO</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            gestoreSondaggi::stampaSondaggi();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>