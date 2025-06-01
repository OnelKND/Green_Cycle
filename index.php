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
        <title>GreenCycle</title>
		
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
		
		<!-- Get Pro Button -->
		
	
		<!-- Header Area -->
		<header class="header" >
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
											<li class="active"><a href="#">Accueil</a>
											</li>
											<li><a onclick="smoothScroll(event)" href="#propos">A propos</a></li>
											<li><a href="#">Services <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="gestion des dechets.php">	Gestion des déchets</a></li>
													<li><a href="conseil environnementaux.php">Conseil environnementaux</a></li>
													<li><a href="gestion des décharges.php">Gestion des décharges</a></li>
												</ul>
											</li>
											<li><a onclick="smoothScroll(event)" href="#actu">Actualités </a></li>
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
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slide1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> <span>GreenCycle</span>Donnons une seconde vie à vos <span>déchets</span></h1>
									<p>Bienvenue sur Greencycle, où nous transformons les déchets en ressources précieuses pour notre planète. </p>
									<div class="button">
										<a href="#" class="btn" onclick="openSubscriptionModal()">Abonnement</a>
										<a href="contact.php" class="btn primary">Contactez-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slide2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> <span>GreenCycle</span>Donnons une seconde vie à vos <span>déchets</span></h1>
									<p>Bienvenue sur Greencycle, où nous transformons les déchets en ressources précieuses pour notre planète. </p>
									<div class="button">
										<a href="#" class="btn" onclick="openSubscriptionModal()">Abonnement</a>
										<a href="contact.php" class="btn primary">Contactez-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/slide3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1> <span>GreenCycle</span>Donnons une seconde vie à vos <span>déchets</span></h1>
									<p>Bienvenue sur Greencycle, où nous transformons les déchets en ressources précieuses pour notre planète. </p>
									<div class="button">
										<a href="#" class="btn" onclick="openSubscriptionModal()">Abonnement</a>
										<a href="contact.php" class="btn primary">Contactez-nous</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="icofont-recycle"></i>
									</div>
									<div class="single-content">
										<span>Gestion des Déchets</span>
										<h4>Collecte et Recyclage</h4>
										<p>Contribuez à la préservation de l'environnement en recyclant vos déchets avec Greencycle.</p>
										<a href="gestion des dechets.php">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
									<i class="icofont-world"></i>
									</div>
									<div class="single-content">
										<span>Conseils Environnementaux</span>
										<h4>Éco-responsabilité</h4>
										<p>Découvrez des conseils pratiques pour réduire votre empreinte environnementale et adopter un mode de vie durable.</p>
										<a href="conseil environnementaux.php">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-tree-alt"></i>
									</div>
									<div class="single-content">
										<span>Prendre rendez-vous</span>
										<h4>Heures d'Ouverture</h4>
										<ul class="time-sidual">
											<li class="day">Lundi - Vendredi <span>8h00-18h00</span></li>
											<li class="day">Samedi <span>9h00-17h00</span></li>
											<li class="day">Dimanche <span>Fermé</span></li>
										</ul>
										<a  onclick="smoothScroll(event)"  href="#rdv">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--/End Start schedule Area -->

		<!-- Start Why choose -->
<section id="propos" class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Pourquoi Choisir Greencycle ?</h2>
                    <p>Explorez nos services pour une gestion des déchets plus efficace et écologique.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Qui Nous Sommes</h3>
                    <p>Greencycle est votre partenaire dans la gestion responsable des déchets. Nous sommes dédiés à la préservation de l'environnement en offrant des solutions durables pour le traitement et le recyclage des déchets.</p>
                    <p>Nos valeurs reposent sur l'engagement envers la durabilité, l'innovation et le service client de qualité.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Collecte et tri sélectif des déchets</li>
                                <li><i class="fa fa-caret-right"></i>Recyclage des matériaux</li>
                                <li><i class="fa fa-caret-right"></i>Valorisation énergétique</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Consultation en gestion des déchets</li>
                                <li><i class="fa fa-caret-right"></i>Éducation à l'éco-responsabilité</li>
                                <li><i class="fa fa-caret-right"></i>Services personnalisés selon vos besoins</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->
		
<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-recycle"></i>
                    <div class="content">
                        <span class="counter">5200</span>
                        <p>Tonnes de déchets recyclés</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-tree-alt"></i>
                    <div class="content">
                        <span class="counter">200</span>
                        <p>Arbres plantés grâce au recyclage</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-water-drop"></i>
                    <div class="content">
                        <span class="counter">12000</span>
                        <p>Litres d'eau économisés par le recyclage</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-world"></i>
                    <div class="content">
                        <span class="counter">5</span>
                        <p>Departement déservis pas GreenCycle</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->
