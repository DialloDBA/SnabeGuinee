<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/remixicon.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/cookiealert.css')}}">

    @yield('css')
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('asset/css/dark.css')}}">

    @yield('css')
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css')}}">
    <link rel="icon" type="image/png" href="asset/images/favicon.png">
    <title>{{$title ?? ' Snabe Guinée - « Accompagner le boursier à chaque étape de son parcours de réussite, de l’idée qui émane de partir étudier à l’étranger jusqu’à l’obtention de son diplôme et son accompagnement au retour.'}}</title>
</head>
<style>
    .text-prim{
        color: #036130; !important;
    }
    .bg-prim{
        background-color: #036130 !important;
    }
    .buy-now-btn {
    right: 25px !important;
    z-index: 99;
    top: 50%;
    position: fixed;
    transform: translateY(-50%);
    border-radius: 30px;
    display: inline-block;
    color: #fff;
    background-color: #82b440;
    padding: 16px 30px 25px 43px !important;
    box-shadow: 0 1px 25px 1px #e7ebe10a;
    font-size: 13px;
    font-weight: 600;
}

.custom-alert {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      max-width: 300px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
<body>

    <!-- Exemple de message de succès -->
    <div class="custom-alert alert alert-success shadow" role="alert">
        <i class="fas fa-check-circle" style="font-size: 24px;"></i> <!-- Icône de succès -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="font-weight-light mt-4"></h4>
        <p class="mb-0">Ceci est un exemple de message de succès personnalisé.</p>
      </div>

    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>

    @include('inc.ss.header')
    @include('inc.ss.side')

    @yield('content')

    {{-- style="background-color: #036130 !important;" --}}
    <div class="footer-area pt-100 pb-70" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-6">
                    <div class="footer-logo-area">
                        <a href="{{route('home')}}">
                            <img src="{{asset('asset/images/logo-2.png')}}" alt="Image" style="background-color:rgb(251 249 249 / 30%)">
                        </a>
                        <p>
                            Le Service National des Bourses Extérieures (SNABE) est un Etablissement Public à caractère Administratif (EPA).
                        </p>
                        <div class="contact-list">
                            <ul>
                                <li>
                                    <a href="tel:{{$info->telephone_1}}">{{$info->telephone_1}}</a>
                                </li>
                                <li>
                                    <a href="mailto:{{$info->email_1}}"><span></span>{{$info->email_1}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="footer-widjet">
                        <h3>Liens Utiles</h3>
                        <div class="list">
                            <ul>
                                <li><a target="_blank" href="https://presidence.gov.gn/">La Présidence</a></li>
                                <li><a target="_blank" href="chttp://primature.gov.gn/">La Primature</a></li>
                                <li><a target="_blank" href="http://gouvernement.gov.gn/">Le Gouvernement</a></li>
                                <li><a target="_blank" href="https://mesrs.gov.gn/institutions/">Les Institutions</a></li>
                                <li><a target="_blank" href="https://mesrs.gov.gn/les-ministeres/">Les Ministères</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="footer-widjet">
                        <h3 class="text-capitalize">Actualités</h3>
                        <div class="list">

                            <ul>
                                @foreach ($categories as $k=> $c)
                                    <li><a href="campus-life.html">{{$c->libelle_cat}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <div class="footer-widjet">
                        <h3>Docs</h3>
                        <div class="list">
                            <ul>
                                <li><a href="/lois">Lois</a></li>
                                <li><a href="/decrets">Décrets</a></li>
                                <li><a href="/arretes">arretés</a></li>
                                <li><a href="/arretes">Autres</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{asset('asset/images/shape-1.png')}}" alt="Image">
            </div>
        </div>
    </div>


    <div class="copyright-area" >
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-4 ">
                        <div class="social-content">
                            <ul>
                                <li><span>Suivez-nous sur</span></li>
                                <li>
                                    <a href="{{$info->facebook}}" target="_blank"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="{{$info->twitter}}" target="_blank"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li>
                                    <a href="{{$info->facebook}}" target="_blank"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{$info->linkedin}}" target="_blank"><i class="ri-linkedin-fill"></i></a>
                                </li>                                
                                <li>
                                    <a href="{{$info->youtube}}" target="_blank"><i class="ri-youtube-fill"></i></a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="copy">
                            <p>© Copyright {{ date('Y')}} <a href="https://assiatech.com/"
                                    target="_blank">Assia Technologies SARL</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-CookiesComponent></x-CookiesComponent>
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>

<script>
    branding = '{{asset("asset/images/branding/brand.png")}}'
</script>
    <script src="{{ asset('asset/js/jquery.min.js')}}"></script>

    <script src="{{ asset('asset/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('asset/js/jquery.meanmenu.js')}}"></script>

    <script src="{{ asset('asset/js/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('asset/js/carousel-thumbs.min.js')}}"></script>

    <script src="{{ asset('asset/js/jquery.magnific-popup.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            }
        });
    </script>
    @yield('js')
    <script src="{{ asset('asset/js/aos.js')}}"></script>

    <script src="{{ asset('asset/js/odometer.min.js')}}"></script>

    <script src="{{ asset('asset/js/appear.min.js')}}"></script>
    <script src="{{ asset('asset/js/cookiealert.js')}}"></script>

    <script src="{{ asset('asset/js/form-validator.min.js')}}"></script>

    <script src="{{ asset('asset/js/contact-form-script.js')}}"></script>

    <script>
        $(".newsletter-form").submit(function(e){
           
        });
        $("#sideContactFormMessage").submit(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            }
        });
        
        $.ajax({
            type : 'POST',
            url : $(this).attr('action'),
            data : {
                nom_complet : $(this).find('#nom_complet').val(),
                email : $(this).find('#email').val(),
                telephone : $(this).find('#telephone').val(),
                sujet : $(this).find('#sujet').val(),
                message : $(this).find('#message').val(),
            },

            // type : $(this).attr("method"),
            // url : $(this).attr("action"),
            // contentType: false,
            // cache: false,      
            // processData:false,
            // data : (new FormData($(this)[0])),
            beforeSend:function(){
                console.log("envoi des données...");
                $(".help-block").text("");
                $("#sideContactFormMessage").find('.default-btn').html('<span>Envoi du Message ...</>');
                $("div.message").remove();
            },
            success : function(data){
                console.log(data);
                $html= '<div class="custom-alert alert alert-success shadow" role="alert">'+
                '<i class="fas fa-check-circle" style="font-size: 24px;"></i>'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                    '<span aria-hidden="true">&times;</span>'+
                '</button>'+
                '<h4 class="font-weight-light mt-4">Bien joué !</h4>'+
                '<p class="mb-0">Ceci est un exemple de message de succès personnalisé.</p>'+
                '</div>';
                // $(".bg-hover-black").text("Envoyez le Message");
                    $("#sideContactFormMessage").find('.default-btn').html('<span>Envoyez le Message</>');
                if(data.success==true){
                    // $('body').append($html).fadeIn(500).delay(3000).fadeOut(500,function(){
                    //     $(this).removeAttr('style');
                    //     $(this).find('.custom-alert').remove();
                    //     $("#sideContactFormMessage").find('.alert-success').remove();
                    // });
                    $("#sideContactFormMessage")[0].reset();
                    $(".form-title").after('<div class="alert alert-'+data.type+' alert-dismissible fade show message" role="alert">'+
                    '<strong>'+data.alert+'</strong> '+data.message+''+
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                    '</div>');
                }
            },
            error : function(error){
                console.log(error)
                // $("#modalAddBtn").html('Ajouter ce Parent');
                if(error.responseJSON.errors){
                    $("#sideContactFormMessage").find('.default-btn').html('<span>Renvoyez le Message</>');
                    // $(".input-group").addClass("has-error-input");
                    $.each(error.responseJSON.errors,function(champ,error){
                        // $(`${champ}`).css("margin-bottom","0px;");
                        $('div.'+champ+'-with-errors').text(error);
                        // $(champ).parent().addClass(".has-error-input");
                        // console.log($(champ).parent().html())
                    });
                }
            }
        });
    });
    </script>
    @yield('js')
    <script src="{{ asset('asset/js/custom.js')}}"></script>
</body>

</html>