@extends('inc.ss.app')

@section('content')
<div class="banner-area pb-100">
    <div class="container-fluid">
        <div class="hero-slider owl-carousel owl-theme" data-slider-id="1" >
            @foreach ($sliders as $s)
            <div class="slider-item banner-bg-1" style="background-image: url('{{asset("storage")."/".$s->image}}') !important;">
                <div class="slider-content">
                    <h1>{{ $s->title_sm }}</h1>
                    <p>
                        {{$s->description ?? "Explorez votre potentiel et vos talents au ".str()->upper(config('app.name')) }}
                    </p>
                    <a href="{{route('register')}}" class="default-btn btn">
                        Commencez dès maintenant <i class="flaticon-next"></i>
                    </a>
                </div>
            </div>
                
            @endforeach
            <div class="slider-item banner-bg-1">
                <div class="slider-content">
                    <h1>Explorez votre potentiel et vos talents au {{str()->upper(config('app.name'))}}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                        <a href="{{route('register')}}" class="default-btn btn">
                            Commencez dès maintenant <i class="flaticon-next"></i>
                        </a>
                </div>
            </div>
            <div class="slider-item banner-bg-2">
                <div class="slider-content">
                    <h1>Explorez votre créativité et votre talent Avec le {{str()->upper(config('app.name'))}} </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                        <a href="{{route('register')}}" class="default-btn btn">
                            Commencez dès maintenant <i class="flaticon-next"></i>
                        </a>
                </div>
            </div>
            <div class="slider-item banner-bg-3">
                <div class="slider-content">
                    <h1>Commencez votre bel et brillant avenir à partir d'ici</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                        <a href="{{route('register')}}" class="default-btn btn">
                            Commencez dès maintenant <i class="flaticon-next"></i>
                        </a>
                </div>
            </div>
        </div>
        <div class="owl-thumbs" data-slider-id="1">
            @foreach ($sliders as $s)
            <button class="owl-thumb-item">
                <img src="{{asset('storage')."/".$s->image}}" alt="Images">
            </button>
            @endforeach
            <button class="owl-thumb-item">
                <img src="asset/images/banner/thumb-1.jpg" alt="Images">
            </button>
            <button class="owl-thumb-item">
                <img src="asset/images/banner/thumb-2.jpg" alt="Images">
            </button>
            <button class="owl-thumb-item">
                <img src="asset/images/banner/thumb-3.jpg" alt="Images">
            </button>
        </div>
    </div>
</div>



