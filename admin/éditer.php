<?php
session_start();
if (!isset($_SESSION['connect']) || empty($_SESSION['connect'])) {
    header("location:../login.php");
    exit();
}

if (!isset($_GET['pdt']) || empty($_GET['pdt']) || !is_numeric($_GET['pdt'])) {
    header("location: afficher.php");
    exit();
}

require("../config/commandes.php");

$id = $_GET['pdt'];
$produits = getProduit($id);

if ($produits) {
    foreach ($produits as $produit) {
        $nom = $produit->nom;
        $image = $produit->image;
        $prix = $produit->prix;
        $description = $produit->description;
        $categorie_id = $produit->categorie_id;
    }
} else {
    echo "Produit non trouvé.";
    exit();
}

if (isset($_POST['valider'])) {
    if (isset($_POST['image'], $_POST['nom'], $_POST['prix'], $_POST['description'], $_POST['categorie_id'])) {
        if (!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['categorie_id'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $categorie_id = htmlspecialchars(strip_tags($_POST['categorie_id']));

            try {
                update($nom, $image, $prix, $description, $categorie_id, $id);
                echo "Produit mis à jour avec succès.";
            } catch (Exception $e) {
                echo "Erreur lors de la mise à jour : " . $e->getMessage();
            }
        } else {
            echo "Tous les champs sont requis.";
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
                        <a class="nav-link" aria-current="page" href="../admin/index.php">Nouveau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/supprimer.php">Suppression</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="afficher.php">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="font-weight: bold; color: green;">Modification</a>
                    </li>
                </ul>
            </div>
            <div style="display:flex;justify-content:flex-end">
                <a href="deco.php" class="btn btn-danger">Se deconnecter</a>
            </div>
        </div>
    </nav>
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <form method="POST">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom de l'image</label>
                        <input type="text" class="form-control" name="nom" value="<?php echo $nom ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Lien du produit</label>
                        <input type="text" class="form-control" name="image" value="<?php echo $image ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" class="form-control" name="prix" value="<?php echo $prix ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" required><?php echo $description ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="categorie_id" class="form-label">Catégorie</label>
                        <input type="number" class="form-control" name="categorie_id" value="<?php echo $categorie_id ?>" required>
                    </div>
                    <button type="submit" name="valider" class="btn btn-success">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>