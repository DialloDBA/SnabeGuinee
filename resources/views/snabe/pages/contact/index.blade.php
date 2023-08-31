@extends('inc.ss.app')

@section('css')
    <style>
        .custom-alert {
            /* display: none; */
            position: fixed;
            bottom: 20px;
            right: 20px;
            max-width: 300px;
            z-index: 99999;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
@section('content')
<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Contactez-nous</h1>
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contacts-form">
                    <h3 class="text-prim form-title">Laisser un message </h3>
                    <form id="contactFormMessage" action="{{ route('contact.store')}}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Votre nom complet</label>
                                    <input type="text" name="nom_complet" id="nom_complet" class="form-control" placeholder="Votre Nom Complet...">
                                    <div class="help-block text-danger nom_complet-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Votre e-mail</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="abcd@gmail.com">
                                    <div class="help-block text-danger text-danger email-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Votre téléphone</label>
                                    <input type="tel" name="telephone" id="telephone" value="+224 " placeholder="+224 623030303" class="form-control">
                                    <div class="help-block text-danger telephone-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Sujet</label>
                                    <input type="text" name="sujet"  id="sujet" class="form-control" placeholder="Le sujet de votre message">
                                    <div class="help-block text-danger sujet-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Votre message</label>
                                    <textarea name="message" placeholder="Ecrire votre message ici..." class="form-control" id="message" cols="30" rows="8" required=""></textarea>
                                    <div class="help-block text-danger message-with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="termes" value="J'accepte les termes et la politique de confidentialité." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                    <label class="form-check-label" for="gridCheck">
                                        J'accepte les <a href="{{ route('home') }}">termes</a> et <a href="{{route('privacy')}}">la politique de confidentialité</a>
                                    </label>
                                    <div class="help-block text-danger termes-with-errors gridCheck-error"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    <span>Envoyez le Message</span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-and-address">
                    <h2>Contactez-nous</h2>
                    <p>Il est très important de prendre soin du patient, et le patient sera suivi par le médecin, mais c'est le cas avec le travail et la douleur</p>
                    <div class="contact-and-address-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-card">
                                    <div class="icon">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <h4>Coordonnées</h4>
                                    <p>Téléphone: <a href="tel:{{$info->telephone_1}}">{{$info->telephone_1}}</a></p>
                                    <p>
                                        E-mail : <a href="mailto:{{$info->email_1}}"><span class="" >{{$info->email_1}}</span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact-card">
                                    <div class="icon">
                                        <i class="ri-map-pin-line"></i>
                                    </div>
                                    <h4>Adresse Officielle </h4>
                                    <p>{{$info->email_1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media">
                        <h3>Réseaux sociaux</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tem incididunt ut
                            labore et dolore magna aliquat enim</p>
                        <ul>
                            <li>
                                <a href="{{$info->facebook}}" target="_blank"><i
                                        class="flaticon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{$info->twitter}}" target="_blank"><i
                                        class="flaticon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$info->youtube}}" target="_blank">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$info->linkedin}}" target="_blank"><i class="flaticon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function() {
        // $.ajaxSetup({
        //     headers : {
        //         'X-CSRF-TOKEN' : '{{ csrf_token() }}'
        //     }
        // });
        
        
    });
    $("#contactFormMessage").submit(function(e){
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
                $("#contactFormMessage").find('.default-btn').html('<span>Envoi du Message ...</>');
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
                    $("#contactFormMessage").find('.default-btn').html('<span>Envoyez le Message</>');
                if(data.success==true){
                    // $('body').append($html).fadeIn(500).delay(3000).fadeOut(500,function(){
                    //     $(this).removeAttr('style');
                    //     $(this).find('.custom-alert').remove();
                    //     $("#contactFormMessage").find('.alert-success').remove();
                    // });
                    $("#contactFormMessage")[0].reset();
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
                    $("#contactFormMessage").find('.default-btn').html('<span>Renvoyez le Message</>');
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
@endsection