<?php

    session_start();

    require_once "../database/DatabaseConnection.php";
    require_once "../database/FunctionHandler.php";

    $skill = $_GET['skill'];
    $levelChosen = $_GET['levelChoice'];

    $_SESSION["STAGE"] = $_SESSION["STAGE"] + 1;

    $queryObject = new FunctionHandler();

    $statement = $pdo->prepare(
        $queryObject->updateSkillLevel('skill_' . $skill . '')
    );
    $statement->bindValue(':skillLevel', $levelChosen);
    $statement->bindValue(':user_name', $_SESSION['name']);
    $statement->execute();

    header('Location: ../index.php');
