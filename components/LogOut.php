<?php

    require_once "../database/DatabaseConnection.php";
    require_once "../database/FunctionHandler.php";

    session_start();
    session_destroy();
    redirectPage('../login.php');