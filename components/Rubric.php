<?php

    /**
     * @var $queryObject
     * we maken een nieuwe instantie van het QueryLibrary object
     */
    $queryObject = new QueryLibrary();

    $statement = $pdo->prepare(
        $queryObject->getAllData()
    );
    $statement->execute();

    while ($data = $statement->fetch()) {

        $skillName = $data['skill'];
        $skillId = $data['ID'];
        $level1 = $data['level1'];
        $level2 = $data['level2'];
        $level3 = $data['level3'];
        $level4 = $data['level4'];

        echo
            '
        <b>'.$skillName.'</b>
        <br>
        <br>
        <li>
            '.$level1.' <br><br>
            '.$level2.' <br><br>
            '.$level3.' <br><br>
            '.$level4.' <br><br>
       </li>
        <form>
            <a href="components/updateSkillLevel.php?levelChoice=1&skill='.$skillId.'">Level 1</a>
            <a href="components/updateSkillLevel.php?levelChoice=2&skill='.$skillId.'">Level 2</a>
            <a href="components/updateSkillLevel.php?levelChoice=3&skill='.$skillId.'">Level 3</a>
            <a href="components/updateSkillLevel.php?levelChoice=4&skill='.$skillId.'">Level 4</a>
        </form>
        <br>
        <br>
    ';

    }