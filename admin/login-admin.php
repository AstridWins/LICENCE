<?php
include '../assets/traitement/connexion_base.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];

    // Vérification des champs vides
    if (empty($email) || empty($mot_passe)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
        // Requête pour vérifier les informations d'identification de l'utilisateur
        $sql = "SELECT * FROM utilisateur WHERE email = :email";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérification du mot de passe
            if (password_verify($mot_passe, $user['mot_passe'])) {
                // Démarrage de la session et redirection
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                header('Location: provider-dashboard.php');
                exit();
            } else {
                $error = "Mot de passe incorrect.";
            }
        } else {
            $error = "Aucun utilisateur trouvé avec cet email.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Connexion-admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/feather.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="login-body">
    <div class="main-wrapper">
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a href="../index.php" class="navbar-brand logo">ACCEUIL</a>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="link" href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 mx-auto">
                        <div class="login-wrap">
                            <div class="login-header">
                                <h3>Connexion</h3>
                            </div>

                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>

                            <form action="" method="post">
                                <div class="log-form">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="johndoe@example.com" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="col-form-label">Mot de passe</label>
                                            </div>
                                            
                                        </div>
                                        <div class="pass-group">
                                            <input type="password" name="mot_passe" class="form-control pass-input" placeholder="*************" required>
                                            <span class="toggle-password feather-eye-off"></span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <button class="btn btn-primary w-100 login-btn" type="submit">Se connecter</button>

                                <p class="no-acc">Vous n'avez pas encore de compte ? <a href="choose-signup.html">Inscrivez-vous</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script src="../assets/js/jquery-3.7.0.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../assets/js/feather.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="64d3df0fc517e74672db2a70-|49" defer></script>
</body>

</html>
