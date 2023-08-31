@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Connexion</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Connexion</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-area pt-100 pb-70">
    <div class="container">
        
        <div class="login">
            @if (session('notification.message'))
                    <div class="alert alert-{{session('notification.type')}} alert-dismissible fade show" role="alert">
                        <strong>{{session('notification.alert')}}</strong> {!! session('notification.message') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
            <h3>Connexion</h3>
            <form action="{{ route('login')}}" method="POST" id="login-ui-form">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Nom Utilisateur, Téléphone ou E-mail *" value="{{ old('username')}}">
                    @error('username')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de Passe *">
                    @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Se souvenir de moi
                    </label>
                </div>
                <button type="submit" class="default-btn btn active">Se connecter</button>
                <div class="d-flex ">
                    <a class="mx-2" href="{{url('forgot-password')}}">Mot de passe perdu?</a>
                    <p>
                        Vous n'avez pas encore un compte chez Nous ? 
                        <a class="d-inline" href="{{url('register')}}">Créer un compte</a>
                    </p>
                </div>
                <style>
                    .btn-google {
                            color: #545454;
                        background-color: #ffffff;
                        box-shadow: 0 1px 2px 1px #ddd;
                    }
                </style>
                <div class="row mt-2">
                    <div class="col-md-6">
                      <a href="{{route('login.google')}}" class="btn btn-outline-danger">
                        <i class="ri-google-line"></i> Connection avec Google
                      </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('login.facebook')}}" class="btn btn-outline-primary">
                            <i class="ri-facebook-line"></i> Connection avec Facebook
                          </a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $("#login-ui-form").submit(function(){
            $(this).find(".default-btn").html("Connexion en cours...").addClass("disabled");
        });
    </script>
@endsection

