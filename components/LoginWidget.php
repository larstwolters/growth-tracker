<?php

    $dataEntity = new FunctionHandler();

    echo '
            <form method="post" role="form">
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
                    <button type="submit" name="login" class="btn btn-dashboard mt-1 col-12">Log in</button>
                </div>
            </form>
        ';

if (isset($_POST["login"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $salt = sha1(md5($password));
    $password = md5($password.$salt);

    $statement = $pdo->prepare($dataEntity->authenticateUser());
    $statement->bindValue(':user_email', $email);
    $statement->execute();

    $dataFetch = $statement->fetch();
    $truePassword = $dataFetch["user_password"];

    if ($password === $truePassword) {
        $_SESSION['ID'] = $dataFetch['ID'];
        $_SESSION['name'] = $dataFetch['user_name'];
        $_SESSION['email'] = $email;
        $_SESSION["STAGE"] = 0;
        redirectPage("index.php");
    } else {
        $message = "Je hebt verkeerde gegevens ingevoerd. Probeer opnieuw.";
    }
}