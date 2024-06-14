<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Payement réservation</title>

   

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="mt-0">
    <div class="main-wrapper">
        <div class="bg-img">
            <img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg1">
            <img src="assets/img/bg/work-bg-03.png" alt="img" class="bgimg2">
            <img src="assets/img/bg/feature-bg-03.png" alt="img" class="bgimg3">
        </div>
        <div class="content book-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 mx-auto">

                        <ul class="step-register row">
                            <li class="activate col-md-4">
                                <div class="multi-step-icon">
                                    <span><img src="assets/img/icons/calendar-icon.svg" alt="img"></span>
                                </div>
                                <div class="multi-step-info">
                                    <h6>Rendez-vous</h6>
                                    <p>Choisissez l'heure et la date du service</p>
                                </div>
                            </li>
                            <li class="active col-md-4">
                                <div class="multi-step-icon">
                                    <span><img src="assets/img/icons/wallet-icon.svg" alt="img"></span>
                                </div>
                                <div class="multi-step-info">
                                    <h6>Paiement</h6>
                                    <p>Sélectionnez le mode de paiement</p>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="multi-step-icon">
                                    <span><img src="assets/img/icons/book-done.svg" alt="img"></span>
                                </div>
                                <div class="multi-step-info">
                                    <h6>Terminé</h6>
                                    <p>Finalisation de la réservation</p>
                                </div>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="pay-title">Méthodes de paiement</h5>
                                <div class="payment-card payment-bg">
                                    <div class="payment-head">
                                        <div class="payment-title">
                                            <label class="custom_radio">
                                                <input type="radio" name="payment" class="card-payment" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                            <h6>Portefeuille</h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="payment-card">
                                    <div class="payment-head">
                                        <div class="payment-title">
                                            <label class="custom_radio credit-card-option">
                                                <input type="radio" name="payment" class="card-payment">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h6>Carte de crédit / débit</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-list" style="display:none">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Nom sur la carte</label>
                                                <input class="form-control" type="text" placeholder="Entrez le nom sur la carte">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-form-label">Numéro de la carte</label>
                                                <input class="form-control" placeholder="**** **** **** ****" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="form-group">
                                                <label class="col-form-label">&nbsp;</label>
                                                <img src="assets/img/payment-card.png" class="img-fluid" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Date d'expiration</label>
                                                <input class="form-control" placeholder="MM/AA" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Code de sécurité</label>
                                                <input class="form-control" placeholder="CVV" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="pay-title">Résumé de la réservation</h5>
                                <div class="summary-box">
                                    <div class="booking-info">
                                        <div class="service-book">
                                            <div class="service-book-img">
                                                <img src="assets/imgs/paiement-ligne-billets-avion_670147-33629.jpg" alt="img">
                                            </div>
                                            <div class="serv-profile">
                                                <span class="badge">Vol</span>
                                                <h2>Réservation de Vol</h2>
                                                <ul>
                                                   
                                                    
                                                    <li class="service-map"><i class="feather-map-pin"></i> Paris, France</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-summary">
                                        <ul class="booking-date">
                                            <li>Date <span>20/07/2024</span></li>
                                            <li>Heure <span>10h00 - 12h00</span></li>
                                            <li>Passager <span>Marie Dupont</span></li>
                                            <li>Vol <span>AF1234</span></li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                                
                                
                                <div class="booking-pay">
                                    <a href="booking-done.php" class="btn btn-primary btn-pay w-100">Procéder au paiement </a>
                                    <a href="index.php" class="btn btn-secondary btn-skip">Passer</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script src="assets/js/jquery-3.7.0.min.js" type="ba975362d822a06c20c6e240-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="ba975362d822a06c20c6e240-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="ba975362d822a06c20c6e240-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="ba975362d822a06c20c6e240-text/javascript"></script>

    <script src="assets/js/script.js" type="ba975362d822a06c20c6e240-text/javascript"></script>
    <script src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ba975362d822a06c20c6e240-|49" defer></script>
</body>

</html>