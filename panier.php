<?php
session_start();

// Initialiser le panier s'il n'existe pas
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajouter un article au panier
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];

    $article = [
        'id' => $id,
        'nom' => $nom,
        'prix' => $prix,
        'image' => $image,
        'quantite' => 1
    ];

    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]['quantite']++;
    } else {
        $_SESSION['panier'][$id] = $article;
    }

    // Définir une variable de session pour indiquer qu'un article a été ajouté
    $_SESSION['article_ajoute'] = true;

    header('Location: panier.php');
    exit();
}

// Supprimer un article du panier
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['panier'][$id]);
    header('Location: panier.php');
    exit();
}

// Vider le panier
if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    $_SESSION['panier'] = [];
    // Définir une variable de session pour indiquer que le panier a été vidé
    $_SESSION['panier_vide'] = true;
    header('Location: panier.php');
    exit();
}

// Augmenter la quantité d'un article
if (isset($_GET['action']) && $_GET['action'] == 'increase' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]['quantite']++;
    }
    header('Location: panier.php');
    exit();
}

// Diminuer la quantité d'un article
if (isset($_GET['action']) && $_GET['action'] == 'decrease' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['panier'][$id]) && $_SESSION['panier'][$id]['quantite'] > 1) {
        $_SESSION['panier'][$id]['quantite']--;
    }
    header('Location: panier.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <!-- Intégration de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Votre Panier</h1>
        <a href="index.php" class="btn btn-secondary mb-4">Continuer vos achats</a>
        <a href="panier.php?action=clear" class="btn btn-danger mb-4">Vider le panier</a>
        <div class="row">
            <?php
            $total_general = 0;
            if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
                foreach ($_SESSION['panier'] as $article) {
                    $total = $article['prix'] * $article['quantite'];
                    $total_general += $total;
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card'>";
                    echo "<img src='" . htmlspecialchars($article['image']) . "' class='card-img-top' alt='" . htmlspecialchars($article['nom']) . "' style='height:200px; object-fit:cover;'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . htmlspecialchars($article['nom']) . "</h5>";
                    echo "<p class='card-text'>Prix: " . htmlspecialchars((string)$article['prix']) . " €</p>";
                    echo "<p class='card-text'>Quantité: " . htmlspecialchars((string)$article['quantite']) . "</p>";
                    echo "<p class='card-text'>Total: " . htmlspecialchars((string)$total) . " €</p>";
                    echo "<a href='panier.php?action=increase&id=" . htmlspecialchars((string)$article['id']) . "' class='btn btn-success btn-sm'>+</a> ";
                    echo "<a href='panier.php?action=decrease&id=" . htmlspecialchars((string)$article['id']) . "' class='btn btn-warning btn-sm'>-</a> ";
                    echo "<a href='panier.php?action=remove&id=" . htmlspecialchars((string)$article['id']) . "' class='btn btn-danger btn-sm'>Supprimer</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='col-12'>Votre panier est vide.</p>";
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <h4>Total Général: <?php echo htmlspecialchars((string)$total_general); ?> €</h4>
            </div>
        </div>
    </div>

    <!-- Intégration de Bootstrap JS et dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    // Afficher une alerte JavaScript si un article a été ajouté
    if (isset($_SESSION['article_ajoute']) && $_SESSION['article_ajoute']) {
        echo "<script>alert('Article ajouté au panier avec succes !');</script>";
        // Réinitialiser la variable de session
        unset($_SESSION['article_ajoute']);
    }
    if (isset($_SESSION['panier_vide']) && $_SESSION['panier_vide']) {
        echo "<script>alert('Panier vidé !');</script>";
        // Réinitialiser la variable de session
        unset($_SESSION['panier_vide']);
    }
    ?>
</body>
</html>