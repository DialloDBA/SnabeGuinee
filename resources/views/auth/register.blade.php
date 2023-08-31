@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Inscription</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Inscription</li>
            </ul>
        </div>
    </div>
</div>
<div class="register-area pt-100 pb-70">
    <div class="container">
        <div class="register">
            <h3 class="text-prim">Inscription</h3>
            <form action="{{route('register')}}" method="POST" id="registerForm">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Adresse E-mail <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Votre Adresse E-mail *" value="{{ old('email')}}" autofocus>
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="telephone">Num. de Téléphone <span class="text-danger">*</span></label>
                            <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="Votre Numero de telephone*" value="{{ old('telephone') ?? '+224 '}}">
                            @error('telephone')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom de Famille <span class="text-danger">*</span></label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom de Famille *" value="{{ old('nom')}}">
                            @error('nom')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="prenom">Prénom <span class="text-danger">*</span></label>
                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom *" value="{{ old('prenom')}}">
                            @error('prenom')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for= "password">Mot de Passe <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Mot de Passe *" >
                            @error('password')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for= "password_confirmation">Confirmation Mot de Passe<span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Mot de passe de Confirmation *">
                            @error('password_confirmation')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="default-btn btn active">S'inscrire</button>
                <p>Vous avez déjà un compte ? <a href="{{route('login')}}">Se connecter </a></p> 
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $("#registerForm").submit(function(){
            $(this).find(".default-btn").html("Inscription en cours...").addClass("disabled");
        });
    </script>
@endsection