<?php
session_start();
if (!isset($_SESSION['connect'])) {
    header("location:../login.php");
}
if (empty($_SESSION['connect'])) {
    header("location:../login.php");
}
require("../config/commandes.php");
$mesProduits = afficher2();

if (isset($_POST['valider'])) {
    if (isset($_POST['idproduit'])) {
        if (!empty($_POST['idproduit']) && is_numeric($_POST['idproduit'])) {

            $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));


            try {
                supprimer2($idproduit);
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
                        <a class="nav-link active" aria-current="page" href="../admin/index.php">Nouveau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/supprimer.php" style="font-weight: bold ">Suppression</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="afficher.php" style="font-weight: bold ">Produits</a>
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
                        <label for="exampleInputPassword1" class="form-label">identifiant produit</label>
                        <input type="number" class="form-control" name="idproduit" required>
                    </div>

                    <button type="submit" name="valider" class="btn btn-primary">supprimer un produit</button>
                </form>



            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($mesProduits as $produit) : ?>
                <div class="row">
                    <div class="col-md-7 ">



                        <img class="card-img-top w-25" src=<?php echo $produit->image; ?> alt=" Card image cap">
                        <h2><?php echo $produit->id; ?></h2>

                        <div class="card-body">




                        </div>


                    </div>
                </div>
            <?php endforeach;  ?>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>