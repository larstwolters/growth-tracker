<?php

    $dataEntity = new FunctionHandler();

    echo '
        <form method="post" role="form">
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <input name="username" class="form-control" placeholder="Naam" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <input name="password" class="form-control" placeholder="Wachtwoord" type="password">
                </div>
            </div>
            
            <div class="text-center">
                    <button type="submit" name="register" class="btn btn-dashboard mt-4">Account maken</button>
                    <a class="btn btn-dashboard mt-4" href="login.php">Login</a>
            </div>
        </form>
    ';

    if (isset($_POST["register"]) && isset($_REQUEST["username"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username) || empty($email) || empty($password)) {
            alertMessage("Vul alle velden in.");
        } else {

            $statement = $pdo->prepare($dataEntity->authenticateUser());
            $statement->bindValue(':user_email', $email);
            $statement->execute();
            $emailToCheck = $statement->fetch();
            $emailToCheck = $emailToCheck['user_email'];

            if ($emailToCheck === $email) {
                alertMessage("Dit email adress bestaat al. Voer een ander email adress in.");
            } else {

                $salt = sha1(md5($password));
                $password = md5($password . $salt);

                $statement = $pdo->prepare($dataEntity->registerUser());
                $statement->bindValue(':user_email', $email);
                $statement->bindValue(':user_password', $password);
                $statement->bindValue(':user_name', $username);

                $statement->execute();

                redirectPage('login.php');
            }
        }

    }