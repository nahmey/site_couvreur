<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="L’entreprise F.J. Rénovation situé à Herrlisheim, entre Haguenau et Strasbourg, est à votre disposition pour tous vos travaux de couverture, zinguerie, étanchéité et pose de velux.">
	<meta name="author" content="Kennel Julien">
	<meta property="og:title" content="L’entreprise F.J. Rénovation situé à Herrlisheim, entre Haguenau et Strasbourg, est à votre disposition pour tous vos travaux de couverture, zinguerie, étanchéité et pose de velux.">
	<meta property="og:image" content="{{asset('img/pignon_arbre.jpg')}}">

	<title>F.J. Rénovation</title>

	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/creative-v'.config('app.version').'.css')}}" rel="stylesheet">
</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">F.J. RENOVATION</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">A propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#couverture">Couverture</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#zinguerie">Zinguerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#fenetre">Fenêtre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#etancheite">Etanchéité</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end">
					<h1 class="text-uppercase text-white font-weight-bold">F.J. RENOVATION</h1>
					<hr class="divider my-4">
				</div>
				<div class="col-lg-8 align-self-baseline">
					<p class="text-white-75 font-weight-light mb-5">Artisan spécialisé dans les travaux de couverture, zinguerie, fenêtre de toit et étanchéité.</p>
					<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">En savoir plus</a>
				</div>
			</div>
		</div>
	</header>

	<!-- About Section -->
	<section class="page-section bg-primary" id="about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="text-white mt-0">Qui suis-je ?</h2>
					<hr class="divider light my-4">
					<p class="text-white-50">
						Bienvenue sur le site de F.J. Rénovation, situé à Herrlisheim, entre Haguenau et Strasbourg.
					</p>
					<p class="text-white-50">
						L’entreprise F.J. Rénovation est à votre disposition pour tous vos travaux de couverture, zinguerie, étanchéité et pose de velux.
					</p>
					<p class="text-white-50">
						Un seul interlocuteur à votre écoute pour votre suivi de chantier.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Couverture Section -->
	<section class="page-section" id="couverture">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center align-middle">
					<h2 class="text-dark mt-0">Couverture</h2>
					<hr class="divider my-4">
					<div class="row">
						<img class="img-fluid col-md-4 col-xs-12 mb-4" src="{{asset('img/portfolio/thumbnails/couverture2.jpg')}}" alt="Couverture">
						<div style="margin: auto;" class="col-md-8 col-xs-12">
							<p class="text-dark-50">
								"F.J. Rénovation" est à votre service, particulier et professionnel, pour tout travaux de couvertures en tuiles mécaniques, tuiles plates, ainsi qu'en ardoise.
							</p>
							<p class="text-dark-50">
								Je suis également à votre service pour toute réparation de toiture, remplacement de vos tuiles cassées ou emportées par le vent.
							</p>
							<p>
								<button class="btn btn-primary button_photo" data-url="{{route('couverture_photos')}}">Voir mes réalisations</button> 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Zinguerie Section -->
	<section class="page-section bg-dark" id="zinguerie">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<h2 class="text-white mt-0">Zinguerie</h2>
					<hr class="divider light my-4">
					<img class="img-fluid float-right col-md-7 col-xs-12 mb-4" src="{{asset('img/bandeau_2.jpg')}}" alt="Zinguerie">
					<p class="text-white-50 mb-4 text-justify">
						J'étudie et vous propose une solution personnalisée.
					</p>
					<p class="text-white-50 mb-4 text-justify">
						Je réalise la pose de gouttières en zinc ou en cuivre dans le respect des normes en vigueur. Ainsi que la fabrication et la pose de chéneaux sur mesure pour s’adapter à toutes les exigences du bâtiment.
					</p>
					<p class="text-white-50 mb-4 text-justify">
						La pose de boite à eau, col de cygne, tuyaux de descente fait également partie de mes compétences.
					</p>
					<p class="text-white-50 mb-4 text-justify">
						À votre disposition pour vos habillages de planches de rive, habillages de chéneaux, habillages de cheminées et également la pose de couvertines.
					</p>
					<p class="text-white-50 mb-4">
						Tous ces travaux de zinguerie sont possibles en divers matériaux : zinc naturel, zinc pré-laqué, zinc pré-patiné, cuivre, alu, tôle galvanisée laquée.
					</p>

					</p>
					<p>
						<button class="btn btn-primary button_photo" data-url="{{route('zinguerie_photos')}}">Voir mes réalisations</button> 
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Fenêtre Section -->
	<section class="page-section bg-primary" id="fenetre">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center align-middle">
					<h2 class="mt-0 text-white">Fenêtre de toit</h2>
					<hr class="divider my-4">
					<div class="row">
						<img class="img-fluid float-left col-md-4 col-xs-12 mb-4" src="{{asset('img/portfolio/thumbnails/fenetre2.jpg')}}" alt="Fenêtre de toit">
						<div style="margin: auto;" class="text-right col-md-8 col-xs-12">
							<p class="text-white-75">
								Je vous propose la pose de velux sur toiture neuve, à partir de la création de l’ouverture à la pose du velux.
							</p>
							<p class="text-white-75">
								Ceci est également possible en rénovation.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Étanchéité Section -->
	<section class="page-section" id="etancheite">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center align-middle">
					<h2 class="text-dark mt-0">Étanchéité</h2>
					<hr class="divider my-4">
					<div class="row">
						<img class="img-fluid float-right col-md-6 col-xs-12 mb-4" src="{{asset('img/portfolio/thumbnails/etanche2.jpg')}}" alt="Étanchéité">
						<div style="margin: auto" class="col-md-6 col-xs-12">
							<p class="text-dark-50 mt-4">
								Pour vos surfaces planes, pensez aux différents systèmes d’étanchéité.
							</p>
							<p class="text-dark-50 mt-4">
								Je réalise des toitures chaudes ou froides en bitume ainsi qu’en EPDM (Membrane en caoutchouc souple qui permet d’étanchéifier vos toitures plates, végétales, ou légèrement inclinées.)
							</p>
						</div>
					</div>
					<h5 class="pt-4">
						<b>Tous nos travaux profitent d’une garantie décennale.</b>
					</h5>
				</div>
			</div>
		</div>
	</section>


	<!-- Contact Section -->
	<section class="page-section bg-dark text-white" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="mt-0">Contact</h2>
					<hr class="divider my-4">
					<p class="text-muted">
						Entreprise basée à Herrlisheim dans le 67 je me déplace dans le Bas-Rhin pour vous établir un devis gratuitement.
					</p>
					<p class="text-muted mb-5">
						Pour plus d’informations, vous pouvez me contacter par téléphone ou par mail
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
					<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
					<div>
						<a href="tel:0689698489">06.89.69.84.89</a>
					</div>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
					<a class="d-block" href="mailto:f.j.renovation@outlook.fr">
						f.j.renovation@outlook.fr
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Copyright &copy; 2020 - FJ Rénovation</div>
		</div>
	</footer>


	<!-- Modal -->
	<div id="modal_area"></div>

	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/creative-v'.config('app.version').'.js')}}"></script>
</body>

</html>