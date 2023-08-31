<div class="top-header-area" style="border-bottom: 1px solid yellow;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <p>Recevez les dernières mises à jour et la réponse du SNABE</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 ">
                <div class="header-right-content">
                    <div class="list">
                        <ul>
                            {{-- <li><a href="graduate-admission.html">Students</a></li> --}}
                            <li style="margin-right: 15px !important;"><a href="{{route('home')}}">Forum</a></li>
                            <li style="margin-right: 15px !important;"><a href="{{route('faq')}}">Faqs</a></li>
                            <li style="margin-right: 15px !important;">
                                <a href="{{route('alumni')}}" class="nav-link">Alumni</a>
                            </li>
                            @guest
                            <li style="margin-right: 15px !important;">
                                <a href="{{route('login')}}"><i class="ri-login-circle-line"></i> Se Connecter</a>
                            </li>
                            <li style="margin-right: 15px !important;"> <a href="{{route('register')}}"> <i class="ri-user-add-line"></i> S'enregistrer</a></li>
                            @endguest

                            @auth
                            <li style="margin-right: 15px !important;">
                                <a href="{{route('auth.ui.home',auth()->user()->username )}}"><i class="ri-user-line"></i> Mon Espace Personnel</a>
                            </li>
                            {{-- {{ auth()->user()->name }} --}}
                            <li style="margin-right: 15px !important;">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('deconnexionForm').submit();">
                                    <i class="ri-logout-circle-line"></i> Déconnexion
                                </a>
                                <form action="{{ route('logout') }}" method="POST" class="" id="deconnexionForm">
                                    @csrf
                                    @method("POST")
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area nav-bg-1">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('asset/images/logo.jpg')}}" class="main-logo" lt="logo">
                        <img src="{{asset('asset/images/logo-2.png')}}" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('asset/images/green-logo.png')}}" alt="logo" style="width: 209px;">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Présentation</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('projets.index')}}" class="nav-link">Projets</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('bourses')}}" class="nav-link dropdown-toggle">
                                Bourses d'Etudes
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($pe as $p)
                                <li class="nav-item">
                                    <a href="{{ route('bourses.category',$p->unique)}}" class="nav-link">{{$p->titre }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news')}}" class="nav-link dropdown-toggle">
                                Actualités
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $c)
                                <li class="nav-item">
                                    <a href="{{route('news.category',$c)}}" class="nav-link">{{$c->libelle_cat}}</a>
                                </li>
                                @endforeach
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Média
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('videos')}}" class="nav-link">Vidéos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('photos')}}" class="nav-link">Photos</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('offres')}}" class="nav-link">Stages/Emplois</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>