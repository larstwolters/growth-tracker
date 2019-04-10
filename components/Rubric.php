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
            <input type="text" name="levelChoice">
            <button name="setLevel" type="submit">Next</button>
        </form>
        <br>
        <br>
    ';

    }

    if (isset($_GET['setLevel'])) {
        echo 'Je hebt gekozen voor level: ' . $_GET['levelChoice'] . ' voor skill ' . $skillName;
    }