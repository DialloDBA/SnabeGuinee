@extends('inc.ss.app')

@section('content')

<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>Nos différents Projets</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('projets.index')}}">Nos Projets</a></li>
                <li>{{$projet->titre}}</li>
            </ul>
        </div>
    </div>
</div>

<div class="academics-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="academics-details">
                    
                    <img src="{{ asset('storage').'/'.$projet->image_max }}" alt="{{$projet->titre}} Image">
                    <div class="details mt-2">
                        <h2>{{$projet->titre}}</h2>
                    </div>
                    <div class="regiStartion-and-fee">
                        {!! $projet->contenu !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="detgails-right-content">
                    <div class="serch-content d-none">
                        <h3>Search</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Find Your Course">
                            <button type="submit" class="src-btn">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="academics-list">
                        <h3>Autres Projets </h3>
                        <ul>
                            @foreach ($others as $pp)
                            <li class="">
                                <a href="{{route('projets.view',$pp->slug)}}">{{$pp->titre}}<i class="ri-arrow-drop-right-fill"></i></a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <x-NewsletterComponent></x-NewsletterComponent>
                    <div class="related-download">
                        <h3>Telecharger en PDF</h3>
                        <ul>
                            <li>
                                <a href="#"><i class="flaticon-pdf-file"></i>Brochure Department</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection