@extends('inc.ss.app')

@section('content')
<div class="page-banner-area bg-1">
    <div class="container">
        <div class="page-banner-content">
            <h1>Nos différents Projets</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Nos Projets</li>
            </ul>
        </div>
    </div>
</div>

<div class="academic-area pt-100 pb-70 bg-">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($projets as $kp => $p)
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
                        <div class="single-academics-card2 bg-1" style="background-image: url('{{asset('storage').'/'.$p->image_min}}');">
                            <div class="serial">
                                <p>{{ sprintf("%02d",$kp+1) }}.</p>
                            </div>
                            <div class="academic-content">
                                <div class="academic-top-content">
                                    <i class="flaticon-graduation"></i>
                                    <a href="{{route("projets.view",$p->slug)}}">
                                        <h3>{{$p->titre}}</h3>
                                    </a>
                                </div>
                                <p>
                                    {{ Str::words($p->resume, 15, '...') }}
                                </p>
                                <a href="{{route("projets.view",$p->slug)}}" class="read-more-btn white-color">
                                    Voi la Description du Projet <i class="flaticon-next"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="acdemics-right-content">
                    <x-NewsletterComponent></x-NewsletterComponent>
                </div>
                <div class="related-post-area">
                    <h3 class="text-prim">Actualités Récentes</h3>
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