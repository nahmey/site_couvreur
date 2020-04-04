<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Erreur - {{config('app.name')}} - F-J-RENOVATION</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/creative-v'.config('app.version').'.css')}}" rel="stylesheet">
</head>

<body class="bg-dark h-100">
    <main role="main" class="h-100 p-3">
        <div class="row justify-content-center h-100">
            <div class="col-md-8 col-lg-6 align-self-center" style="font-size:200%">
                <h2 class="m-2 text-light">Erreur 404</h2>
                <p class="m-2 text-light">La page que vous cherchez n'existe pas.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger mt-4" href="{{route('accueil')}}"><i class="fas fa-home"></i> Retour à l'accueil</a>
            </div>
        </div>
    </main>


	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/creative-v'.config('app.version').'.js')}}"></script>
</body>

</html>