@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Récupérer mot de passe</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Récupérer mot de passe</li>
            </ul>
        </div>
    </div>
</div>


<div class="password-area pt-100 pb-70">
    <div class="container">
        <div class="password">
            <h3>Mot de passe oublié</h3>
            <form>
                <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Username Or Email Address*">
                </div>
                <button type="submit" class="default-btn btn active">Réinitialiser Maintenant</button>
            </form>
        </div>
    </div>
</div>
@endsection