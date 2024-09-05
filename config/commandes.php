<?php

function ajouter($nom, $image, $prix, $description, $categorie_id)
{
    if (require("connection.php")) {
        // Prépare la requête en utilisant des paramètres liés
        $reg = $pdo->prepare("INSERT INTO formateur1 (nom, image, prix, description,categorie_id) VALUES (:nom, :image, :prix, :description, :categorie_id)");

        // Lie les paramètres
        $reg->bindParam(':nom', $nom);
        $reg->bindParam(':image', $image);
        $reg->bindParam(':prix', $prix);
        $reg->bindParam(':description', $description);
        $reg->bindParam(':categorie_id', $categorie_id);

        // Exécute la requête
        $reg->execute();
    }
    // Ferme le curseur
    $reg->closeCursor();
}




function afficher()
{
    // Inclusion du fichier de connexion à la base de données
    if (require("connection.php")) {
        // Préparation de la requête
        $reg = $pdo->prepare("SELECT * FROM produits ORDER BY id DESC");

        // Exécution de la requête
        $reg->execute();

        // Récupération des résultats
        $data = $reg->fetchAll(PDO::FETCH_OBJ);

        // Fermeture du curseur
        $reg->closeCursor();

        // Retour des données
        return $data;
    } else {
        // Gestion de l'erreur de connexion si nécessaire
        return null;
    }
}
function afficher2()
{
    // Inclusion du fichier de connexion à la base de données
    if (require("connection.php")) {
        // Préparation de la requête
        $reg = $pdo->prepare("SELECT * FROM formateur1 ORDER BY id DESC");

        // Exécution de la requête
        $reg->execute();

        // Récupération des résultats
        $data = $reg->fetchAll(PDO::FETCH_OBJ);

        // Fermeture du curseur
        $reg->closeCursor();

        // Retour des données
        return $data;
    } else {
        // Gestion de l'erreur de connexion si nécessaire
        return null;
    }
}


function supprimer($id)
{
    if (require("connection.php")) {
        // Utilisation de placeholders nommés pour éviter l'injection SQL
        $reg = $pdo->prepare("DELETE FROM produits WHERE id = :idproduit");

        // Liaison des paramètres correctement
        $reg->bindParam(':idproduit', $id, PDO::PARAM_INT);

        // Exécution de la requête
        $reg->execute();

        // Fermeture du curseur
        $reg->closeCursor();
    }
}

function supprimer2($id)
{
    if (require("connection.php")) {
        // Utilisation de placeholders nommés pour éviter l'injection SQL
        $reg = $pdo->prepare("DELETE FROM formateur1 WHERE id = :idproduit");

        // Liaison des paramètres correctement
        $reg->bindParam(':idproduit', $id, PDO::PARAM_INT);

        // Exécution de la requête
        $reg->execute();

        // Fermeture du curseur
        $reg->closeCursor();
    }
}

function login($email, $password)
{

    if (require("connection.php")) {
        // Prépare la requête en utilisant des paramètres liés

        $reg = $pdo->prepare("SELECT * FROM admin WHERE email = :email AND motdepasse = :password");

        $reg->bindParam(':email', $email);
        $reg->bindParam(':password', $password);

        // Exécute la requête
        $reg->execute();

        $data = $reg->fetch(PDO::FETCH_OBJ);
        return $data;
    }
}

function getProduit($id)
{

    if (require("connection.php")) {
        // Prépare la requête en utilisant des paramètres liés

        $reg = $pdo->prepare("SELECT * FROM formateur1 WHERE id = :id");

        $reg->bindParam(':id', $id);


        // Exécute la requête
        $reg->execute();

        $data = $reg->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}

function update($nom, $image, $prix, $description, $categorie_id, $id)
{
    if (require("connection.php")) {
        try {
            // Prépare la requête en utilisant des paramètres liés
            $reg = $pdo->prepare("UPDATE formateur1 SET nom = :nom, image = :image, prix = :prix, description = :description, categorie_id = :categorie_id  WHERE id = :id");

            // Lie les paramètres
            $reg->bindParam(':nom', $nom);
            $reg->bindParam(':image', $image);
            $reg->bindParam(':prix', $prix);
            $reg->bindParam(':description', $description);
            $reg->bindParam(':categorie_id', $categorie_id);
            $reg->bindParam(':id', $id);

            // Exécute la requête
            $reg->execute();

            // Ferme le curseur
            $reg->closeCursor();
        } catch (PDOException $e) {
            // Gérer les erreurs
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