<div class="campus-information-area pb-70" style="margin-top: 10px !important;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1300"
                data-aos-once="true">
                <div class="campus-content pr-20">
                    <div class="campus-title">
                        <h2 class="text-prim display-2 fw-bold">Qui Sommes Nous ? </h2>
                        <p>
                            Le Service National des Bourses Extérieures (SNABE) est un Etablissement Public à caractère Administratif (EPA). Doté d’une autonomie financière et de gestion, placé sous la tutelle technique du Ministre Directeur de Cabinet de la Présidence de la République et sous la tutelle financière du Ministère en charge des Finances. Sa vocation, mettre  en œuvre la politique et la vision  du gouvernement en matière de formation des étudiants et cadres guinéens à l’étranger, par le biais  de coopérations séculaires entre la République de Guinée et ses partenaires bilatéraux et multilatéraux.
                        </p>
                    </div>
                    <div class="list">
                        <div class="row">
                            <div class="">
                                <h3 class="text-prim">Les Références du SNABE</h3>
                            </div>
                            <div class="col-lg-6 col-md-6">

                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Processus d'Obtention des Bourses</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Constitution des Dossiers</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Respect des règlements du pays d'acceuil</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Comment s'adapter au pays d'acceuil</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Mode Vestimentaire</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Citation sur l'Education / Encouragement</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Doctoral Degrees</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Les idées de Projets Bancables dans lesquelles les Boursiers peuvent investir en Guinée</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="counter">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer text-prim" data-count="10">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Des années d'expérience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer text-prim" data-count="300">00</span>
                                        <span class="target heading-color"></span><span class="target">+</span>
                                    </h1>
                                    <p>Etudiant(e)s Accompagné(e)s</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer text-prim" data-count="52">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Projets</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex  ">
                        <a href="{{route('about')}}" class="default-btn btn">En savoir Plus
                            <i class="flaticon-next"></i>
                        </a>
                        <a href="{{route('register')}}" class="default-btn btn my-2">Commencez maintenant
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 campus-image pl-20" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1300"
                data-aos-once="true">
                <img src="asset/images/snabe/snabe_home_img.jpg" alt="Image">
                {{-- <div class="campus-image pl-20">
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="admisssion-area ptb-100 admission-bg" style="background-image: url('{{ asset("asset/images/mot-du-dg.jpg")}}')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="admission-left-content">
                    <h2 class="text-prim">Les Mots du Directeur General du SNABE !</h2>
                    <p></p>
                    <a href="{{route('about')}}" class="default-btn btn">En savoir plus<i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="admission-right-content">
                    <ul>
                        <li>
                            <p>Voir la Vidéo</p>
                        </li>
                        <li>
                            <div class="icon">
                                <a class="popup-youtube play-btn"
                                    href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                        class="ri-play-fill"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="health-care-area ptb-100 bg-f4f6f9" style="padding-bottom: 25px !important;padding-top: 40px !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="text-prim">Notre Mission</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style1">
                    <div class="img">
                        <a href="{{route('about')}}">
                            <img src="{{asset('asset/images/snabe/mission-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3 class="text-prim">Sélection des candidats </h3>
                        </a>
                        <p>
                            Le SNABE identifie et sélectionne les candidats éligibles pour les bourses d'études à l'étranger. Cela implique souvent un processus de candidature, d'évaluation et de sélection en fonction des critères établis.
                        </p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style2">
                    <div class="img">
                        <a href="health-care-details.html">
                            <img src="{{asset('asset/images/snabe/mission-2.jpg')}}" alt="Image">
                            </a>
                    </div>
                    <div class="health-care-content">
                        <a href="{{route('about')}}">
                            <h3 class="text-prim">Attribution des bourses</h3>
                        </a>
                        <p> Une fois les candidats sélectionnés, le SNABE attribue les bourses d'études en fonction des disponibilités et des priorités définies par le gouvernement ou l'organisme compétent</p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style1">
                    <div class="img">
                        <a href="health-care-details.html">
                            <img src="{{asset('asset/images/snabe/mission-2.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3 class="text-prim">Gestion administrative </h3>
                        </a> 
                        <p>Le SNABE gère les formalités administratives liées aux bourses, telles que la préparation des documents nécessaires, la communication avec les établissements d'enseignement à l'étranger et la coordination des procédures d'inscription.</p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style2">
                    <div class="img">
                        <a href="{{route('about')}}">
                            <img src="{{asset('asset/images/snabe/mission-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3 class="text-prim">Suivi des Boursiers</h3>
                        </a>
                        <p>Pendant la période d'études à l'étranger, le SNABE assure un suivi des étudiants bénéficiaires de bourses. Cela peut inclure la communication régulière avec les étudiants, la résolution des problèmes éventuels et le rapport sur la progression académique.</p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE<i
                                class="flaticon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style1">
                    <div class="img">
                        <a href="health-care-details.html">
                            <img src="{{asset('asset/images/snabe/mission-2.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3 class="text-prim">Rapports et évaluations </h3>
                        </a> 
                        <p>Le SNABE peut être responsable de la collecte de données et de la préparation de rapports sur l'efficacité et les résultats des programmes de bourses, ainsi que de l'évaluation de l'impact de ces programmes sur le développement éducatif du pays.</p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-health-care-card style2">
                    <div class="img">
                        <a href="{{route('about')}}">
                            <img src="{{asset('asset/images/snabe/mission-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3 class="text-prim">Collaboration internationale</h3>
                        </a>
                        <p>Le SNABE peut collaborer avec des institutions éducatives étrangères, des ambassades et des organisations internationales pour faciliter la mise en œuvre des programmes de bourses et renforcer les relations éducatives internationales.</p>
                        <a href="{{route('about')}}" class="read-more-btn">En savoir plus sur  le SNABE<i
                                class="flaticon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="academic-area pt-0 pb- bg-f4f6f9" style="margin-top: 0px !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="text-prim">Nos Projets Phares</h2>
            <p>Retrouvez les projets fars du Service National des Bourses Extérieures (SNABE).</p>
        </div>
        <div class="row justify-content-center">
            @foreach ($projets as $kp => $p)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
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
</div>



<div class="admisssion-area bg-f4f6f9 ptb-100" style="padding-bottom: 0px !important;padding-top: 30px !important;">
    <div class="container">
        <div class="admission-content">
            <div class="section-title ">
                <h2 class="text-prim d-inline">Témoignage d'un Boursier</h2>
            </div>
            <div class="admission-image">
                <img src="asset/images/admission/admission-1.jpg" alt="Image">
                <div class="icon">
                    <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i class="ri-play-fill"></i></a>
                </div>
            </div>
            <div class="query text-center">
                <p></p>
                {{-- <a href="admission.html" class="default-btn btn">More on admission<i class="flaticon-next"></i></a> --}}
            </div>
        </div>
    </div>
</div>

<div class="podcasts-area pt-100 pb-0" style="padding-bottom : 15px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title style2">
                    <h2 class="text-prim">Bourses Recommandées</h2>
                    <p>
                       
                    </p>
                </div>
                @foreach ($bourses as $k=>$b)
                <div class="single-podcasts-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="podcasts-image">
                                <img src="{{asset('storage').'/'.$b->image_min_bourse}}" alt="{{$b->titre_bourse}}">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="podcast-content">
                                
                                @if ($b->programmes()->count()>0)
                                <span>
                                    <i class="flaticon-tag "></i>
                                </span>
                                    @foreach ($b->programmes()->get() as $p)
                                    <span>
                                        {{$p->titre}}, 
                                    </span>
                                    @endforeach
                                @endif
                                <span><i class="flaticon-graduation mx-1"></i> 321</span>
                                <span><i class="flaticon-bubble-chat mx-1"></i> 1.2k</span>
                                <span><i class="flaticon-time mx-1"></i>{{$b->limite()}}</span>
                                <h3 class="text-prim">{{$b->titre_bourse}}</h3>
                                {{-- <div>
                                    {!! Str::words($b->description_bourse,"...") !!}
                                </div> --}}
                                <div class="home-icon text-prim">
                                    <a class="" href="{{route('bourses.view',$b)}}">
                                        <i class="ri-play-fill text-prim"></i><span>En savoir plus</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h3 class="text-prim">Filtrer</h3>
                    <form class="" action="">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="*">Toutes les Categories</option>
                                        @foreach ($domaines as $d)
                                        <option value="{{$d->id}}">{{$d->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 my-lg-2 my-2">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Tous les Sujets</option>
                                        @foreach ($programmes as $d)
                                        <option value="{{$d->id}}">{{$d->titre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-lg-2 mb-2">
                                <select name="" id="" class="form-control">
                                    <option value="">Toutes les destinations</option>
                                    @foreach ($pays as $d)
                                        <option value="{{$d->id}}">{{$d->langFR}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="default-btn btn w-100 my-sm-1 my-xs-1" type="submit">Soumettre</button>
                    </form>
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
               <x-NewsletterComponent></x-NewsletterComponent>
            </div>
        </div>
    </div>
</div>
<div class="lates-news-area pt-0 pb-0 bg-f4f6f9" style="padding-top: 30px !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="text-uppercase text-prim">Bourses Pour Femmes</h2>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7">
                @foreach ($feminines as $kk=>$f)
                    @if ($f->id !=($feminines->last()->id))
                    <div class="single-news-card style3" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200" data-aos-once="true">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="news-img">
                                    <a href="{{route('bourses.view',$f)}}">
                                        <img src="{{asset('storage').'/'.$f->image_min_bourse}}" alt="{{$f->titre_bourse}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="news-content">
                                    <div class="list">
                                        <ul>
                                            @if ($f->programmes()->count()>0)
                                                <li>
                                                    <i class="flaticon-tag "></i>
                                                    @foreach ($f->programmes()->get() as $p)
                                                    
                                                        {{$p->titre}}, 
                                                    
                                                    @endforeach
                                                </li>
                                            @endif

                                            <li><i class="flaticon-graduation"></i>321</li>
                                            <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                            <li><i class="flaticon-time"></i>{{$f->limite()}}</li>
                                        </ul>
                                    </div>
                                    <a href="{{route('bourses.view',$f)}}">
                                        <h3>{{$f->titre_bourse}}</h3>
                                    </a>
                                    <a href="{{route('bourses.view',$f)}}" class="read-more-btn">Continuer la lecture...<i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            @foreach ($feminines as $kk=>$f)
                    @if ($f->id ==($feminines->last()->id))
                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                        data-aos-once="true">
                        <div class="single-news-card style2">
                            <div class="news-img">
                                <a href="news-details.html">
                                    <img src="{{asset('storage').'/'.$f->image_min_bourse}}" alt="{{$f->titre_bourse}}">
                                </a>
                            </div>
                            <div class="news-content">
                                <div class="list">
                                    <ul>
                                        @if ($f->programmes()->count()>0)
                                            <li>
                                                <i class="flaticon-tag "></i>
                                                @foreach ($f->programmes()->get() as $p)
                                                
                                                    {{$p->titre}}, 
                                                
                                                @endforeach
                                            </li>
                                        @endif
                                        <li><i class="flaticon-graduation"></i>321</li>
                                        <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                        <li><i class="flaticon-time"></i>{{$b->limite()}}</li>
                                    </ul>
                                </div>
                                <a href="{{route('bourses.view',$f)}}">
                                    <h3>{{$f->titre_bourse}}</h3>
                                </a>
                                <a href="{{route('bourses.view',$f)}}" class="read-more-btn">Continuer la lecture...<i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
        </div>
        <div class="more-latest-news text-center">
            <p>
                <a href="{{route("bourses")}}" class="read-more-btn active"> En savoir plus sur nos bourses <i class="flaticon-next"></i></a>
            </p>     
        </div>
    </div>
</div>

<div class="students-stories-area bg-f4f6f9 pt-100 pb-0" style="padding-top: 50px !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="text-prim">Vidéos en Vedette & histoires d'étudiants</h2>
            <p>La douleur elle-même doit être suivie de l'élite adipi scante afin que l'élite de la terre soit pleurée et non le caporal de la propriété</p>
        </div>
        <div class="row justify-content-center">
            @foreach ($videos as $v)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-stories-card">
                    <div class="stories-content">
                        <h3 class="text-prim">{{ Str::words($v->titre_video,5,'...')}}</h3>
                    </div>
                    @if ($v->source_video==1)
                    <video src="{{asset('storage')."/".$v->url_video}}" poster="{{asset('storage')."/".$v->image_video}}" controls></video>
                    @endif
                    @if ($v->source_video==2)
                    <iframe src="https://www.youtube.com/embed/<?=substr($v->url_video,-11)?>" title="{{$v->titre_video}}"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                    </iframe>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="lates-news-area ptb-100" style="padding-bottom: 25px !important; padding-top: 30px !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="text-prim">Dernières nouvelles</h2>
           <p>La douleur elle-même doit être suivie de l'élite adipiscante afin que l'élite de la terre soit pleurée et non le caporal de la propriété</p>
        </div>
        <div class="row justify-content-center">
            
           @forelse ($posts as $k=>$a)
           <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
               data-aos-once="true">
               <div class="single-news-card">
                   <div class="news-img">
                       <a href="{{route('news.post',[$a->category,$a->unique])}}">
                            <img src="{{ asset('storage').'/'.$a->image_min }}" alt="Image">
                        </a>
                   </div>
                   <div class="news-content">
                       <div class="list">
                           <ul>
                               <li><i class="flaticon-user"></i>Par <a href="{{route('news.post',[$a->category,$a->unique])}}">Administrateur</a></li>
                               <li><i class="flaticon-tag"></i>{{$a->category->libelle_cat}}</li>
                           </ul>
                       </div>
                       <a href="{{route('news.post',[$a->category,$a->unique])}}">
                           <h3>{{$a->titre}}</h3>
                       </a>
                       <a href="n{{route('news.post',[$a->category,$a->unique])}}" class="read-more-btn">En savoir plus<i class="flaticon-next"></i></a>
                   </div>
               </div>
           </div>
           @empty
           <div class="container">
               <div class="row">
                   <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                       <h1 class="text-prim">Aucun Article Récents disponibles</h1>
                   </div>
               </div>
           </div>
           @endforelse
        </div>
        <div class="more-latest-news text-center">
            <p>
                <a href="latest-news.html" class="read-more-btn active"> Voir plus d'actualités<i class="flaticon-next"></i></a>
            </p>     
        </div>
    </div>
</div>
@endsection