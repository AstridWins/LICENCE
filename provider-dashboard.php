<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:35:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dashboard</title>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="provider-body">
    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <div class="sidebar-logo">

                    <a href="index.php" class="navbar-brand logo">ACCEUIL</a>


                </div>
                <div class="siderbar-toggle">
                    <label class="switch" id="toggle_btn">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <a class="mobile_btns" id="mobile_btns" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="header-split">
                <div class="page-headers">
                    <div class="search-bar">
                        <span><i class="feather-search"></i></span>
                        <input type="text" placeholder="Rechercher" class="form-control">
                    </div>
                </div>
                <ul class="nav user-menu noti-pop-detail">

                    <li class="nav-item dropdown has-arrow account-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <div class="user-infos">
                                <span class="user-img">
                                    <img src="assets/img/profiles/avatar-02.jpg" class="rounded-circle" alt="Image utilisateur">
                                </span>
                                <div class="user-info">
                                    <h6>John Smith</h6>
                                    <p>Utilisateur de démonstration</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end emp">
                            <a class="dropdown-item" href="provider-profile-settings.html">
                                <i class="feather-user me-2"></i> Profil
                            </a>
                            <a class="dropdown-item" href="index.html">
                                <i class="feather-log-out me-2"></i> Déconnexion
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="dashboard.html"><i class="feather-home"></i> <span>Tableau de bord</span></a>
                        </li>
                        <li>
                            <a href="flights.html"><i class="feather-airplane"></i> <span>Vols</span></a>
                        </li>
                        <li>
                            <a href="bookings.html"><i class="feather-calendar"></i> <span>Réservations</span></a>
                        </li>
                        <li>
                            <a href="passengers.html"><i class="feather-users"></i> <span>Passagers</span></a>
                        </li>
                        <li>
                            <a href="fleet.html"><i class="feather-truck"></i> <span>Flotte</span></a>
                        </li>
                        <li>
                            <a href="routes.html"><i class="feather-map"></i> <span>Itinéraires</span></a>
                        </li>
                        <li>
                            <a href="crew.html"><i class="feather-users"></i> <span>Équipage</span></a>
                        </li>
                        <li>
                            <a href="analytics.html"><i class="feather-bar-chart-2"></i> <span>Analytics</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i class="feather-settings"></i> <span>Paramètres</span></a>
                        </li>
                        <li>
                            <a href="logout.html"><i class="feather-log-out"></i> <span>Déconnexion</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="provider-subtitle">
                                <h6>Tableau de bord de la compagnie aérienne</h6>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                            <div class="review-sort me-2">
                                <p>Trier</p>
                                <select class="select">
                                    <option>A -> Z</option>
                                    <option>Plus récent</option>
                                </select>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="feather-filter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 d-flex">
                        <div class="dash-card flex-fill">
                            <div class="dash-header">
                                <div class="dash-widget-header">
                                    <div class="d-flex align-items-center">
                                        <span class="dash-widget-icon">
                                            <i class="feather-airplane"></i>
                                        </span>
                                        <div class="dash-widget-info">
                                            <h6>Vols</h6>
                                            <h5>1000</h5>
                                        </div>
                                    </div>
                                    <select>
                                        <option>2023</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                                <div class="dash-total">
                                    <p>Vols programmés : <span>500</span></p>
                                    <div class="badge-success">+10%</div>
                                </div>
                            </div>
                            <div class="dash-widget-img">
                                <img src="assets/img/icons/pro-chart-01.svg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="dash-card flex-fill">
                            <div class="dash-header">
                                <div class="dash-widget-header">
                                    <div class="d-flex align-items-center">
                                        <span class="dash-widget-icon">
                                            <i class="feather-calendar"></i>
                                        </span>
                                        <div class="dash-widget-info">
                                            <h6>Réservations</h6>
                                            <h5>500</h5>
                                        </div>
                                    </div>
                                    <select>
                                        <option>2023</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                                <div class="dash-total">
                                    <p>Confirmées : <span>400</span></p>
                                    <div class="badge-success">+5%</div>
                                </div>
                            </div>
                            <div class="dash-widget-img">
                                <img src="assets/img/icons/pro-chart-02.svg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="dash-card flex-fill">
                            <div class="dash-header">
                                <div class="dash-widget-header">
                                    <div class="d-flex align-items-center">
                                        <span class="dash-widget-icon">
                                            <i class="feather-users"></i>
                                        </span>
                                        <div class="dash-widget-info">
                                            <h6>Passagers</h6>
                                            <h5>2000</h5>
                                        </div>
                                    </div>
                                    <select>
                                        <option>2023</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                                <div class="dash-total">
                                    <p>Enregistrés : <span>1500</span></p>
                                    <div class="badge-success">+8%</div>
                                </div>
                            </div>
                            <div class="dash-widget-img">
                                <img src="assets/img/icons/pro-chart-03.svg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="dash-card flex-fill">
                            <div class="dash-header">
                                <div class="dash-widget-header">
                                    <div class="d-flex align-items-center">
                                        <span class="dash-widget-icon">
                                            <i class="feather-dollar-sign"></i>
                                        </span>
                                        <div class="dash-widget-info">
                                            <h6>Revenus</h6>
                                            <h5>1 000 000 $</h5>
                                        </div>
                                    </div>
                                    <select>
                                        <option>2023</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                                <div class="dash-total">
                                    <a href="#" class="btn btn-primary">Générer rapport</a>
                                </div>
                            </div>
                            <div class="dash-widget-img">
                                <img src="assets/img/icons/pro-chart-04.svg" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex flex-column">

                        <h6 class="subhead-title">Flotte actuelle</h6>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="plan-info">
                                    <div class="plan-term">
                                        <h5>Airbus A320</h5>
                                        <p>Flotte principale pour les vols régionaux.</p>
                                        <h6><span>Date d'achat :</span> 22 janvier 2023</h6>
                                    </div>
                                    <div class="plan-price">
                                        <h4>25 millions $</h4>
                                        <p>par unité</p>
                                    </div>
                                </div>
                                <div class="plan-btns">
                                    <a href="#" class="btn btn-info">Détails de la flotte</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex flex-column">

                        <h6 class="subhead-title">Statut des vols</h6>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="plan-info">
                                    <div class="plan-term">
                                        <h5>Vol UA123</h5>
                                        <h6>Départ : 22 janvier 2023, 10:00</h6>
                                    </div>
                                    <div class="plan-price">
                                        <a href="#" class="btn btn-light-success">En cours</a>
                                    </div>
                                </div>
                                <div class="plan-info">
                                    <div class="plan-term">
                                        <h5>Vol UA456</h5>
                                        <h6>Départ : 23 janvier 2023, 12:00</h6>
                                    </div>
                                    <div class="plan-price">
                                        <a href="#" class="btn btn-primary">Gérer le vol</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h6 class="subhead-title">Réservations récentes</h6>

                        <div class="booking-list">
                            <div class="booking-widget">
                                <div class="booking-img">
                                    <a href="booking-details.html">
                                        <img src="assets/img/flights/flight-01.jpg" alt="Image de l'avion">
                                    </a>
                                    <div class="fav-item">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="booking-det-info">
                                    <h3>
                                        <a href="booking-details.html">Vol UA123</a><span class="badge badge-warning">En attente</span>
                                    </h3>
                                    <ul class="booking-details">
                                        <li>
                                            <span class="book-item">Date de réservation</span> : 27 septembre 2023, 17:00-18:00
                                        </li>
                                        <li>
                                            <span class="book-item">Prix</span> : 300,00 $ <span class="badge-grey">Paiement à la livraison</span>
                                        </li>
                                        <li>
                                            <span class="book-item">Destination</span> : Paris, France
                                        </li>
                                        <li>
                                            <span class="book-item">Passager</span> :
                                            <div class="user-book">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" alt="Image utilisateur" src="assets/img/profiles/avatar-01.jpg">
                                                </div>
                                                Emma Watson
                                            </div>
                                            <p><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b9beb6bfb08abaafaca8b3beb8abfcb1bdbf">[email&#160;protected]</a></p>
                                            <p>+1 234-567-8901</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="booking-action">
                                <a href="booking.html" class="btn btn-primary">Gérer la réservation</a>
                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-review"><i class="feather-plus-circle"></i> Ajouter un avis</a>
                                <div class="view-action">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="booking-details.html" class="view-btn">Voir les détails</a>
                                </div>
                            </div>
                        </div>

                        <div class="booking-list">
                            <div class="booking-widget">
                                <div class="booking-img">
                                    <a href="booking-details.html">
                                        <img src="assets/img/flights/flight-02.jpg" alt="Image de l'avion">
                                    </a>
                                    <div class="fav-item">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="booking-det-info">
                                    <h3>
                                        <a href="booking-details.html">Vol UA456</a> <span class="badge badge-success">Confirmé</span>
                                    </h3>
                                    <ul class="booking-details">
                                        <li>
                                            <span class="book-item">Date de réservation</span> : 23 septembre 2023, 10:00-11:00
                                        </li>
                                        <li><span class="book-item">Prix</span> : 250,00 $ <span class="badge-grey">Paiement à la livraison</span></li>
                                        <li><span class="book-item">Destination</span> : New York, USA</li>
                                        <li>
                                            <span class="book-item">Passager</span> :
                                            <div class="user-book">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" alt="Image utilisateur" src="assets/img/profiles/avatar-03.jpg">
                                                </div>
                                                John Smith
                                            </div>
                                            <p><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d9ded6dff0dadeceded5d8ded9c1f7dad6d4">[email&#160;protected]</a></p>
                                            <p>+1 607-276-5393</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="booking-action">
                                <a href="booking.html" class="btn btn-primary">Gérer la réservation</a>
                                <a href="javascript:void(0);" class="btn btn-secondary">Annuler</a>
                            </div>
                        </div>

                        <div class="booking-list">
                            <div class="booking-widget">
                                <div class="booking-img">
                                    <a href="booking-details.html">
                                        <img src="assets/img/flights/flight-03.jpg" alt="Image de l'avion">
                                    </a>
                                    <div class="fav-item">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="booking-det-info">
                                    <h3>
                                        <a href="booking-details.html">Vol UA789</a> <span class="badge badge-info">En cours</span>
                                    </h3>
                                    <ul class="booking-details">
                                        <li>
                                            <span class="book-item">Date de réservation</span> : 27 septembre 2023, 17:00-18:00
                                        </li>
                                        <li><span class="book-item">Prix</span> : 500,00 $ <span class="badge-grey">Paiement à la livraison</span></li>
                                        <li><span class="book-item">Destination</span> : Londres, UK</li>
                                        <li>
                                            <span class="book-item">Passager</span> :
                                            <div class="user-book">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" alt="Image utilisateur" src="assets/img/profiles/avatar-04.jpg">
                                                </div>
                                                Alice Johnson
                                            </div>
                                            <p><a href="https://truelysell.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c1a8afaaa1aea4a1a6a5a8a3b0e6aba7a5">[email&#160;protected]</a></p>
                                            <p>+1 345-678-9012</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="booking-action">
                                <a href="booking.html" class="btn btn-primary">Gérer la réservation</a>
                                <a href="javascript:void(0);" class="btn btn-secondary">Annuler</a>
                            </div>
                        </div>

                        <div class="view-history">
                            <a href="booking-history.html" class="btn btn-primary">Voir tout l'historique</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade custom-modal" id="del-account">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 justify-content-between">
                        <h5 class="modal-title">Delete Account</h5>
                        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="write-review">
                            <form action="https://truelysell.dreamstechnologies.com/html/template/login.html">
                                <p>Are you sure you want to delete this account? To delete your account, Type your password.</p>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" placeholder="*************">
                                        <span class="toggle-password feather-eye-off"></span>
                                    </div>
                                </div>
                                <div class="modal-submit text-end">
                                    <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" class="btn btn-danger">Delete Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

    </div>

    <script data-cfasync="false" src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/js/moment.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>

    <script src="assets/js/script.js" type="b8af29727bf744dc8f8a5e6c-text/javascript"></script>
    <script src="https://truelysell.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b8af29727bf744dc8f8a5e6c-|49" defer></script>
</body>

<!-- Mirrored from truelysell.dreamstechnologies.com/html/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 11:35:50 GMT -->

</html>