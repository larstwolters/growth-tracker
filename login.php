
<?php

    /**
     * @package
     * Statische bestanden die we altijd importeren
     */
    require_once "database/DatabaseConnection.php";
    require_once "database/FunctionHandler.php";

?>

<?php session_start();?>

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
    <link type="text/css" href="./asset0s/css/docs.min.css" rel="stylesheet">
</head>

<body class="bg-white">
<div class="main-content pt-7 py-lg-8">
    <div class="container mt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <h1 class="text-darker display-3 font-weight-thin text-center mb-4">Welkom terug</h1>
                <?php require_once 'components/LoginWidget.php' ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>