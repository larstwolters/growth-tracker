<?php

    /**
     * @var host De host van de database, meestal is dit localhost (127.0.0.1).
     */
    $host = "localhost";

    /**
     * @var user De user om de database-access te krijgen, meestal is dit 'root' als deze niet bewust is ingesteld.
     */
    $user = "root";

    /**
     * @var pass Het wachtwoord van de user om de database-access te krijgen. Meestal is deze
     * niet ingesteld en dus leeg.
     */
    $pass = "";

    /**
     * @var db De naam van de database: deze geven wij zelf op.
     */
    $db = "GrowthTracker";

    /**
     * @var dsn De 'Data Source Name': beschrijft de verbinding naar de data-bron.
     */
    $dsn = "mysql:host=$host;dbname=$db";

    /**
     * @var pdo De 'Data Source Name': beschrijft de verbinding naar de data-bron.
     * @var PDO PHP Data Object, is een object dat is ingebouwd in PHP: het regelt en maakt
     * de verbinding met de bron.
     */
    $pdo = new PDO($dsn, $user, $pass);