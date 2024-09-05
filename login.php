<?php
session_start();
require("config/commandes.php");

if (isset($_POST['valider'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $password = htmlspecialchars(strip_tags($_POST['password']));

            $admin = login($email, $password);
            if ($admin) {

                $_SESSION['connect'] = $admin;

                header("location:admin/");
            } else {
                echo "erreur !";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>login</title>
</head>

<body class="bg-light">

    <div class="container-fluid ">
        <div class="login">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br><br><br><br>
                <form method="post">
                    <div class="col-md-3">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" name="email">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" name="valider" class="btn btn-danger">Connexion</button>
                </form>
            </div>

        </div>

    
    </div>
    </div>









        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>

</html>