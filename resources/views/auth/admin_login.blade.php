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
							<h3 class="account-title">Connexion</h3>
							<p class="account-subtitle">Accéder à votre tableau de bord</p>
							@if (session('notification.message'))
                                <div class="alert alert-{{ session('notification.type') }} alert-dismissible fade show" role="alert">
                                    {{ session('notification.message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif
							<!-- Account Form -->
							<form action="{{route('login')}}" method="POST">
                                @csrf
                                @method("POST")
								<div class="form-group">
									<label>Nom Utilisateur, Adresse E-mail ou Telephone </label>
									<input class="form-control" type="text" name="username" value="{{ old('username')}}" placeholder="Nom Utilisateur, Adresse E-mail ou Telephone">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Mot de Passe</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="{{route('admin.forgot-password')}}">
												Mot de Passe Oublié ?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password" value="">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Se connecter</button>
								</div>
								<div class="account-footer">
									<p>Vous n'avez pas encore de compte? <a href="{{ route('register')}}">S'enregistrer</a></p>
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