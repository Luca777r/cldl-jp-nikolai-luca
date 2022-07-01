<!DOCTYPE html>
<html lang="en">

<body class="degrade">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="classes/style/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <title>signUp</title>
    </head>

    <header>
    </header>


    <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <form class="" action="" method="post">
                <div class="form-group m-5">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="textCenter form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="nom.prenom@cldl.com">
                    <small id="emailHelp" class="form-text text-muted">Vos informations sont sécurisé</small>
                </div>
                <div class="resize form-group m-5">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="textCenter form-control" id="password" name="password" placeholder="Entrer mot de passe">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>


            </form>
        </div>
        <?php

        $pageTitle = "Inscription";


        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $password = $_POST['password'];
            $email = $_POST['username'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $subStatement = $connection->prepare('INSERT INTO GlobalUser (email, password) VALUES (:email, :password)');
            $subStatement->execute([
                ':email' => $email,
                ':password' => $password
            ]);
        }






        // if (empty($password)) {
        //     $loginErrors[] = "Veuillez saisir un mot de passe";
        // } elseif ($password != $defaultPassword) {
        //     $loginErrors[] = "Mot de passe incorrecte";
        // }

        // if (empty($username)) {
        //     $loginErrors[] = "Veuillez saisir une adresse";
        // }

        // if (empty($loginErrors)) {
        //     $_SESSION["username"] = $_POST["username"];
        //     header("Location: index.php?page=home&loginSuccess=1");
        // }
        // foreach ($loginErrors as $loginError) {
        // 
        ?>
        <!-- // <div class="d-flex justify-content-center alert alert-danger" role="alert">
            // <?= $loginError; ?>
            // </div> -->
        <?php
        // }
        ?>

        <?php
        // }

        ?>


    </div>

</body>