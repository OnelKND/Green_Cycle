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
        <title>Green Cycle Blog</title>
		
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
									<li><a href="index.php">Accueil</a>
									</li>
									<li><a onclick="smoothScroll(event)" href="index.php#propos">A propos</a></li>
									<li><a href="#">Services <i class="icofont-rounded-down"></i></a>
										<ul class="dropdown">
											<li><a href="gestion des dechets.php">	Gestion des déchets</a></li>
											<li><a href="conseil environnementaux.php">Conseil environnementaux</a></li>
											<li><a href="gestion des décharges.php">Gestion des décharges</a></li>
										</ul>
									</li>
									<li><a href="index.php#actu">Actualités </a></li>
									<li><a href="contact.php">Contactez-nous</a></li>
									<li class="active"><a href="blog.php">Blog</a></li>
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
							<h2>Blog</h2>
							<ul class="bread-list">
								<li><a href="index.php">Accueil</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
<section class="news-single section" id="article1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
								<center>
                                	<img class="img-fluid cust" src="img/ord.jpg" alt="#" id="article-image">
								</center> 
								<style>
									.cust{
										max-width: 25em; 
										height: auto; 
									}
								</style>
                            </div>
                            <!-- News Title -->
							<center>
                            	<h1 class="news-title"><a id="article-title">Sensibilisation à la gestion des déchets.</a></h1>
							</center>
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="author"><a href="#"><img src="img/client1.png" alt="#" id="article-author-image"> Naimur Rahman</a></span>
                                    <span class="date"><i class="fa fa-clock-o"></i>03 Feb 2019</span>
                                </div>
                                <div class="meta-right">
                                    <span class="comments"><a><i class="fa fa-comments"></i>05 Comments</a></span>
                                    <span class="views"><i class="fa fa-eye"></i>33K Views</span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text" id="article-content">
                                <p>Contenu de l'article ici.</p>
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <!-- Next Prev -->
                                <ul class="prev-next">
                                    <li  class="prev"><a onclick="changeArticle(-1)" ><i class="fa fa-angle-double-left"></i></a></li>
                                    <li  class="next"><a onclick="changeArticle(1)" ><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                                <!--/ End Next Prev -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search Here...">
                            <a class="button"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Post récents</h3>
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="img/ord.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Sensibilisation à la gestion des déchets</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>22 Août, 2020</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="img/camiontrash.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Nouveaux camions de ramassage</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Juillet, 2020</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="img/poubelle.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Nouvelles poubelles offertes à la population</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>5 Janvier, 2020</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <!--/ End Single Widget -->
                    </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Single News -->

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
                                <form action="subsribe.php" method="get" target="_blank" class="newsletter-inner">
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
												<label for="inputLocation">Emplacement pour le ramassage des ordures</label>
												<input type="text" class="form-control" id="inputLocation" name="location" placeholder="Entrez votre adresse ou votre emplacement">
											</div>
												<div class="form-group">
												<center>
													<select class="form-control" id="subscriptionType" name="subscriptionType" required onchange="updatePrice()">
													<option value="mensuel">Mensuel - 20.000 FCFA par mois</option>
													<option value="annuel">Annuel - 150.000 FCFA par an</option>
													</select>
												</center>
												</div>
											<div class="form-group">
												<input type="text" class="form-control" id="price" name="price" readonly>
											</div>
											<button type="submit" class="btn btn-primary">S'abonner</button>
										</form>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal end -->

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
				var articles = [
									{
										title: "Sensibilisation à la gestion des déchets.",
										author: "Naimur Rahman",
										date: "03 Feb 2019",
										views: "33K Views",
										image: "img/ord.jpg",
										content: "<p>Contenu de l'article ici.</p>"
									},
									{
										title: "Nouveaux camions de ramassage",
										author: "Afsana Mimi",
										date: "05 Mars 2019",
										views: "45K Views",
										image: "img/camiontrash.jpg",
										content: "<p>Autre contenu de l'article ici.</p>"
									},
									{
										title: "Nouvelles poubelles offertes à la population",
										author: "Suriya Molharta",
										date: "15 Juillet 2020",
										views: "30K Views",
										image: "img/poubelle.jpg",
										content: "<p>Encore un autre contenu de l'article ici.</p>"
									}
								];

					var currentArticleIndex = 0;

					function changeArticle(direction) {
						// Met à jour l'index de l'article actuel en fonction de la direction
						currentArticleIndex += direction;

						// Vérifie si l'index actuel est dans les limites du tableau des articles
						if (currentArticleIndex < 0) {
							currentArticleIndex = articles.length - 1; // Revient au dernier article si on est au début
						} else if (currentArticleIndex >= articles.length) {
							currentArticleIndex = 0; // Revient au premier article si on est à la fin
						}

						// Masquer l'article actuel avec une transition en fondu
						$('.single-main').fadeOut(400, function() {
							// Met à jour le contenu de l'article actuel sur la page
							var article = articles[currentArticleIndex];
							document.getElementById('article-image').src = article.image;
							document.getElementById('article-title').textContent = article.title;
							document.querySelector('.author a').textContent = article.author;
							document.querySelector('.date').textContent = article.date;
							document.querySelector('.views').textContent = article.views;
							document.getElementById('article-content').innerHTML = article.content;

							// Affiche le nouvel article avec une transition en fondu
							$('.single-main').fadeIn(400);
						});
					}

					// Charge le premier article au chargement de la page
					changeArticle(0);

				</script>

<script>
				function updatePrice() {
				var subscriptionType = document.getElementById('subscriptionType').value;
				var priceField = document.getElementById('price');

				if (subscriptionType === 'mensuel') {
					priceField.value = '20.000 FCFA par mois';
				} else if (subscriptionType === 'annuel') {
					priceField.value = '150.000 FCFA par an';
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