<?php

    include 'Connexion_base.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $mot_passe_clair = $_POST['mot_passe'];
        $mot_passe_hache = password_hash($mot_passe_clair, PASSWORD_DEFAULT);
    
        try {
            $requete = "INSERT INTO utilisateur (nom, email, numero, mot_passe) VALUES (:nom, :email, :numero, :mot_passe)";
            $stmt = $connexion->prepare($requete);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':mot_passe', $mot_passe_hache);
    
            if ($stmt->execute()) {
                header("Location: ../../admin/login-admin.php");
                exit;
            } else {
                echo "Erreur lors de l'insertion des données.";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

?>