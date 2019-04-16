
<?php

/**
 * @package
 * Statische bestanden die we altijd importeren
 */
require_once "database/DatabaseConnection.php";
require_once "database/FunctionHandler.php";

?>

<!DOCTYPE html>
<html>

<body class="bg-white">
<div class="main-content pt-7 py-lg-8">
    <div class="container mt-4 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center text-muted mb-4">
                    <h1 class="text-darker display-3 font-weight-800 text-center mb-4">Account aanmaken</h1>
                </div>
                <?php require_once 'components/RegisterWidget.php' ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>