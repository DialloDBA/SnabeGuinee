@php
   $uia = auth()->user()->username;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
    <title>{{$title ?? ' Snabe Guinée - « Accompagner le boursier à chaque étape de son parcours de réussite, de l’idée qui émane de partir étudier à l’étranger jusqu’à l’obtention de son diplôme et son accompagnement au retour.'}}</title>

  <!-- Favicon -->
  <link rel="icon" href="{{URL::asset('ui/img/core-ui/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{URL::asset('ui/img/icons/icon-96x96.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('ui/img/icons/icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{URL::asset('ui/img/icons/icon-167x167.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('ui/img/icons/icon-180x180.png')}}">

  
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{asset('ui/style.css')}}">

  <!-- Web App Manifest -->
  <link rel="manifest" href="{{asset('ui/manifest.json')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
  <style>
    
  </style>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>


  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper">
          <a href="{{route('auth.ui.home',auth()->user()->username)}}"> 
            {{-- ui/img/core-ui/img/logo.png --}}
            <img src="{{asset('ui/logos/logo.png')}}" alt="" style="max-height: 50px;">
          </a>
        </div>

        <div class="search-wrapper me-2">
          <a class="search-trigger-btn" href="#">
            <i class="bi bi-search"></i>
          </a>
        </div>

        <div class="search-wrapper me-2">
          <a class="search-trigger-btn" href="{{URL::to('/')}}" title="Acceder à la Page d'Accueil">
            <i class="bi bi-globe"></i> 
          </a>
        </div>

        {{-- <div class="setting-wrapper">
          <div class="setting-trigger-btn" id="settingTriggerBtn2">
            <i class="bi bi-globe"></i>
            <span></span>
          </div>
        </div> --}}
        <!-- Navbar Toggler -->
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
          <span class="d-block"></span>
          <span class="d-block"></span>
          <span class="d-block"></span>
        </div>
      </div>
    </div>
  </div>
    <!-- Setting Popup Overlay -->
    <div id="setting-popup-overlay"></div>

    <!-- Setting Popup Card -->
    <div class="card setting-popup-card shadow-lg" id="settingCard">
      <div class="card-body">
        <div class="container">
          <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
            <p class="mb-0">Settings</p>
            <div class="btn-close" id="settingCardClose"></div>
          </div>
  
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="availabilityStatus" checked>
              <label class="form-check-label" for="availabilityStatus">Availability status</label>
            </div>
          </div>
  
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="sendMeNotifications" checked>
              <label class="form-check-label" for="sendMeNotifications">Send me notifications</label>
            </div>
          </div>
  
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="darkSwitch">
              <label class="form-check-label" for="darkSwitch">Dark mode</label>
            </div>
          </div>
  
          <div class="single-setting-panel">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="rtlSwitch">
              <label class="form-check-label" for="rtlSwitch">RTL mode</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <!-- # Sidenav Left -->
  <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">

    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    <div class="offcanvas-body p-0">
      <div class="sidenav-wrapper">
        <!-- Sidenav Profile -->
        <div class="sidenav-profile bg-gradient">
          <div class="sidenav-style1"></div>

          <!-- User Thumbnail -->
          <div class="user-profile">
            <a href="{{ route('auth.ui.profile.index',$uia)}}">
              <img src="{{asset('ui/img/bg-img/2.jpg')}}" alt="">
            </a>
          </div>

          <!-- User Info -->
          <div class="user-info">
            <h6 class="user-name mb-0">{{auth()->user()->username}}</h6>
            <span>{{ "@".auth()->user()->profile()->first()->dossier() }}</span>
          </div>
        </div>

        <!-- Sidenav Nav -->
        <ul class="sidenav-nav ps-0">
          <li>
            <a href="{{route('home')}}">
              <i class="bi bi-house-door"></i>{{'Accueil'}}
            </a>
          </li>
          <li>
            <a href="{{route('home')}}">
              <i class="bi bi-house-door"></i>{{'Mon Profil'}}
            </a>
          </li>
          <li>
            <a href="{{route('auth.ui.formations.index',$uia)}}">
              <i class="bi bi-house-door"></i>{{'Formations'}}
            </a>
          </li>
          <li>
            <a href="{{route('auth.ui.experiences.index',$uia)}}">
              <i class="bi bi-house-door"></i>{{'Experiences'}}
            </a>
          </li>
          <li>
            <a href="{{route('auth.ui.competences.index',$uia)}}">
              <i class="bi bi-house-door"></i>{{'Competences'}}
            </a>
          </li>
          <li>
            <a href="{{route('home')}}">
              <i class="bi bi-house-door"></i>{{'CV'}}
            </a>
          </li>
          <li>
            <a href="{{route('auth.ui.offres.index',$uia)}}"><i class="bi bi-folder2-open"></i> Mes Offres
              <span class="badge bg-danger rounded-pill ms-2">220+</span>
            </a>
          </li>
          <li>
            <a href="pages.html"><i class="bi bi-collection"></i> Entretien RH
              <span class="badge bg-success rounded-pill ms-2">100+</span>
            </a>
          </li>
          {{-- <li>
            <a href="#"><i class="bi bi-cart-check"></i> Shop</a>
            <ul>
              <li>
                <a href="shop-grid.html"> Shop Grid</a>
              </li>
              <li>
                <a href="shop-list.html"> Shop List</a>
              </li>
              <li>
                <a href="shop-details.html"> Shop Details</a>
              </li>
              <li>
                <a href="cart.html"> Cart</a>
              </li>
              <li>
                <a href="checkout.html"> Checkout</a>
              </li>
            </ul>
          </li> --}}
          <li>
            <a href="{{route('auth.ui.parametres.index',$uia)}}"><i class="bi bi-gear"></i> Paramètres</a>
          </li>
          <li>
            <div class="night-mode-nav">
              <i class="bi bi-moon"></i> Mode Nuit
              <div class="form-check form-switch">
                <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
              </div>
            </div>
          </li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="bi bi-box-arrow-right"></i> {{ __('Déconnexion') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>

        <!-- Social Info -->
        <div class="social-info-wrap">
          <a href="#">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="#">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>

        <!-- Copyright Info -->
        <div class="copyright-info">
          <p>
            <span id="copyrightYear"></span>
            &copy; Made by <a href="#">Designing World</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="page-content-wrapper">
    @if (session('welcome'))
    <!-- Welcome Toast -->
    <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive"
      aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
      <div class="toast-body">
        <i class="bi bi-bookmark-check text-white h1 mb-0"></i>
        <div class="toast-text ms-3 me-2">
          <p class="mb-1 text-white">{{ session('welcome')}}</p>
          <small class="d-block">Click the <strong>Add to Home Screen</strong> button &amp; enjoy it like anapp.</small>
        </div>
      </div>
      <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast"aria-label="Close"></button>
    </div>
    @endif
    @yield('content')
  </div>

  <!-- Footer Nav -->
  <div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <!-- Footer Content -->
      <div class="footer-nav position-relative">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
          <li class="active">
            <a title="{{"Accueuil"}}" href="{{route('auth.ui.home',$uia)}}">
              <i class="bi bi-house"></i>
              <span class="d-none d-sm-block">{{"Accueuil"}}</span>
            </a>
          </li>

          <li>
            <a title="{{'Offres d\'Emploi'}}" href="{{route('auth.ui.offres.index',$uia)}}">
              <i class="bi bi-collection"></i>
              <span class="d-none d-sm-block">Mes Offres</span>
            </a>
          </li>
          <li>
            <a title="{{'Mes Bourses'}}" href="{{route('auth.ui.offres.index',$uia)}}">
              <i class="bi bi-postcard"></i>
              <span class="d-none d-sm-block">Mes Bourses</span>
            </a>
          </li>
          <li>
            <a title="{{'Entretien RH'}}" href="{{route('auth.ui.entretiens-rh.index',$uia)}}">
              <i class="bi bi-folder2-open"></i>
              <span class="d-none d-sm-block">Entretiens</span>
            </a>
          </li>
          <li>
            <a title="Messagerie" href="{{route('auth.ui.messages.index',$uia)}}">
              <i class="bi bi-chat-dots"></i>
              <span class="d-none d-sm-block">Messagerie</span>
            </a>
          </li>
          
          {{-- &nbsp; --}}

          <li>
            <a title="Paramètres" href="{{route('auth.ui.parametres.index',$uia)}}">
              <i class="bi bi-gear"></i>
              <span class="d-none d-sm-block">Paramètres</span>
            </a>
          </li>
          {{-- <li>
            <a title="Paramètres" href="{{route('auth.ui.parametres.index',auth()->user()->username)}}">
              <i class="bi bi-gear"></i>
              <span class="d-none d-sm-block">Paramètres</span>
            </a>
          </li> --}}
          <li>
            <a title="Dépot de Dossier" href="{{route('auth.ui.parametres.index',$uia)}}">
              <i class="bi bi-cloud-plus"></i>
              <span class="d-none d-sm-block">Dépots</span>
            </a>
          </li>
          <li>
            <a title="Notifications" href="{{route('auth.ui.notifications.index',$uia)}}">
              <i class="bi bi-bell"></i>
              <span class="d-none d-sm-block">Notifications</span>
            </a>
          </li>
          <li class="active fw-bold d-none d-sm-block">
            <a title="Mon Profile" href="{{ route('auth.ui.profile.index',$uia)}}">
              <i class="bi bi-bell"></i>
              <span class="d-none d-sm-block">Profile</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="{{asset('ui/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ui/js/slideToggle.min.js')}}"></script>
  <script src="{{asset('ui/js/internet-status.js')}}"></script>
  <script src="{{asset('ui/js/tiny-slider.js')}}"></script>
  <script src="{{asset('ui/js/venobox.min.js')}}"></script>
  <script src="{{asset('ui/js/countdown.js')}}"></script>
  <script src="{{asset('ui/js/rangeslider.min.js')}}"></script>
  <script src="{{asset('ui/js/vanilla-dataTables.min.js')}}"></script>
  <script src="{{asset('ui/js/index.js')}}"></script>
  <script src="{{asset('ui/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('ui/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('ui/js/dark-rtl.js')}}"></script>
  <script src="{{asset('ui/js/active.js')}}"></script>
  <script src="{{asset('ui/js/pwa.js')}}"></script>
</body>

</html>