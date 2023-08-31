<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - {{$info->entite ?? "Assiatech Administration"}}</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<a href="{{route('home')}}" class="btn btn-primary apply-btn">Accueil</a>
				<div class="container">
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="{{route('home')}}"><img style="width: 245px !important;" src="{{asset('assets/img/logo-2.png')}}" alt="{{$info->entite }}"></a>
					</div>
					<!-- /Account Logo -->
					
                    <div class="account-box">
                        <div class="account-wrapper">
                            <h3 class="account-title">Mot de passe oublié?</h3>
                            <p class="account-subtitle">
                                Entrez votre e-mail ou votre téléphone pour obtenir un lien de réinitialisation du mot de passe
                            </p>
    
                            <!-- Account Form -->
                            <form class="" method="" action="">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Réinitialiser le mot de passe</button>
                                </div>
                                <div class="account-footer">
                                    <p>Rappelez-vous votre mot de passe ?  <a href="{{route('login')}}">Se connecter</a></p>
                                </div>
                            </form>
                            <!-- /Account Form -->
    
                        </div>
                    </div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>