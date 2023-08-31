@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Bourses d'Etudes</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Nos Bourses d'Etudes</li>
            </ul>
            <div class="my-4">
                <p class="text-white">
                    Les Bourses d’étude de premier cycle, master, doctorat et postdoctorales pour entreprendre des études universitaires sont disponibles sur cette page. Des bourses entièrement financées et partiellement financées sont offertes par des gouvernements, des organisations, des universités, des entreprises et des fondations afin de soutenir les étudiants internationaux et les étudiants de pays en développement.
                    <br>
                    La plupart des bourses d’étude sont fournies pour des études aux États-Unis, au Royaume-Uni, en Chine, au Canada, en Australie, en Allemagne, en Turquie, en France, en Nouvelle-Zélande, etc. Les bourses sont disponibles dans différents domaines de spécialisation tels que 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="courses-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-left-content">
                    <div class="row">
                        @forelse ($bourses as $b)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-courses-card style4">
                                <div class="courses-img">
                                    <a href="{{route("bourses.view",$b->unique)}}">
                                        <img class="h-100" src="{{asset('storage').'/'.$b->image_min_bourse}}" alt="{{$b->titre_bourse}}" titre="{{$b->titre_bourse}}">
                                    </a>
                                </div>
                                <div class="courses-content">
                                    <div class="admin-profile">
                                        <img src="{{asset('asset/images/devise.png')}}" alt="{{$info->entite}}" title="{{$info->entite}}">
                                        <p>&nbsp; Avec <a href="{{route('about')}}">{{$info->entite}}</a></p>
                                    </div>
                                    <a href="{{route("bourses.view",$b->unique)}}">
                                        <h3>{{$b->titre_bourse}}</h3>
                                    </a>
                                    <div class="bottom-content">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <ul>
                                                    <li><i class="flaticon-graduation"></i>321</li>
                                                    <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Free</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="col-lg-12 col-md-12">
                                <h3>Aucune Bourses d'etudes disponibles</h3>
                            </div>
                        @endforelse
                    </div>
                    <div class="paginations">
                        <ul>
                            <li><a href="courses-details.html"><i class="flaticon-back"></i></a></li>
                            <li><a href="courses-details.html">01</a></li>
                            <li><a href="courses-details.html">02</a></li>
                            <li><a href="courses-details.html">03</a></li>
                            <li><a href="courses.html" class="active"><i class="flaticon-next"></i></a></li>
                        </ul>
                        {{-- {{ $bourses->links()}} --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-right-content pl-20">
                    <div class="serch-content">
                        <h3>Réchercher</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Find Your Course">
                            <button type="submit" class="src-btn">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="category-content">
                        <h3>Selectionner une Categorie</h3>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected="">Choisir une Categorie</option>
                            @foreach ($domaines as $d)
                            <option value="{{$d->id}}">{{$d->libelle}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="category-content">
                        <h3>Selectionner un Pays</h3>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected="">Select a Category</option>
                            @foreach ($pays as $p)
                            <option value="{{$d->id}}">{{$p->langFR }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="location-type">
                        <h3>Public Cible</h3>
                        @foreach ($cibles as $c)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$c->id}}" id="flexCheckDefault">
                            <label class="form-check-label" for="{{$c->libelle}}">
                                {{$c->libelle}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="program-level">
                        <h3>Programme d'Etudes</h3>
                        @foreach ($programmes as $k=> $p)
                        <div class="form-check">
                            <input class="form-check-input" name="programmes[{{$k}}]" type="checkbox" value="{{$p->id}}" id="{{$p->titre}}{{$p->id}}">
                            <label class="form-check-label" for="{{$p->titre}}{{$p->id}}">
                                {{$p->titre}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection