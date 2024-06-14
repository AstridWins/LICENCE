<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:31:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Acceuil</title>



    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home-page-five">
    <div class="main-wrapper">

        <section class="hero-section-five">
            <header class="header header-five">
                <div class="container">
                    <nav class="navbar navbar-expand-lg header-nav">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>

                            <a href="index.html" class="navbar-brand logo-small">
                                <img src="assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="assets/img/logo-02.svg" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i></a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu megamenu active">
                                    <a href="javascript:void(0);">Accueil </a>
                                    <ul class="submenu mega-submenu">

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Rechercher vols <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">

                                        <li><a href="search.php">Recherche</a></li>
                                        

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Réserver <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="javascript:void(0);">Réservation</a>
                                            <ul class="submenu">
                                                <li><a href="booking.php">Réservation</a></li>
                                                <li>
                                                    <a href="booking-payment.html">Paiement de la réservation</a>
                                                </li>
                                                <li>
                                                    <a href="booking-done.html">Réservation réussie</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="login-admin.php">Consulter les réservation</a>
                                            
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">En savoir plus <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="about-us.html">À propos</a></li>
                                        <li><a href="contact-us.html">Contactez-nous</a></li>
                                        <li><a href="provider-dashboard.html">Tableau de bord</a></li>
                                        <li><a href="provider-services.html">Mes services</a></li>
                                        <li><a href="provider-booking.html">Réservation</a></li>
                                        <li><a href="provider-payout.html">Paiement</a></li>

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">

                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="coming-soon.html">Bientôt disponible</a></li>
                                        <li><a href="privacy-policy.html">Politique de confidentialité</a></li>
                                        <li><a href="terms-condition.html">Conditions générales</a></li>
                                        <li><a href="session-expired.html">Session expirée</a></li>
                                       
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="admin/login-admin.php">Admin</a>
                                </li>

                                <li class="login-link">
                                    <a href="login.php">Connexion</a>
                                </li>
                                <li class="login-link">
                                    <a href="register.html">Inscription</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht">
                            <li class="nav-item">
                                <a class="nav-link header-reg" href="choose-signup.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-login" href="login.php"><i class="feather-user me-2"></i>Connexion</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="container">
                <div class="home-banner home-banner-three">
                    <div class="row align-items-center w-100">
                        <div class="col-lg-6 col-md-12 mx-auto">

                            <div class="section-search section-section-five">

                                <div class="search-box search-box-five">
                                    <h2>Recherche de Vols</h2>
                                    <form action="votre_page_de_resultats.html" method="GET">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="departure" class="form-label">Ville de départ</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-plane-departure"></i></span>
                                                    <select id="departure" name="departure" class="form-select" required>
                                                        <option value="" disabled selected>Choisir la ville de départ</option>
                                                        <option value="Paris">Paris</option>
                                                        <option value="Londres">Londres</option>
                                                        <option value="New York">New York</option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="arrival" class="form-label">Ville d'arrivée</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-plane-arrival"></i></span>
                                                    <select id="arrival" name="arrival" class="form-select" required>
                                                        <option value="" disabled selected>Choisir la ville d'arrivée</option>
                                                        <option value="Paris">Paris</option>
                                                        <option value="Londres">Londres</option>
                                                        <option value="New York">New York</option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="departure-date" class="form-label">Date de départ</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                    <input type="date" id="departure-date" name="departure-date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="return-date" class="form-label">Date de retour</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                    <input type="date" id="return-date" name="return-date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-search">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="floating-img">
                                <img src="assets/imgs/carousel-1.jpg" alt="audi" class="img-fluid rotate-img">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="works-five-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                            <div class="car-wash-img-five">
                                <img src="assets/img/icons/car-wash-header-1.svg" alt="image" class="car-wash-header-one">
                                <h2>How It Works</h2>
                                <img src="assets/img/icons/car-wash-header-2.svg" alt="image" class="car-wash-header-two">
                            </div>
                            <p>What do you need to find?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="works-it-five-button-main">
                            <div class="works-it-five-button">
                                <h4>01</h4>
                            </div>
                            <div class="works-it-dots">
                                <span></span>
                            </div>
                            <div class="works-it-lines">
                                <span></span>
                            </div>
                        </div>
                        <div class="works-five-main">
                            <div class="works-five-img">
                                <img src="assets/img/works-3.jpg" alt="image">
                            </div>
                            <div class="works-five-bottom">
                                <h5>Express Washing</h5>
                                <p>Car wash will take no more than
                                    15 minutes.</p>
                                <i class="feather-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="works-it-five-button-main">
                            <div class="works-it-five-button">
                                <h4>02</h4>
                            </div>
                            <div class="works-it-dots">
                                <span></span>
                            </div>
                            <div class="works-it-lines">
                                <span></span>
                            </div>
                        </div>
                        <div class="works-five-main">
                            <div class="works-five-img">
                                <img src="assets/img/works-2.jpg" alt="image">
                            </div>
                            <div class="works-five-bottom">
                                <h5>Quality Assurance</h5>
                                <p>High-quality cleaning agents and premium materials.</p>
                                <i class="feather-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="works-it-five-button-main">
                            <div class="works-it-five-button">
                                <h4>03</h4>
                            </div>
                            <div class="works-it-dots">
                                <span></span>
                            </div>
                        </div>
                        <div class="works-five-main">
                            <div class="works-five-img">
                                <img src="assets/img/works-1.jpg" alt="image">
                            </div>
                            <div class="works-five-bottom">
                                <h5>Reasonable Price</h5>
                                <p>High-quality cleaning agents and premium materials.</p>
                                <i class="feather-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offering-five-all">
                    <div class="offering-five-all-img">
                        <img src="assets/img/bubbles-offering-section.png" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="offering-five-main">
                                <h2>We Are Offering 14 Days Free Trial</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore
                                    et dolore minim veniam, quis nostrud exercitation ullamco magna aliqua. </p>
                                <div class="offering-five-button">
                                    <a href="free-trial.html" class="btn btn-primary">Try 14 Days Free Trial<i class="feather-arrow-right-circle"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="offering-five-img">
                                <img src="assets/imgs/gallery-1.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer footer-five">

            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget">
                                
                                <div class="footer-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="footer-selects">
                                    <h2 class="footer-title">Langue & Devise</h2>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex">
                                            <div class="footer-select">
                                                <img src="assets/img/icons/global.svg" alt="img">
                                                <select class="select">
                                                    <option>Anglais</option>
                                                    <option>Français</option>
                                                    <option>Espagnol</option>
                                                </select>
                                            </div>
                                            <div class="footer-select">
                                                <img src="assets/img/icons/dropdown.svg" class="footer-dropdown" alt="img">
                                                <select class="select">
                                                    <option>Dollars Américains</option>
                                                    <option>Roupie Indienne</option>
                                                    <option>Koweit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Liens Rapides</h2>
                                <ul>
                                    <li>
                                        <a href="about-us.html">À Propos de Nous</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Contactez Nous</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contactez Nous</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <p><span><i class="feather-map-pin"></i></span> 367 Hillcrest Lane, Irvine,
                                            Californie, États-Unis</p>
                                    </div>
                                    <p><span><i class="feather-phone"></i></span> +229 53905192</p>
                                    <p class="mb-0"><span><i class="feather-mail"></i></span> <a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02767077676e7b71676e6e42677a636f726e672c616d6f">[email&#160;protégé]</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">

                            <div class="footer-widget">
                                <h2 class="footer-title">Suivez Nous</h2>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="payment-image">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/visa.png" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/mastercard.png" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/stripe.png" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="assets/img/payment/discover.png" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright-text">
                                    <p class="mb-0">Copyright &copy; 2023. Tous droits réservés.</p>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li>
                                            <a href="privacy-policy.html">Politique de Confidentialité</a>
                                        </li>
                                        <li>
                                            <a href="terms-condition.html">Termes & Conditions</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>



        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>


    <script data-cfasync="false" src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/js/owl.carousel.min.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>

    <script src="assets/js/script.js" type="f017b000c6424141cdfe4e5b-text/javascript"></script>
    <script src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f017b000c6424141cdfe4e5b-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:32:19 GMT -->

</html>