<br>
		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nous sommes engagés a faire de votre environnement un endroit meilleur</h2>
							<p>Assurez la propreté de votre environnement grace à nous</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont-recycle"></i>
							</div>
							<h3>Recyclage</h3>
							<p>"Recyclons, c'est simple et ça change tout !"</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont-trash"></i>
							</div>
							<h3>Salubrité</h3>
							<p>"La propreté, c'est la santé pour tous !"</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont-tree-alt"></i>
							</div>
							<h3>Ecologie</h3>
							<p>"Préservons notre planète !"</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
				<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Faut avez des préocuppations? Appelez nous au +229 9298289</h2>
							<div class="button">
								<a href="contact.php" class="btn">Contactez-nous</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
<!-- Start Services Section -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Nous Offrons Différents Services Pour Améliorer la Gestion des Déchets</h2>
                    <p>Découvrez nos services dédiés à la gestion durable des déchets, à la gestion des décharges et aux conseils environnementaux.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Service: Gestion des Déchets -->
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-service">
                    <i class="icofont icofont-recycle"></i>
                    <h4><a href="gestion des dechets.html">Gestion des Déchets</a></h4>
                    <p class="service-description">Planifiez et suivez vos collectes de déchets, apprenez à trier efficacement et accédez à des services spécialisés.</p>
                </div>
            </div>
            <!-- Single Service: Conseils Environnementaux -->
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-service">
                    <i class="icofont icofont-education"></i>
                    <h4><a href="conseil environnementaux.html">Conseils Environnementaux</a></h4>
                    <p class="service-description">Recevez des conseils d'experts en environnement, participez à des ateliers et découvrez des stratégies pour améliorer votre impact écologique.</p>
                </div>
            </div>
            <!-- Single Service: Gestion des Décharges -->
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-service">
                    <i class="icofont icofont-garbage"></i>
                    <h4><a href="gestion des décharges.html">Gestion des Décharges</a></h4>
                    <p class="service-description">Optimisez la gestion des sites de décharges, suivez les processus de traitement et assurez la conformité aux réglementations environnementales.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

		<br><br>
		<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div  id="actu"  class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Restez à jour avec nos Actualités Récentes</h2>
                    <p>Découvrez les dernières nouvelles et mises à jour concernant notre entreprise et nos services environnementaux.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/ord.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Août, 2020</div>
                            <h2>Sensibilisation à la gestion des déchets</h2>
                            <p class="text">Rejoignez nos efforts pour sensibiliser la communauté à l'importance de la gestion responsable des déchets.</p>
							<a style="color: rgb(69, 110, 8);" href="blog.php">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/camiontrash.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Juillet, 2020</div>
                            <h2>Nouveaux camions de ramassage</h2>
                            <p class="text">Nous avons récemment investi dans de nouveaux camions de ramassage pour améliorer notre efficacité et notre couverture.</p>
							<a style="color: rgb(69, 110, 8);" href="blog.php">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/poubelle.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">5 Janvier, 2020</div>
                            <h2>Nouvelles poubelles offertes à la population</h2>
                            <p class="text">Nous avons distribué de nouvelles poubelles aux résidents pour encourager le tri sélectif et la propreté de notre ville.</p>
							<a style="color: rgb(69, 110, 8);" href="blog.php">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
<section id="rdv" class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>"Nous sommes toujours prêts à vous aider. Prenez rendez-vous."</h2>
                    <p>"Des questions ? Nous avons les réponses. Prenez rendez-vous !"</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="rdv.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="nom" type="text" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Numéro de téléphone" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <select name="ville" class="form-control" required>
                                    <option value="" disabled selected>Ville</option>
                                    <option value="Parakou">Parakou</option>
                                    <option value="Cotonou">Cotonou</option>
                                    <option value="Ouidah">Ouidah</option>
                                    <option value="Porto-Novo">Porto-Novo</option>
                                    <option value="Bohicon">Bohicon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="date" name="date" placeholder="Date" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Ecrivez votre message ici ....." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Prendre rendez-vous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="appointment-image">
                    <img src="img/plan.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->

		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Newsletter Text -->
						<div class="subscribe-text">
							<h6>Inscrivez-vous pour les Newsletters</h6>
							<p class="">"Abonnez-vous à notre newsletter pour recevoir toutes <br> nos actualités dans votre boîte de réception."</p>
						</div>
						<!-- End Newsletter Text -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form">
							<form action="subscribe.php" method="post" class="newsletter-inner">
								<input name="EMAIL" placeholder="Votre adresse email" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Votre adresse email'" required="" type="email">
								<button class="btn">Souscrivez</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
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
											<li><a href="index.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Accueil</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>A propos</a></li>
											<li class="sub-menu">
												<a><i class="fa fa-caret-right" aria-hidden="true"></i>Services <i class="icofont-simple-down"></i></a>
												<ul class="sub-menu-content">
													<li><a href="gestion des dechets.html">Gestion des déchets</a></li>
													<li><a href="conseil environnementaux.html">Conseil environnementaux</a></li>
													<li><a href="gestion des décharges.html">Gestion des décharges</a></li>
												</ul>
											</li>
											<li><a href="contact.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Contactez</a></li>
											<li><a href="blog.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Blog</a></li>
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
                                    <input name="email" placeholder="Adresse Email" class="common-input" onfocus="this.placeholder = ''"
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
                <form id="subscriptionForm" action="subscribe.php" method="post" onsubmit="handleFormSubmit(event)">
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
                        <label for="inputCity">Ville</label>
						<br>
                        <select class="form-control" id="inputCity" name="city" required>
                            <option value="" disabled selected>Choisissez votre ville</option>
                            <option value="Parakou">Parakou</option>
                            <option value="Cotonou">Cotonou</option>
                            <option value="Ouidah">Ouidah</option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Bohicon">Bohicon</option>
                        </select>
                    </div>
					<br><br>
                    <div class="form-group">
                        <label for="subscriptionType">Type d'abonnement</label>
						<br>
                        <select class="form-control" id="subscriptionType" name="subscriptionType" required onchange="updatePrice()">
                            <option value="mensuel">Mensuel - 20,000 FCFA par mois</option>
                            <option value="annuel">Annuel - 150,000 FCFA par an</option>
                        </select>
                    </div>
                    <div class="form-group">
						<br><br>
                        <label for="price">Prix</label>
                        <input type="text" class="form-control" id="price" name="price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">S'abonner</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

