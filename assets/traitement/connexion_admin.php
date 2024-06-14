<?php
include 'Connexion_base.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {
    
    $nom=mysqli_real_escape_string($connexion,$_POST['$nom']);
    $email=mysqli_real_escape_string($connexion,$_POST['email']);
    $numero=mysqli_real_escape_string($connexion,$_POST['numero']);
    $mot_passe=mysqli_real_escape_string($connexion,$_POST['mot_passe']);
    
   
    $requete="INSERT INTO `utilisateur`(`nom`, `email`, `numero`, `mot_passe`) VALUES ('$nom','$email','$numero','$mot_passe') ";

    $execute=mysqli_query($connexion,$requete);
    
    if($execute){

        header("location: ../../admin/login-admin.php");

    }

    




}

?>