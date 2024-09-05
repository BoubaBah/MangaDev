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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                        <a class="nav-link" href="../admin/supprimer.php">Suppression</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/supprimer.php" style="font-weight: bold ">Produits</a>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">categorie</th>
                            <th scope="col">Editer</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mesProduits as $produit) :  ?>
                            <tr>
                                <th scope="row"><?php echo $produit->id; ?></th>
                                <td>
                                    <img src="<?php echo $produit->image; ?>" style="width: 22%">
                                </td>
                                <td>
                                    <?php echo $produit->nom; ?>
                                </td>
                                <td style="font-weight: bold; color: green">
                                    <?php echo $produit->prix; ?>€
                                </td>
                                <td>
                                    <?php echo substr($produit->description, 0, 100); ?>...
                                </td>
                                <td style="font-weight: bold; color: green">
                                    <?php echo $produit->categorie_id; ?>
                                </td>
                                <td>
                                    <a href="éditer.php?pdt=<?php echo $produit->id; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABEklEQVRIS+WVfQ3CMBDFNwfgAAngYEjBAShAAjhgKAEJOAAH4ADeI21zua3dtWN/0eTSbb28X++jXV1NPOqJ9atfArZus0e5aQ1YYvEE45waGyy2woHiB/e+wxwgGnDBYpMpPoP/HcbZjwDRgLfzsKaOoi8XMTfnIYyAkE4NcgBMyx62ht0EhKn7io8ByJwzAg9Z4PkhU1ySIinutQhZafGSCPrEqRNyLnefC7CKs8VZk6wa5Iizm+Y5AKs4NZ8wtmqoraXIvnVlemM577R5CSBaUOxgNCAlzgiLALrzUu9/AOC1y/tEDl4D8ioeShkPGa+N3oPW4Ct/OBoyJOrXr3g4w9oYwCpk9rP+WMyC2nFywAcxFEIZQRvWbAAAAABJRU5ErkJggg==" /></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>



            </div>
        </div>



    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>