<script>
    function updatePrice() {
        var subscriptionType = document.getElementById("subscriptionType").value;
        var priceField = document.getElementById("price");

        if (subscriptionType === "mensuel") {
            priceField.value = "20,000 FCFA";
        } else if (subscriptionType === "annuel") {
            priceField.value = "150,000 FCFA";
        }
    }

    function closeSubscriptionModal() {
        var modal = document.getElementById("subscriptionModal");
        modal.style.display = "none";
    }

    window.onload = function() {
        updatePrice();
    }

    function handleFormSubmit(event) {
        event.preventDefault(); // Empêche la soumission normale du formulaire
        var subscriptionType = document.getElementById('subscriptionType').value;
        var form = document.getElementById('subscriptionForm');
        var actionURL;

        if (subscriptionType === 'mensuel') {
            actionURL = 'https://sandbox-me.fedapay.com/cHc6mR6p';
        } else if (subscriptionType === 'annuel') {
            actionURL = 'https://sandbox-me.fedapay.com/VDtATy3Y';
        }

        // Envoyer les informations à la base de données
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(response) {
                // Rediriger vers le lien de paiement après avoir envoyé les données à la base de données
                window.location.href = actionURL;
            },
            error: function(xhr, status, error) {
                console.error('Une erreur est survenue lors de l\'envoi des données.');
            }
        });
    }
</script>

		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

		<script>
			$(document).ready(function () {
				// Show/hide sub-menu on hover
				$('.sub-menu').hover(
					function () {
						$(this).children('.sub-menu-content').slideDown(200);
					},
					function () {
						$(this).children('.sub-menu-content').slideUp(200);
					}
				);
			});
		</script>

		<script>
			function smoothScroll(event) {
				event.preventDefault(); // Empêche le comportement par défaut du lien (saut immédiat)
			
				const targetId = event.target.getAttribute('href'); // Récupère l'ID de la cible depuis l'attribut href du lien
				const targetElement = document.querySelector(targetId); // Sélectionne l'élément cible à partir de son ID
			
				if (targetElement) {
					const offsetTop = targetElement.offsetTop;
			
					window.scrollTo({
						top: offsetTop, // Position à faire défiler jusqu'à
						behavior: 'smooth' // Option pour une transition douce
					});
				}
			}
			</script>

			<script>
				function updatePrice() {
					var subscriptionType = document.getElementById("subscriptionType").value;
					var priceField = document.getElementById("price");

					if (subscriptionType === "mensuel") {
						priceField.value = "20,000 FCFA";
					} else if (subscriptionType === "annuel") {
						priceField.value = "200,000 FCFA";
					}
				}
				function openSubscriptionModal() {
				var modal = document.getElementById('subscriptionModal');
				var backdrop = document.createElement('div');
				backdrop.className = 'modal-backdrop fade show';
				document.body.appendChild(backdrop);

				modal.style.display = 'block';
				modal.className += ' show';

				backdrop.addEventListener('click', closeSubscriptionModal);
				}

				function closeSubscriptionModal() {
				var modal = document.getElementById('subscriptionModal');
				var backdrop = document.getElementsByClassName('modal-backdrop')[0];

				modal.style.display = 'none';
				modal.className = 'modal fade';

				backdrop.remove();
				}

				document.addEventListener('DOMContentLoaded', function() {
				updatePrice();
				});
			</script>

    </body>
</html>