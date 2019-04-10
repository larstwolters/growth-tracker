<?php

    require_once "../database/DatabaseConnection.php";
    require_once "../database/QueryLibrary.php";

    $skill = $_GET['skill'];
    $levelChosen = $_GET['levelChoice'];

    $queryObject = new QueryLibrary();

    $statement = $pdo->prepare(
        $queryObject->updateSkillLevel('skill_' . $skill . '')
    );
    $statement->bindValue(':skillLevel', $levelChosen);
    $statement->execute();

    header('Location: ../index.php');