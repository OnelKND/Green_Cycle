<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title -->
    <title>GreenCycle  Gestion des Déchets</title>
    
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    
	<!-- FullCalendar CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet">
	<!-- FullCalendar JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <!-- Custom Styles -->
    <style>
        /* Styles for the sub-menu */
        .sub-menu-content {
            display: none;
            position: absolute;
            background-color: rgb(69, 110, 8);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
            padding: 10px;
            width: 200px;
            text-align: left;
        }

        .sub-menu-content li {
            padding: 8px 10px;
        }

        .sub-menu-content li a {
            color: #333;
            text-decoration: none;
            display: block;
        }

        .sub-menu-content li a:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator"> 
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <ul class="top-link">
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                        </ul>
                        <!-- End Contact -->
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+229 68 848 594</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">greencycle@gmail.com</a></li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.php"><img class="img-fluid custom-img-size" src="img/logo.png" alt="Logo"></a>
                                <style>
                                    .custom-img-size {
                                        max-width: 125px; 
                                        height: auto; 
                                    }
                                </style>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li><a href="index.php">Accueil</a></li>
                                        <li><a onclick="smoothScroll(event)" href="index.html#propos">A propos</a></li>
                                        <li class="active"><a href="#">Services <i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="gestion des dechets.php">Gestion des déchets</a></li>
                                                <li><a href="conseil environnementaux.php">Conseil environnementaux</a></li>
                                                <li><a href="gestion des décharges.php">Gestion des décharges</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php#actu">Actualités </a></li>
                                        <li><a href="contact.php">Contactez-nous</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <button type="button" class="btn" onclick="openSubscriptionModal()">
                                    Abonnement <i class="icofont-user"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Gestion des déchets</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Accueil</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Gestion des Déchets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Waste Management Details Area -->
<section class="pf-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content">
                    <div class="image-container">
                        <center>
                            <img src="img/eboueur.jpg" alt="Description de l'image" style="max-width: 60%; height: auto;">
                        </center>
                    </div>
                    <div class="body-text">
                        <center>
                            <h3>Projet de Gestion des Déchets</h3>
                        </center>
                        <p>
                            Green Cycle est une entreprise spécialisée dans la gestion des déchets,
                            offrant des solutions innovantes et durables pour le recyclage et la
                            réduction des déchets. Nous travaillons avec des collectivités et des
                            entreprises pour mettre en place des systèmes de gestion des déchets
                            efficaces, visant à minimiser l'impact environnemental tout en
                            maximisant la réutilisation des ressources. <br>
                            Inscrivez-vous dès maintenant pour bénéficier de notre service de ramassage des déchets à domicile. Rejoignez notre communauté et contribuez à un environnement plus propre et plus vert.
                        </p>
                        <center>    
                            <div class="get-quote">
                                <a href="appointment.html" class="btn">Abonnement <i class="icofont-user"></i></a>
                            </div>
                        </center>
						<br><br><br>
                        <!-- Calendrier -->
                        <div class="calendar-container">
							<div id="calendar"></div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Waste Management Details Area -->

<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Qui sommes nous?</h2>
                        <p>Greencycle est votre partenaire dans la gestion responsable des déchets.</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Liens rapides</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Accueil</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>A propos</a></li>
                                    <li class="sub-menu">
                                        <a><i class="fa fa-caret-right" aria-hidden="true"></i>Services <i class="icofont-simple-down"></i></a>
                                        <ul class="sub-menu-content">
                                            <li><a href="gestion des dechets.php">Gestion des déchets</a></li>
                                            <li><a href="conseil environnementaux.php">Conseil environnementaux</a></li>
                                            <li><a href="gestion des décharges.php">Gestion des décharges</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Contactez</a></li>
                                    <li><a href="blog.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Blog</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Heures d'ouvertures</h2>
                        <ul class="time-sidual">
                            <li class="day">Lundi - Vendredi <span>8h00-18h00</span></li>
                            <li class="day">Samedi <span>9h00-17h00</span></li>
                            <li class="day">Dimanche <span>Fermé</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Newsletters</h2>
                        <p>"Abonnez-vous à notre newsletter pour recevoir toutes nos actualités dans votre boîte de réception."</p>
                        <form action="subscribe.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Adresse email" class="common-input" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Votre adresse email'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2024  | Tous droits réservés </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- Modal -->
<div class="modal" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subscriptionModalLabel">Abonnement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeSubscriptionModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="subscriptionForm" action="subscribe.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFirstName">Prénom</label>
                            <input type="text" class="form-control" id="inputFirstName" name="firstName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastName">Nom</label>
                            <input type="text" class="form-control" id="inputLastName" name="lastName" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Adresse email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Numéro de téléphone</label>
                        <input type="tel" class="form-control" id="inputPhone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Ville</label><br>
                        <select class="form-control" id="inputCity" name="city" required>
                            <option value="" disabled selected>Choisissez votre ville</option>
                            <option value="Parakou">Parakou</option>
                            <option value="Cotonou">Cotonou</option>
                            <option value="Ouidah">Ouidah</option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Bohicon">Bohicon</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subscriptionType">Type d'abonnement</label><br>
                        <select class="form-control" id="subscriptionType" name="subscriptionType" required onchange="updatePrice()">
                            <option value="mensuel">Mensuel - 20,000 FCFA par mois</option>
							<option value="trimestriel">Trimestriel - 50,000 FCFA par trimestre</option>
                            <option value="semestriel">Semestriel - 90,000 FCFA par semestre</option>
                            <option value="annuel">Annuel - 160,000 FCFA par an</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="totalPrice">Prix total</label>
                        <input type="text" class="form-control" id="totalPrice" name="totalPrice" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">S'abonner</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Magnific-Popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
<!-- Calendar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/fr.js"></script>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            defaultView: 'month',
            editable: false,
            events: [
                {
                    title: 'Ramassage des déchets',
                    start: '2024-06-01'
                },
                {
                    title: 'Ramassage des déchets',
                    start: '2024-06-10'
                },
                {
                    title: 'Ramassage des déchets',
                    start: '2024-06-15'
                },
                {
                    title: 'Ramassage des déchets',
                    start: '2024-06-25'
                },
                {
                    title: 'Ramassage des déchets',
                    start: '2024-06-30'
                }
            ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay',
                color: 'white',
            },
            locale: 'fr',
            height: 'auto'
        });
    });
</script>
</body>
                           
