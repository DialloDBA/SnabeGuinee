@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Vidéos en Vedette</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Nos Vidéos en Vedettes</li>
            </ul>
        </div>
    </div>
</div>
<div class="latest-news-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="latest-news-left-content pr-20">
                    
                    <div class="latest-news-card-area">
                        <h3 class="text-prim">Dernières Vidéos </h3>
                        <div class="row">
                            @foreach($videos as $key=>$a)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-news-card">
                                    <div class="news-img">
                                        {{-- <a href="{{route('news.post',[$a->category,$a->unique])}}">
                                            <img src="{{ asset('storage').'/'.$a->image_min }}" alt="Image">
                                        </a> --}}
                                        @if ($a->source_video==1)
                                        <video class="w-100" height="200" src="{{asset('storage')."/".$a->url_video}}" poster="{{asset('storage')."/".$a->image_video}}" controls></video>
                                        @endif
                                        @if ($a->source_video==2)
                                        <iframe class="w-100" height="200" src="https://www.youtube.com/embed/<?=substr($a->url_video,-11)?>" title="{{$a->titre_video}}"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="">
                                        </iframe>
                                        @endif
                                    </div>
                                    <div class="news-content">
                                        <div class="list">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="flaticon-user"></i>Par administrateur
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="flaticon-tag"></i> 
                                                        {{$a->category->libelle_cat}}
                                                    </a> 
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="">
                                            <h3 class="text-prim">
                                                {{ $a->titre_video }}
                                            </h3>
                                        </a>
                                        {{-- <a href="" class="read-more-btn text-prim">Afficher la description<i class="flaticon-next"></i> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="paginations">
                        <ul>
                            <li><a href="news-details.html"><i class="flaticon-back"></i></a></li>
                            <li><a href="news-details.html">01</a></li>
                            <li><a href="news-details.html">02</a></li>
                            <li><a href="news-details.html">03</a></li>
                            <li><a href="latest-news.html" class="active"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="serch-content">
                    <h3 class="text-prim">Recherche</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Find Your Course">
                        <button type="submit" class="src-btn">
                            <i class="flaticon-search"></i>
                        </button>
                    </div>
                </div>
                <div class="category-list">
                    <h3 class="text-prim">Liste des catégories</h3>
                    <ul>
                        @foreach ($cats as $c)
                        <li>
                            <a href="{{route('news.category',$c)}}">{{$c->libelle_cat}} (<span>{{ $c->videos()->where('actived','1')->count()}}</span>)<i class="ri-arrow-drop-right-fill"></i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="related-post-area">
                    <h3 class="text-prim">Autres Actualités du {{ $info->entite }}</h3>
                    
                    @foreach ($news as $a)
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="{{route('news.post',[$a->category,$a->unique])}}"><img src="{{ asset('storage').'/'.$a->image_max }}" alt="Image"></a>
                            <h4>
                                <a href="{{route('news.post',[$a->category,$a->unique])}}">{{$a->titre}}</a>
                            </h4>
                            <p><i class="flaticon-tag"></i> {{$a->category->libelle_cat}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="related-post-area">
                    <h3 class="text-prim">Nos Bourses d'Etudes </h3>
                    @foreach ($news as $a)
                    <div class="related-post-box">
                        <div class="related-post-content">
                            <a href="{{route('news.post',[$a->category,$a->unique])}}"><img src="{{ asset('storage').'/'.$a->image_max }}" alt="Image"></a>
                            <h4>
                                <a href="{{route('news.post',[$a->category,$a->unique])}}">{{$a->titre}}</a>
                            </h4>
                            <p><i class="flaticon-tag"></i> {{$a->category->libelle_cat}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection