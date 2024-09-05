<?php
session_start();
if (!isset($_SESSION['connect'])) {
    header("location:../login.php");
}
if (empty($_SESSION['connect'])) {
    header("location:../login.php");
}
require("../config/commandes.php");


if (isset($_POST['valider'])) {
    if (isset($_POST['image']) && isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['cate_id'])) {
        if (!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['cate_id'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $categorie_id = htmlspecialchars(strip_tags($_POST['cate_id']));


            try {
                ajouter($nom, $image, $prix, $description, $categorie_id);
            } catch (Exception $e) {
                echo $e->getMessage();
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

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">MangaDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../admin/index.php" style="font-weight: bold">Nouveau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/supprimer.php">Suppression</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="afficher.php">Produits</a>
                    </li>



                </ul>
            </div>
            <div style="display:flex;justify-content:flex-end">
                <a href="deco.php" class="btn btn-danger">Se deconnecter</a>
            </div>
        </div>
    </nav>
    <div class="py-5 bg-light">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <form method="POST">
                    <div class="mb-3">
                        <h1>Nouveau produit</h1><br><br>
                        <label for="exampleInputEmail1" class="form-label">nom de l'image</label>
                        <input type="name" class="form-control" name="nom" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">lien du produit</label>
                        <input type="text" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">cate_id</label>
                        <input type="number" class="form-control" name="cate_id" required></input>
                    </div>

                    <button type="submit" name="valider" class="btn btn-danger">ajouter un nouveau produit</button>
                </form>



            </div>
        </div>
    </div>

    <!-- <div class="py-5 bg-light">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <form method="POST">
                    <div class="mb-3">
                        <h1>Nouveau Formateur</h1><br><br>
                        <label for="exampleInputEmail1" class="form-label">nom de l'image</label>
                        <input type="name" class="form-control" name="nom" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">lien du produit</label>
                        <input type="text" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>

                    <button type="submit" name="valider" class="btn btn-danger">ajouter un nouveau produit</button>
                </form>



            </div>
        </div>
    </div> -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>