<?php

session_start();

/**
 * @package
 * Statische bestanden die we altijd importeren
 */

require_once "database/DatabaseConnection.php";
require_once "database/FunctionHandler.php";

if (!isset($_SESSION["email"])) {
    redirectPage('login.php');
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.1" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
</head>

<body class="bg-ui">
    <div class="main-content">
        <div class="header pb-8">
            <div class="container pt-5">
                <div class="col-sm-6 center">
                    <h1 class="display-4 text-white">Welkom, <?php echo $_SESSION['name']; ?></h1>
                    <p class="text-lead">Er staat een rubric open.</p>
                    <button type="button" class="btn btn-success"><?php if (true){echo'<a href="index.php">Rubriek starten</a>';}?></button>
                    <a href="components/LogOut.php"><button type="button" class="btn btn-success">Uitloggen</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Core -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="./assets/vendor/headroom/headroom.min.js"></script>
    <!-- Optional JS -->
    <script src="./assets/vendor/onscreen/onscreen.min.js"></script>
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
    <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Argon JS -->
    <script src="./assets/js/argon.js?v=1.0.1"></script>
</body>

</html>