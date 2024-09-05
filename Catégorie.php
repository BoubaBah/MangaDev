<?php
session_start();
require_once("config/connection.php");

// Récupérer toutes les catégories pour le menu déroulant
$sql_categories = "SELECT id, nom FROM categorie";
$stmt_categories = $pdo->prepare($sql_categories);
$stmt_categories->execute();
$categories = $stmt_categories->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si une catégorie est sélectionnée
$categorie_id = isset($_POST['categorie_id']) ? $_POST['categorie_id'] : (isset($categories[0]['id']) ? $categories[0]['id'] : null);

// Préparer la requête SQL pour les formateurs
$sql_formateurs = "SELECT formateur1.id, formateur1.nom, formateur1.image, formateur1.prix, formateur1.description
                   FROM formateur1
                   JOIN categorie ON formateur1.categorie_id = categorie.id
                   WHERE categorie.id = :categorie_id";

$stmt_formateurs = $pdo->prepare($sql_formateurs);
$stmt_formateurs->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
$stmt_formateurs->execute();
$formateurs = $stmt_formateurs->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formateurs</title>
    <!-- Intégration de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container">
        <h1 class="my-4 text-light">Choisissez une catégorie</h1>
        <form method="post" action="" class="mb-4">
            <div class="form-group">
                <label for="categorie_id">Catégorie:</label>
                <select name="categorie_id" id="categorie_id" class="form-control" onchange="this.form.submit()">
                    <?php
                    foreach ($categories as $categorie) {
                        $selected = ($categorie['id'] == $categorie_id) ? 'selected' : '';
                        echo "<option value='" . htmlspecialchars($categorie['id']) . "' $selected>" . htmlspecialchars($categorie['nom']) . "</option>";
                    }
                    ?>
                </select>
            </div>
        </form>

        <h2 class="my-4 text-light">Formateurs de la catégorie:
            <?php
            if ($categorie_id !== null) {
                $categorie_nom = array_search($categorie_id, array_column($categories, 'id')) !== false ? $categories[array_search($categorie_id, array_column($categories, 'id'))]['nom'] : 'Inconnue';
                echo htmlspecialchars($categorie_nom);
            } else {
                echo 'Inconnue';
            }
            ?>
        </h2>
        <div class="row">
            <?php
            if (count($formateurs) > 0) {
                // Afficher les données de chaque formateur
                foreach ($formateurs as $formateur) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card'>";
                    echo "<img src='" . htmlspecialchars($formateur['image']) . "' class='card-img-top' alt='" . htmlspecialchars($formateur['nom']) . "' style='height:200px; object-fit:cover;'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . htmlspecialchars($formateur['nom']) . "</h5>";
                    echo "<p class='card-text'>Prix: " . htmlspecialchars($formateur['prix']) . " €</p>";
                    echo "<p class='card-text'>" . htmlspecialchars($formateur['description']) . "</p>";
                    echo "<form method='POST' action='panier.php'>";
                    echo "<input type='hidden' name='id' value='" . htmlspecialchars($formateur['id']) . "'>";
                    echo "<input type='hidden' name='nom' value='" . htmlspecialchars($formateur['nom']) . "'>";
                    echo "<input type='hidden' name='prix' value='" . htmlspecialchars($formateur['prix']) . "'>";
                    echo "<input type='hidden' name='image' value='" . htmlspecialchars($formateur['image']) . "'>";
                    echo "<button type='submit' class='btn btn-primary'>Ajouter au panier</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='col-12'>Aucun formateur trouvé pour cette catégorie.</p>";
            }
            ?>
        </div>
    </div>
    

    <!-- Intégration de Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
$stmt_formateurs = null;
$stmt_categories = null;
$pdo = null;
?>