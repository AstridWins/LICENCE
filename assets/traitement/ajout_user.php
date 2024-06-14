<?php

include 'connexion_base.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Vérifier que toutes les variables POST sont définies et non vides
    if (isset($_POST['nom'], $_POST['email'], $_POST['numero'], $_POST['mot_passe']) &&
        !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['mot_passe'])) {
        
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $mot_passe_clair = $_POST['mot_passe'];
        $mot_passe_hache = password_hash($mot_passe_clair, PASSWORD_DEFAULT);

        try {
            $requete = "INSERT INTO passager (nom, email, numero, mot_passe) VALUES (:nom, :email, :numero, :mot_passe)";
            $stmt = $connexion->prepare($requete);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':mot_passe', $mot_passe_hache);

            if ($stmt->execute()) {
                header("Location: ../../login.php");
                exit;
            } else {
                // Vérifier les erreurs SQL
                $erreur = $stmt->errorInfo();
                echo "Erreur SQL : " . $erreur[2];
            }
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} else {
    echo "Méthode de requête invalide.";
}








?>
