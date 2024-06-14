<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:36:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>User inscription</title>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/plugins/intltelinput/css/demo.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-body">
    <div class="main-wrapper">

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand logo"> ACCEUIL
                            <!-- <img src="assets/imgs/logome.PNG" class="img-fluid" alt="Logo"> -->
                        </a>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="link" href="faq.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="link" href="login.html">Login</a>
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
                                <h3>Inscription du passager</h3>
                            </div>

                            <form action="assets/traitement/ajout_user.php" method="post">
                                <div class="form-group">
                                    <label class="col-form-label">Nom</label>
                                    <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="johndoe@example.com">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Numéro de téléphone</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg group_formcontrol" id="phone" name="numero" placeholder="(+229) 41587963">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label d-block">Mot de passe<span class="brief-bio float-end">Must
                                            be 8 Characters at Least</span></label>
                                    <div class="pass-group">
                                        <input type="password" name="mot_passe" class="form-control pass-input" placeholder="*************">
                                        <span class="toggle-password feather-eye-off"></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 login-btn">S'inscrire</button>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script src="assets/js/jquery-3.7.0.min.js" type="7368bfedfa5eb6a519cd6855-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="7368bfedfa5eb6a519cd6855-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="7368bfedfa5eb6a519cd6855-text/javascript"></script>

    <script src="assets/plugins/intltelinput/js/intlTelInput.js" type="7368bfedfa5eb6a519cd6855-text/javascript"></script>

    <script src="assets/js/script.js" type="7368bfedfa5eb6a519cd6855-text/javascript"></script>
    <script src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7368bfedfa5eb6a519cd6855-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:36:33 GMT -->

</html>