
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