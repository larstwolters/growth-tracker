<?php

    /**
     * @var $queryObject
     * we maken een nieuwe instantie van het FunctionHandler object
     */
    $queryObject = new FunctionHandler();

    $statement = $pdo->prepare(
        $queryObject->getAllData()
    );
    $statement->execute();

        for ($x = 0; $x <= $_SESSION['STAGE']; $x++) {
            $data = $statement->fetch();
        }

        $skillName = $data['skill'];
        $skillId = $data['ID'];
        $level1 = $data['level1'];
        $level2 = $data['level2'];
        $level3 = $data['level3'];
        $level4 = $data['level4'];

        echo
            '
                <!-- Basic elements -->
                <h2 class="display-4 mb-3 mt-a">
                    <span class="text-white font-weight-600">'.$skillName.'</span>
                </h2>
                <div class="card-deck mt-xl-5">
                    <div class="card bg-blue">
                        <a href="components/UpdateLevel.php?levelChoice=1&skill='.$skillId.'">
                          <div class="card-body">
                          <p class="card-text text-light font-weight-200">Onvoldoende</p>
                            <p class="card-text text-white">
                            '. $level1 .'
                            </p>
                          </div>
                        </a>
                    </div>
                    <div class="card bg-blue">
                        <a href="components/UpdateLevel.php?levelChoice=1&skill='.$skillId.'">
                          <div class="card-body">
                          <p class="card-text text-light font-weight-200">Redelijk</p>
                            <p class="card-text text-white">
                            '. $level2 .'
                            </p>
                          </div>
                        </a>
                    </div>
                    <div class="card bg-blue">
                        <a href="components/UpdateLevel.php?levelChoice=1&skill='.$skillId.'">
                          <div class="card-body">
                          <p class="card-text text-light font-weight-200">Goed</p>
                            <p class="card-text text-white">
                            '. $level3 .'
                            </p>
                          </div>
                        </a>
                    </div>
                    <div class="card bg-blue">
                        <a href="components/UpdateLevel.php?levelChoice=1&skill='.$skillId.'">
                          <div class="card-body">
                          <p class="card-text text-light font-weight-200">Uitstekend</p>
                            <p class="card-text text-white">
                            '. $level4 .'
                            </p>
                          </div>
                        </a>
                    </div>
                </div>
    ';